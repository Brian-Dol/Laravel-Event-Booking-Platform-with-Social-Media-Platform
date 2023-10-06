<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CustomerController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Customer::all();
        return view('customer.index',['data'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('customer.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'DOB'=>'required',
            'password'=>'required',
            
        ]);

        if($request->hasFile('photo')){
            $imgPath=$request->file('photo')->store('public/imgs');
        }else{
            $imgPath=null;
        }
        
        $data=new Customer;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->DOB=$request->DOB;
        $data->address=$request->address;
        $data->nationality=$request->nationality;
        $data->password=sha1($request->password);
        $data->photo=$imgPath;
        $data->save();

        $ref=$request->ref;
        if($ref=='front'){
            return redirect('register')->with('success','You have been registered.');
        }

        return redirect('admin/customer/create')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data=Customer::find($id);
        //$imgPath=$request->file('photo')->show('public/imgs');
        return view('customer.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $data=Customer::find($id);
        return view('customer.edit',['data'=>$data]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'DOB'=>'required',
            'password'=>'required',
            
        ]);

        if($request->hasFile('photo')){
            $imgPath=$request->file('photo')->store('public/imgs');

        }else{
            $imgPath=$request->prev_photo;

        }

        

        $data=Customer::find($id);

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->DOB=$request->DOB;
        $data->address=$request->address;
        $data->nationality=$request->nationality;
        $data->password=sha1($request->password);
        $data->photo=$imgPath;
        $data->save();


        return redirect('admin/customer/'.$id.'/edit')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::where('id',$id)->delete(); 

        return redirect('admin/customer')->with('success', 'Data has been deleted');   

    }

    // Login
    function login(){
        return view('frontlogin');
    }

    // Check Login
    function customer_login(Request $request){
        $email=$request->email;
        $pwd=sha1($request->password);
        $detail=Customer::where(['email'=>$email,'password'=>$pwd])->count();
        if($detail>0){
            $detail=Customer::where(['email'=>$email,'password'=>$pwd])->get();
            session(['customerlogin'=>true,'data'=>$detail]);
            return redirect('/');
        }else{
            return redirect('login')->with('error','Invalid email/password!!');
        }
    }

    // register
    function register(){
        return view('register');
    }

    // Logout
    function logout(){
        session()->forget(['customerlogin','data']);
        return redirect('login');
    }

    public function profile_page($customer_id)
    {
        
        $customer = Customer::findOrFail($customer_id);
        $posts = $customer->posts()->orderBy('created_at', 'desc')->get();
        // Debugging statements
            dd($customer);
            dd($posts);

        return view('socialaccount.profile_page', ['customer' => $customer, 'posts' => $posts]);
    }




}
