<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;
use App\Models\Event;
use App\Models\Eventimage;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Customer;

class HomeController extends Controller
{
    //Home page
    function home(){
        $services=Service::all();
        $events=Event::all();
        $testimonials=Testimonial::all();
        $customers=Customer::all();
        
        return view('home',['events'=>$events,'services'=>$services,'testimonials'=>$testimonials, 'customers'=>$customers]);
    }

    // Service Detail Page
    function service_detail(Request $request, $id){
        $service=Service::find($id);
        return View('servicedetail',['service'=>$service]);
    }

     // Add Testimonial
    function service(){
        $services=Service::all();
        $customers=Customer::all();
        $testimonials=Testimonial::all();
        return view('service', ['services'=>$services, 'testimonials'=>$testimonials, 'customers'=>$customers]);
    }

    // Add Testimonial
    function add_testimonial(){
        return view('add-testimonial');
    }

    // Save Testimonial
    function save_testimonial(Request $request){
        $customerId=session('data')[0]->id;
        $data=new Testimonial;
        $data->customer_id=$customerId;
        $data->testi_cont=$request->testi_cont;
        $data->save();

        return redirect('customer/add-testimonial')->with('success','Data has been added.');
    }
}
