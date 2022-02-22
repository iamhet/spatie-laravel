<?php

namespace App\Http\Controllers;

use App\Models\student_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class action extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addData');
    }
    public function operationCreate(Request $request)
    {
        $data = new student_detail();
        $data->name=$request->name;
        $data->marks=$request->marks;
        $data->save();
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=student_detail::find($id);
        return view('update',['student_detail'=>$data]);  
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
        $data=student_detail::find($request->id);
        $data->name=$request->name;
        $data->marks=$request->marks;
        $data->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=student_detail::find($id);
        $data->delete();
        return redirect('home'); 
    }
}
