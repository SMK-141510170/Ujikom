@extends('layouts.app')

                        
@section('content1')
                <div class="col-md-15 col-md-offset-0">
                    <div class="panel panel-success">
                        <div class="panel-body">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-success">
                <div class="panel-heading">Data Penggajian</div>
                    <div class="panel-body">
                        
                        <table border="2" class="table table-success table-border table-hover">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>Pegawai</th>
                                                <th>Jumlah Uang Tunjangan</th>
                                                <th>Jumlah Jam Lembur</th>
                                                <th>Jumlah Uang Lembur</th>
                                                <th>gaji Pokok</th>
                                                <th>Total Gaji</th>
                                                <th>Tanggal Pengambilan</th>
                                                <th>Status Pengambilan</th>
                                                <th>Petugas Penerimaan</th>
                                            </tr>
                                        </thead>
                                        @php $no=1;   @endphp
                                        <tbody>
                                            @foreach($pegawai as $data)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$data->user->name}}</td>
                                                <td>
                                                @foreach($tunjangan as $data1)
                                                    
                                                    @if($data1->pegawai_id == $data->id)
                                                        {{$data1->tunjangan->besar_uang}}
                                                        @php $a=$data1->tunjangan->besar_uang; ; @endphp
                                                    @endif

                                                @endforeach
                                                </td>
                                                <td>
                                                    
                                                @foreach($lembur_pegawai as $data2)
                                                    @if($data2->pegawai_id == $data->id)
                                                        {{$data2->Jumlah_jam}}
                                                        @php $b=$data2->Jumlah_jam*$data2->kategori->besar_uang; @endphp

                                                    @endif
                                                @endforeach
                                                </td>
                                                <td>
                                                    
                                                @foreach($lembur_pegawai as $data2)
                                                    @if($data2->pegawai_id == $data->id)
                                                        {{$data2->Jumlah_jam*$data2->kategori->besar_uang}}
                                                        @php $b=$data2->Jumlah_jam*$data2->kategori->besar_uang; @endphp

                                                    @endif
                                                @endforeach
                                                </td>
                                                <td>{{$data->golongan->besar_uang+$data->jabatan->besar_uang}}</td>
                                                @php $c=$data->golongan->besar_uang+$data->jabatan->besar_uang; @endphp

                                                <td>{{$a + $b + $c}}</td>
                                                <td>
                                                    
                                                @foreach($tunjangan as $data1 )
                                                    
                                                    @foreach($penggajian as $data3)
                                                        @if($data3->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id == $data->id )  
                                                            {{$data3->status_pengambilan}}
                                                        @elseif($data3->tunjangan_pegawai_id != $data1->id && $data1->pegawai->id != $data->id )
                                                        
                                                        @elseif($data3->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id != $data->id )
                                                            
                                                        @else
                                                        Belum diambial
                                                        @endif
                                                @endforeach
                                                @endforeach
                                                </td>
                                                <td>@foreach($tunjangan as $data1 )
                                                    @foreach($penggajian as $data3)
                                                        @if($data3->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id == $data->id )  
                                                            {{$data3->status_pengambilan}}
                                                        @elseif($data3->tunjangan_pegawai_id != $data1->id && $data1->pegawai->id != $data->id )
                                                        
                                                        @elseif($data3->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id != $data->id )
                                                            
                                                        @else
                                                        Belum diambil
                                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/penggajian') }}">
                                                    {{ csrf_field() }}
                                                        @foreach($tunjangan as $data1)
                                                            @if($data1->pegawai_id == $data->id)
                                                                <input type="hidden" name="tunjangan_pegawai_id" value="{{$data1->id}}">
                                                                @php $a=$data1->tunjangan->besar_uang; ; @endphp
                                                            @endif
                                                        @endforeach
                                                        @foreach($lembur_pegawai as $data2)
                                                            @if($data2->pegawai_id == $data->id)
                                                                <input type="hidden" name="jumlah_jam_lembur" value="{{$data2->Jumlah_jam}}">
                                                                <input type="hidden" name="jumlah_uang_lembur" value="{{$data2->Jumlah_jam*$data2->kategori->besar_uang}}">
                                                            @endif
                                                        @endforeach
                                                        <input type="hidden" name="gaji_pokok" value="{{$data->golongan->besar_uang+$data->jabatan->besar_uang}}">
                                                    <input type="hidden" name="tanggal_pengambilan" value="{{date('Y-m-d')}}" >
                                                    <input type="hidden" name="status_pengambilan" value="1" >
                                                   <input type="hidden" name="petugas_penerima" value="dj">
                                                    <div class="form-group">
                                                        <div class="col-md-10 col-md-offset-0">
                                                            <button type="submit" class="btn btn-primary form-control">
                                                                Ambil
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                        @endif
                                                        @endforeach
                                                    @endforeach

                                                    
                                                </td>
                                                <td>dj</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

                        </div>
                    </div>
                </div>
@endsection