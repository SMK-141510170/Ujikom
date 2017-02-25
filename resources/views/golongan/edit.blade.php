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
            <div class="panel panel-warning">
                <div class="panel-heading"><h3><center>Ubah Data Golongan</center></h3></div>
                <div class="panel-body">
                    <form action="{{route('golongan.update',$golongan->id)}}" method="POST">
                    	<input name="_method" type="hidden" value="PATCH">
                    	{{csrf_field()}}
                    	
                        <div class="form-group">
						  <label for="kode_golongan" class="col-md-3 control-label">Kode Golongan </label>
                            <div class="col-md-8">
                                <div class="form-group {{$errors->has('besaran_uang') ? 'has-errors':'message'}}" >
							         <input type="text" name="kode_golongan" class="form-control"  value="{{$golongan->kode_golongan}}" autofocus="">
                                    @if($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('besaran_uang')}}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

						<div class="form-group">
							<label for="nama_golongan" class="col-md-3 control-label">Nama Golongan</label>
                        <div class="col-md-8">
                        <div class="form-group {{$errors->has('nama_golongan') ? 'has-errors':'message'}}" >
							<input type="text" name="nama_golongan" class="form-control" value ="{{$golongan->nama_golongan}}">
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
							<input type="text" name="besaran_uang" class="form-control" value ="{{$golongan->besaran_uang}}">
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
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
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





                
