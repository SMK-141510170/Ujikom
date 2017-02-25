@extends('layouts.app')
@section('content')

<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                <h3>MENU UTAMA</h3><div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="{{url('jabatan')}}">Jabatan</a><br><br>
                    <a class="btn btn-success form-control" href="{{url('golongan')}}">Golongan</a><br><br>
                    <a class="btn btn-danger form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><br><br>
                    <a class="btn btn-success form-control" href="{{url('tunjangan')}}">Tunjangan</a><br><br>
                    <a class="btn btn-warning form-control" href="{{url('pegawai')}}">Pegawai</a><br><br>
                    <a class="btn btn-primary form-control" href="{{url('lembur_pegawai')}}">Lembur Pegawai</a><br><br>
                    <a class="btn btn-warning form-control" href="{{url('tunjangan_pegawai')}}">Tunjangan Pegawai</a><br><br>
                    <a class="btn btn-danger form-control" href="{{url('penggajian')}}">Penggajian</a>  
                </div>
            </center>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-success">
                <div class="panel-heading"><h3><center>Tambah Data Lembur Pegawai</center></h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('lembur_pegawai.store') }}">
                        {{ csrf_field() }}
                       

                                <div class="form-group">
                               <label for="name" class="col-md-4 control-label">Kode Lembur</label>
                               <div class="col-md-6">
                               <select class="form-control" name="kode_lembur_id" >
                                <option>pilihan</option>
                                @foreach ($kategori_lembur as $data)
                                <option value="{!! $data->id!!}">{!! $data->kode_lembur!!} || {!! $data->jabatan->nama_jabatan!!} || {!! $data->golongan->nama_golongan!!}</option>
                                @endforeach
                               </select>
                               </div>
                               </div>



                               <div class="form-group">
                               <label for="name" class="col-md-4 control-label">Nama Pegawai</label>
                               <div class="col-md-6">
                               <select class="form-control" name="id_pegawai" >
                                <option>pilihan</option>
                                @foreach ($pegawai as $data)
                                <option value="{!! $data->id!!}">{!! $data->User->name!!}</option>
                                @endforeach
                               </select>
                               </div>
                               </div>


                            <div class="form-group">
                            <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('jumlah_jam') ? 'has-errors':'message'}}" >
                                <input id="jumlah_jam" type="text" class="form-control" name="jumlah_jam" value="{{ old('jumlah_jam') }}"  autofocus>
                             @if($errors->has('jumlah_jam'))
                                <span class="help-block">
                                    <strong>{{$errors->first('jumlah_jam')}}</strong>
                                </span>
                            @endif
                            </div> 
                            </div>
                            </div>

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
