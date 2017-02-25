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
                <div class="panel-heading"><h1><center>Selamat Datang Di Aplikasi Saya</center></h1></div>

                <div class="panel-body">
                    <h2><center>Biodata</center></h2>
                    <h3>Nama &nbsp;&nbsp;&nbsp;: Ali Andiyansyah</center>
                    <h3>Kelas &nbsp;&nbsp;&nbsp;&nbsp;: XII RPL 3</center>
                    <h3>Alamat &nbsp;: Jl.Ters.Cibaduyut Gg.Situtarate 2</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
