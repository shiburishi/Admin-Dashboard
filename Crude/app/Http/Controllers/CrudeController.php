<?php

namespace App\Http\Controllers;

use App\Models\Crude;
use Illuminate\Http\Request;

class CrudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Data=Crude::all();
        return view('crudepages.index',compact('Data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('crudepages.form');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Crude::create($request->all());

        $name=request('name');
        $roll=request('roll');
        $phone=request('phone');

        Crude::create([
            'name'=>$name,
            'roll'=>$roll,
            'phone'=>$phone,
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function show(Crude $crude, $id)
    {
     
        
        $data=Crude::find($id);
        return view('crudepages.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=Crude::find($id);
        return view('crudepages.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crude $crude, $id)
    {
        $name=request('name');
        $roll=request('roll');
        $phone=request('phone');

        
        $data=Crude::find($id);
        $data->name=$name;
        $data->roll=$roll;
        $data->phone=$phone;

        $data->save();
        return redirect('/home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crude $crude, $id)
    {
        
        $data=Crude::find($id);
        $data->delete();
        return back();
    }
}
