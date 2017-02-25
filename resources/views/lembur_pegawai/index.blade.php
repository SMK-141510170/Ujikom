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
                <div class="panel-heading"><h3><center>Data Lembur Pegawai</center></h3></div>

                <div class="panel-body">
                        <div class="col-md-6">
                            <a href="{{url('/lembur_pegawai/create')}}"class="btn btn-success form-control">Tambah Data Lembur Pegawai</a><br><br>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6"><center>
                            <form action="{{url('/lembur_pegawai')}}/?name=name">
                            <input type="text" name="name" placeholder="Cari">
                            <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                        </center></div>
                    </div>

                <div class="panel-body">
                <table class="table" border="2">
                    <thead>
                    <tr>
                        <th><center>No</th></center>
                        <th><center>Kode Pegawai Lembur</th></center>
                        <th><center>Nama Pegawai</th></center>
                        <th><center>Nama Jabatan</th></center>
                        <th><center>Nama Golongan</th></center>
                        <th><center>Jumlah Jam</th></center>
                        <th colspan="2"><center>Opsi</th></center>
                    </tr>
                </head>
                @php
                $a=1;
                @endphp
                @foreach ($lembur_pegawai as $data)
                <tbody>
                    <td><center>{{$a++}}</td></center>
                    <td><center>{{$data->kategori_lembur->kode_lembur}}</td></center>
                    <td><center>{{$data->pegawai->User->name}}</td></center>
                    <td><center>{{$data->pegawai->jabatan->nama_jabatan}}</td></center>
                    <td><center>{{$data->pegawai->golongan->nama_golongan}}</td></center>
                    
                    <td><center>{{$data->jumlah_jam}}</td></center>
                    <td><center>
                                <a href="{{route('lembur_pegawai.edit',$data->id)}}" class="btn btn-warning">Ubah</a>
                            </center></td>
                     <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('lembur_pegawai.destroy', $data->id),
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
