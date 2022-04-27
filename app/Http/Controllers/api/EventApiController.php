<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Event::create($request->all());
        if($result){
            return ["result"=>"Event Saved"]; 
        }else{
            return ["result"=>"Event Not Saved"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return Event::where('id',$request->id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $event = Event::find($request->id);
        if($event){
            $event->name = $request->name;
            $event->slug = $request->slug;
            $result=$event->save();
            if($result){
                return ["result"=>"Event Updated"]; 
            }else{
                return ["result"=>"Event Not Updated"];
            }
        }else{
            $result = Event::create($request->all());
            if($result){
                return ["result"=>"Event Created"]; 
            }else{
                return ["result"=>"Event Not Created"];
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $result=$event->delete();
        if($result){
            return ["result"=>"Record has been delete"];
        }else{
            return ["result"=>"Delete operation is failed"];
        }
       
    }

    public function active_events()
    {
        return Event::where('created_at','<=',Carbon::now())
        ->where('updated_at','>=',Carbon::now())->get();
    }
    
}
