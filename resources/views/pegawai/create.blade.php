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

<div class="col-md-7 col-md-offset-1">
    <div class="panel panel-success">
        <div class="panel-heading"><h3><center>Tambah Pengguna</center></h3></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('pegawai.store') }} " enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>
                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                  
                    <div class="form-group">                     
                            <label for="email" class="col-md-4 control-label">Alamat E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Sandi</label>
                            <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" >
                              @if($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                        

                            <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Sandi</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password_confirmation" >
                                @if($errors->has('password-confirm'))
                                <span class="help-block">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                     
                            <label for="permission" class="col-md-4 control-label">Permission</label>
                            <div class="col-md-6">
                                <select name="permission" class="form-control">
                                    <option value="pegawai">Pegawai</option>
                                    <option value="pemilik">Pemilik</option>
                                </select>   

                            </div>
                            </div>

                   


                </div>
            </div>
        </div>
    </div>
</div>

        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><h3><center>Tambah Data Pegawai</center></h3></div>
                <div class="panel-body">
                    
                  

                     
                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Nip</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('nip') ? 'has-errors':'message'}}" >
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}"  autofocus></input>
                            @if($errors->has('nip'))
                                <span class="help-block">
                                    <strong>{{$errors->first('nip')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>                        

                        <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                        <div class="col-md-6">
                            <select class="form-control" name="id_jabatan" >
                            <option >Pilih</option>
                            @foreach($jabatan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_jabatan !!}</option>
                            @endforeach
                            </select><br>
                            </div>
                            </div>
                            

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Golongan </label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_golongan" >
                            <option >Pilih</option>
                            @foreach($golongan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                            @endforeach
                            </select><br>
                            </div>
                            </div>
                     
                            <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="{{ old('foto') }}"  autofocus></input> 
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4"><br>
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                            </div>

                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
