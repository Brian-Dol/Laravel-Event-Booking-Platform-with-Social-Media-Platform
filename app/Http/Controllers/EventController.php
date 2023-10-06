<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;
use App\Models\Event;
use App\Models\Eventimage;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Event::all();
        return view('event.index',['data'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventtypes=EventType::all();
        return view('event.create',['eventtypes'=>$eventtypes]);


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
            'title'=>'required',
            'price'=>'required',
            'event_date'=>'required',
            'location'=>'required',
            'et_id'=>'required',
            
            
        ]);

        $data=new Event;
        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->event_date=$request->event_date;
        $data->location=$request->location;
        $data->event_type_id=$request->et_id;
        $data->save();


        if($request->hasFile('imgs')){
            foreach($request->file('imgs') as $img){
                $imgPath=$img->store('public/imgs');
                $imgData=new Eventimage;
                $imgData->event_id=$data->id;
                $imgData->img_scr=$imgPath;
                $imgData->img_alt=$request->title;
                $imgData->save();

            }
        }

        return redirect('admin/events/create')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Event::find($id);
        return view('event.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventtypes=EventType::all();
        $data=Event::find($id);
        return view('event.edit',['data'=>$data,'eventtypes'=>$eventtypes]);

        
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
            'title'=>'required',
            'price'=>'required',
            'event_date'=>'required',
            'location'=>'required',
            'et_id'=>'required',
            
            
        ]);

        $data=Event::find($id);
        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->event_date=$request->event_date;
        $data->location=$request->location;
        $data->event_type_id=$request->et_id;
        $data->save();

        if($request->hasFile('imgs')){
            foreach($request->file('imgs') as $img){
                $imgPath=$img->store('public/imgs');
                $imgData=new Eventimage;
                $imgData->event_id=$data->id;
                $imgData->img_scr=$imgPath;
                $imgData->img_alt=$request->title;
                $imgData->save();

            }
        }


        return redirect('admin/events/'.$id.'/edit')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::where('id',$id)->delete(); 

        return redirect('admin/events')->with('success', 'Data has been deleted');   

    }

    public function destroy_image($img_id)
    {

        $data=Eventimage::where('id',$img_id)->first();
        Storage::delete($data->img_scr);

        Eventimage::where('id',$img_id)->delete(); 

        return response()->json(['bool'=>true]);   

    }

}


