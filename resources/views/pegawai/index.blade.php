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
            <div class="panel panel-info">
                <div class="panel-heading"><h3><center>Data Pegawai</center></h3></div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <a href="{{url('/pegawai/create')}}"class="btn btn-success form-control">Tambah Data Pegawai</a><br><br>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6"><center>
                            <form action="{{url('/pegawai')}}/?name=name">
                            <input type="text" name="name" placeholder="Cari">
                            <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                        </center></div>
                    </div>

                <div class="panel-body">
                     <table class="table" border='3'>
                    <thead>
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Nip</center></th>
                    <th><center>Pengguna</center></th>
                    <th><center>Email</center></th>
                    <th><center>Nama Golongan</center></th>
                    <th><center>Nama Jabatan</center></th>
                    <th><center>Foto</center></th>
                    <th colspan="2"><center>Opsi</center></th>

                </tr>
                </thead>
                @php
                $no=1;
                @endphp
                @foreach($pegawai as $data)
                    <tbody>
                        <tr>
                            <td><center>{{$no++}}</center></td>
                            <td><center>{{$data->nip}}</center></td>                                   
                            <td><center>{{$data->User->name}}</center></td>
                            <td><center>{{$data->User->email}}</center></td>
                            <td><center>{{$data->golongan->nama_golongan}}</center></td>
                            <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                            <td><center><img src="/assets/image/{{ $data->foto }}" width="50px" height="50px"></center></td>
                            <td><center>
                                <a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-warning">Ubah</a>
                            </center></td>
                              <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('pegawai.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                        </tr>

                    </tbody>
                    @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
