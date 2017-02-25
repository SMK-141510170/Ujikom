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
                <div class="panel-heading"><h3><center>Data Tunjangan</center></h3></div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <a href="{{url('/tunjangan/create')}}"class="btn btn-success form-control">Tambah Data Jabatan</a><br><br>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6"><center>
                            <form action="{{url('/tunjangan')}}/?name=name">
                            <input type="text" name="name" placeholder="Cari">
                            <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                        </center></div>
                    </div>

                <div class="panel-body">
                    <table class="table" border="3">
                        <thead>
                            <tr>
                            <th><center>No</center></th>
                            <th><center>Kode Tunjangan</center></th>
                            <th><center>Nama Jabatan</center></th>
                            <th><center>Nama Gologan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Jumlah Anak</center></th>
                            <th><center>Besaran Uang</center></th>
                            <th colspan="2"><center>Opsi</center></th>
                        </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach($tunjangan as $data)
                        <tbody>
                            <tr>
                                <td><center>{{$a++}}</center></td>
                                <td><center>{{$data->kode_tunjangan}}</center></td>
                                <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                                <td><center>{{$data->golongan->nama_golongan}}</center></td>
                                <td><center>{{$data->status}}</center></td>
                                <td><center>{{$data->jumlah_anak}}</center></td>
                                <?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.') ?>
                                <td><center>{{$data->besaran_uang}}</center></td>
                                 <td><center>
                                <a href="{{route('tunjangan.edit',$data->id)}}" class="btn btn-warning">Ubah</a>
                            </center></td>
                                 <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('tunjangan.destroy', $data->id),
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
