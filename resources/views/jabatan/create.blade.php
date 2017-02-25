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
                <div class="panel-heading"><h3><center>Tambah Data Jabatan</center></h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('jabatan.store') }}">
                        {{ csrf_field() }}

                            <div class="form-group">
                            <label for="kode_jabatan" class="col-md-3 control-label">Kode Jabatan</label>
                            <div class="col-md-8">
                            <div class="form-group {{$errors->has('kode_jabatan') ? 'has-errors':'message'}}" >
                                <input id="kode_jabatan" type="text" class="form-control" name="kode_jabatan" value="{{ old('kode_jabatan') }}"  autofocus>
                            @if($errors->has('kode_jabatan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_jabatan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nama_jabatan" class="col-md-3 control-label">Nama Jabatan</label>
                            <div class="col-md-8">
                            <div class="form-group {{$errors->has('nama_jabatan') ? 'has-errors':'message'}}" >
                                <input id="nama_jabatan" type="text" class="form-control" name="nama_jabatan" value="{{ old('nama_jabatan') }}"  autofocus>
                             @if($errors->has('nama_jabatan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('nama_jabatan')}}</strong>
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
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
