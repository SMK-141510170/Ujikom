<?php

namespace App\Http\Controllers;
use App\tunjangan_pegawai;
use App\pegawai;
use App\tunjangan;
use Validator;
use Input;

use Request;

class tunjangan_pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $tunjangan_pegawai=tunjangan_pegawai::all();
        return view ('tunjangan_pegawai.index',compact('tunjangan_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangan=tunjangan::all();
        $pegawai=pegawai::all();
        return view ('tunjangan_pegawai.create',compact('tunjangan','pegawai'));
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
        $tunjangan_pegawai=Request::all();
         $rules=[''];
         $message=[''];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan_pegawai/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         tunjangan_pegawai::create($tunjangan_pegawai);
         return redirect('tunjangan_pegawai');
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
        //
        $tunjangan_pegawai=tunjangan_pegawai::find($id);
        $pegawai=pegawai::all();
        $tunjangan=tunjangan::all();
        return view('tunjangan_pegawai.edit',compact('tunjangan_pegawai','tunjangan','pegawai'));
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
        //
        $tunjanganpegawaiupdate=Request::all();
        $tunjangan_pegawai=tunjangan_pegawai::find($id);
        $tunjangan_pegawai->update($tunjanganpegawaiupdate);
        return redirect('tunjangan_pegawai');
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
        tunjangan_pegawai::find($id)->delete();
        return redirect('tunjangan_pegawai');
    }
}
