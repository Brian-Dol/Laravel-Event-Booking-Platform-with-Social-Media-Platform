<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;

class EventtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=EventType::all();
        return view('eventtype.index',['data'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('eventtype.create');


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
            'detail'=>'required',
            
        ]);

        $data=new Eventtype;
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();

        return redirect('admin/eventtype/create')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=EventType::find($id);
        return view('eventtype.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $data=EventType::find($id);
        return view('eventtype.edit',['data'=>$data]);

        
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
            'detail'=>'required',
            
        ]);
        
        $data=Eventtype::find($id);
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();


        return redirect('admin/eventtype/'.$id.'/edit')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Eventtype::where('id',$id)->delete(); 

        return redirect('admin/eventtype')->with('success', 'Data has been deleted');   

    }
}
