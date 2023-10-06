<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Testimonial;
use Cookie;

class AdminController extends Controller
{
    //Login
    function login(){
        return view('login');

    }

    //Check Login
    function check_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            
            
        ]);

        $admin=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->count();

        if($admin>0){
            $adminData=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->get();
            session(['adminData'=>$adminData]);

            if($request->has('remeberme')){
                Cookie::queue('adminuser',$request->username,1440);
                Cookie::queue('adminpwd',$request->password,1440);

            }


            return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg','Invalid Username/Password!!');
        }
    }

    //Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');


    }

    function dashboard(){
        //For line graph
        $bookings=Booking::selectRaw('count(id) as total_bookings, created_at')->groupBy('created_at')->get();

        $labels=[];
        $data=[];
        foreach($bookings as $booking){
            $labels[]=$booking['created_at'];
            $data[]=$booking['total_bookings'];

        }

        // For Pie Chart
        $etbookings=DB::table('event_types as et')
            ->join('events as e','e.event_type_id','=','et.id')
            ->join('bookings as b','b.event_id','=','e.id')
            ->select('et.*','e.*','b.*',DB::raw('count(b.id) as total_bookings'))
            ->groupBy('e.event_type_id')
            ->get();
        $plabels=[];
        $pdata=[];
        foreach($etbookings as $ebooking){
            $plabels[]=$ebooking->title;
            $pdata[]=$ebooking->total_bookings;
        }
        // End

        return view('dashboard',['labels'=>$labels,'data'=>$data,'plabels'=>$plabels,'pdata'=>$pdata]);

    }

    public function testimonials()
    {
        $data=Testimonial::all();
        return view('admin_testimonials',['data'=>$data]);
    }

    public function destroy_testimonial($id)
    {
       Testimonial::where('id',$id)->delete();
       return redirect('admin/testimonials')->with('success','Data has been deleted.');
    }
}
