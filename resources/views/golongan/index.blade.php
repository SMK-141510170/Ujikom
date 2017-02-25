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
                <div class="panel-heading"><h3><center>Data Golongan</center></h3></div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <a href="{{url('/golongan/create')}}"class="btn btn-success form-control">Tambah Data Golongan</a><br><br>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6"><center>
                            <form action="{{url('/golongan')}}/?nama_golongan=nama_golongan">
                            <input type="text" name="nama_golongan" placeholder="Cari">
                            <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                        </center></div>
                    </div>

                <div class="panel-body">
                    <table class="table bordered" border='3'>
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Kode Golongan</th></center>
                                <th><center>Nama Golongan</th></center>
                                <th><center>Besaran Uang</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach ($golongan as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td><center>{{$data->kode_golongan}}</td></center>
                            <td><center>{{$data->nama_golongan}}</td></center>
                            <?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.') ?>
                            <td><center>{{$data->besaran_uang}}</td></center>
                            <td ><center>
                                    <a href="{{route('golongan.edit', $data->id)}}" class="btn btn-warning">Ubah</a>
                            </center></td>
                           <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" data-toggle="tooltip"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></center>
                                  @include('modals.delete', [
                                    'url' => route('golongan.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                            
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
