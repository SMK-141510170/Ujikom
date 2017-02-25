<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use Input;
use App\penggajian;
use App\tunjangan_pegawai;
use App\pegawai;
use App\lembur_pegawai;


class penggajiancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggajian=penggajian::all();
        $pegawai=pegawai::all();
        $lembur_pegawai=lembur_pegawai::all();
        $tunjangan=tunjangan_pegawai::all();
        return view('penggajian.index',compact('penggajian','pegawai','lembur_pegawai','tunjangan'));
    }

     public function search(Request $request)
    {
         $query = Request::get('q');
        $pegawai = pegawai::where('id', 'LIKE', '%' . $query . '%')->paginate(10);
        $pegawaii = pegawai::all();
        $penggajian=penggajian::all();
         $lembur_pegawai=lembur_pegawai::all();
        $tunjangan=tunjangan_pegawai::all();
        return view('penggajian.result', compact('penggajian','pegawai','pegawaii','lembur_pegawai','tunjangan', 'query'));
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
        //
        $penggajian=Request::all();
        penggajian::create($penggajian);
        return redirect('penggajian');
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
}
