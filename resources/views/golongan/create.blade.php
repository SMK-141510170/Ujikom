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
        <div class="col-md-9 ">
            <div class="panel panel-success">
                <div class="panel-heading"><h3><center>Tambah Data Golongan</center></h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('golongan.store') }}">
                        {{ csrf_field() }}

                            <div class="form-group ">
                            <label for="kode_golongan" class="col-md-3 control-label">Kode Golongan</label>
                            <div class="col-md-8">
                            <div class="form-group {{$errors->has('kode_golongan') ? 'has-errors':'message'}}" >
                                <input id="kode_golongan" type="text" class="form-control" name="kode_golongan" value="{{ old('kode_golongan') }}"   autofocus>
                            @if($errors->has('kode_golongan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_golongan')}}</strong>
                                </span>
                            @endif
                            </div>  
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nama_golongan" class="col-md-3 control-label">Nama Golongan</label>
                            <div class="col-md-8">
                            <div class="form-group {{$errors->has('nama_golongan') ? 'has-errors':'message'}}" >
                                <input id="nama_golongan" type="text" class="form-control" name="nama_golongan" value="{{ old('nama_golongan') }}" autofocus>
                             @if($errors->has('nama_golongan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('nama_golongan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="besaran_uang" class="col-md-3 control-label">Besaran Uang</label>
                            <div class="col-md-8">
                            <div class="form-group {{$errors->has('besaran_uang') ? 'has-errors':'message'}}" >
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}"  autofocus>
                             @if($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{$errors->first('besaran_uang')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>
                            <center>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" >
                                    Simpan
                                </button>
                            </div></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
