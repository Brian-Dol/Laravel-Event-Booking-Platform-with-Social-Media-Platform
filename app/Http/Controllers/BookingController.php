<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Event;
use App\Models\Booking;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('booking.index',['data'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    //{
        //$customers=Customer::all();
        

        //return view('booking.create',['data'=>$customers]);
        
    //}

    public function create()
    {
        $customers = Customer::all();
        $events = Event::all();
        
        return view('booking.create', [
            'customers' => $customers,
            'events' => $events
        ]);
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
        'customer_id'=>'required',
        'event_id'=>'required',
        'total_adults'=>'required',
        'total_children'=>'required',
    ]);

    $event = Event::findOrFail($request->event_id);
    $total_adults = intval($request->total_adults);
    $total_children = intval($request->total_children);
    $total_price = $event->price * ($total_adults + $total_children);

    if($request->ref=='front'){
            $sessionData=[
                'customer_id'=>$request->customer_id,
                'event_id'=>$request->event_id,
                'total_adults'=>$request->total_adults,
                'total_children'=>$request->total_children,
                'total_price'=>$request->total_price,
                'ref'=>$request->ref
            ];

            session($sessionData);
            \Stripe\Stripe::setApiKey('sk_test_51JKcB7SFjUWoS3CIIaPlxPSREpJYoyPsn5KIhj2CBCM9z23dRUreOUwFq6eXmRYmgXNfxSozplocikiAFe3aX7sK008OH0sqy6');
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                  'price_data' => [
                    'currency' => 'inr',
                    'product_data' => [
                      'name' => 'event',
                    ],
                    'unit_amount' => $total_price*100,

                  ],
                  'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => 'http://localhost/briansocialapp/public/booking/success?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => 'http://localhost/briansocialapp/public/booking/fail',
            ]);
            return redirect($session->url);
        }else{
            $data=new Booking;
            $data->customer_id=$request->customer_id;
            $data->event_id=$request->event_id;
            $data->total_adults=$total_adults;
            $data->total_children=$total_children;
            $data->total_price=$total_price;

            if($request->ref=='front'){
                $data->ref='front';
            }else{
                $data->ref='admin';
            }

            
            
            $data->save();

            //if($request->ref=='front'){
                //return redirect('booking')->with('success', 'Booking has been created')->with('total_price', $total_price);

           // }

            return redirect('admin/booking/create')->with('success', 'Data has been added')->with('total_price', $total_price);

        }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Booking::find($id);
        return view('booking.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::all();
        $events = Event::all();
        $data=Booking::find($id);
        return view('booking.edit',['data'=>$data, 'events'=>$events, 'customers'=>$customers]);
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
            'customer_id'=>'required',
            'event_id'=>'required',
            'total_adults'=>'required',
            'total_children'=>'required',
            
            
        ]);

        $event = Event::findOrFail($request->event_id);

        $total_adults = intval($request->total_adults);
        $total_children = intval($request->total_children);
        $total_price = $event->price * ($total_adults + $total_children);

        
        $data=Booking::find($id);
        $data->customer_id=$request->customer_id;
        $data->event_id=$request->event_id;
        $data->total_adults=$request->total_adults;
        $data->total_children=$request->total_children;
        $data->total_price=$total_price;
        if($request->ref=='front'){
                $data->ref='front';
            }else{
                $data->ref='admin';
            }
        
        $data->save();

        return redirect('admin/booking/'.$id.'/edit')->with('success', 'Data has been updated')->with('total_price', $total_price);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id',$id)->delete();
        return redirect('admin/booking')->with('success','Data has been deleted.');    
    }

    public function front_booking()
    {
        $events = Event::all();
        return view('front-booking',['events'=>$events]);
    }

    
        function booking_payment_success(Request $request){
        \Stripe\Stripe::setApiKey('sk_test_51JKcB7SFjUWoS3CIIaPlxPSREpJYoyPsn5KIhj2CBCM9z23dRUreOUwFq6eXmRYmgXNfxSozplocikiAFe3aX7sK008OH0sqy6');
        $session = \Stripe\Checkout\Session::retrieve($request->get('session_id'));
        $customer = \Stripe\Customer::retrieve($session->customer);

        // Retrieve the event ID and booking details from the session
        $event_id = session('event_id');
        $total_adults = session('total_adults');
        $total_children = session('total_children');

        // Retrieve the price from the events table
        $event = Event::findOrFail($event_id);
        $price = $event->price;

        // Calculate the total price
        $total_price = $price * ($total_adults + $total_children);

        if($session->payment_status=='paid'){
            $data=new Booking;
            $data->customer_id=session('customer_id');
            $data->event_id=$event_id;
            
            $data->total_adults=$total_adults;
            $data->total_children=$total_children;
            $data->total_price=$total_price;

            if(session('ref')=='front'){
                $data->ref='front';
            }else{
                $data->ref='admin';
            }
            $data->save();
            return view('booking.success');
        }
    }


    function booking_payment_fail(Request $request){
        return view('booking.failure');
    }
}
