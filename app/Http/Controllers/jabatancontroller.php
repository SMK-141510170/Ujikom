<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use Validator;
use Input;



class jabatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jabatan=jabatan::all();
        return view('jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $jabatan=jabatan::all();
        return view('jabatan.create',compact('jabatan'));
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

         $jabatan=Request::all();
         $rules=['kode_jabatan'=>'required|unique:jabatans',
                 'nama_jabatan'=>'required|unique:jabatans',
                 'besaran_uang'=>'required|unique:jabatans'];
         $message=[
                  'kode_jabatan.required'=>'Kolom Jangan Kosong','kode_jabatan.unique'=>'Masukan Sudah Ada',
                  'nama_jabatan.required'=>'Kolom Jangan Kosong','nama_jabatan.unique'=>'Masukan Sudah Ada',
                  'besaran_uang.required'=>'Kolom Jangan Kosong','besaran_uang.unique'=>'Masukan Sudah Ada'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/jabatan/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         jabatan::create($jabatan);
         return redirect('jabatan');
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
        $jabatan=jabatan::find($id);
        return view('jabatan.edit',compact('jabatan'));
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
        $jabatanupdate=Request::all();
        $jabatan=jabatan::find($id);
        $jabatan->update($jabatanupdate);
        return redirect('/jabatan');
        /*
        $jabatan=Request::all();
         $rules=['kode_jabatan'=>'required|unique:jabatans',
                 'nama_jabatan'=>'required|unique:jabatans',
                 'besaran_uang'=>'required|unique:jabatans'];
         $message=[
                  'kode_jabatan.required'=>'Kolom Jangan Kosong','kode_jabatan.unique'=>'Masukan Sudah Ada',
                  'nama_jabatan.required'=>'Kolom Jangan Kosong','nama_jabatan.unique'=>'Masukan Sudah Ada',
                  'besaran_uang.required'=>'Kolom Jangan Kosong','besaran_uang.unique'=>'Masukan Sudah Ada'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
        {
            # code...
            return redirect('/jabatan/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
        jabatan::create($jabatan);
        $jabatanupdate=Request::all();
        $jabatan=jabatan::find($id);
        $jabatan->update($jabatanupdate);
        return redirect('jabatan');
        }
        */
        
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
        jabatan::find($id)->delete();
        return redirect('jabatan');
    }
}
