<?php

namespace App\Http\Controllers;
use App\tunjangan;
use App\golongan;
use App\jabatan;
use Validator;
use Input;


use Request;

class tunjangancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjangan=tunjangan::all();
        return view('tunjangan.index',compact('tunjangan'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('tunjangan.create',compact('golongan','jabatan'));
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

         $tunjangan=Request::all();
         $rules=['kode_tunjangan'=>'required|unique:tunjangans',
                'besaran_uang'=>'required|unique:tunjangans','jumlah_anak'=>'required|unique:tunjangans'];
         $message=['kode_tunjangan.required'=>'Kolom Jangan Kosong','kode_tunjangan.unique'=>'Masukan Sudah Ada',
                   'besaran_uang.required'=>'Kolom Jangan Kosong','besaran_uang.unique'=>'Masukan Sudah Ada'
                   ,'jumlah_anak.required'=>'Kolom Jangan Kosong','jumlah_anak.unique'=>'Masukan Sudah Ada'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         tunjangan::create($tunjangan);
         return redirect('tunjangan');
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
        $tunjangan=tunjangan::find($id);
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('tunjangan.edit',compact('tunjangan','jabatan','golongan'));
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
        $tunjanganupdate=Request::all();
        $tunjangan=tunjangan::find($id);
        $tunjangan->update($tunjanganupdate);
        return redirect('tunjangan');
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
        tunjangan::find($id)->delete();
        return redirect ('tunjangan');
    }
}
