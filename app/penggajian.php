<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    //
    protected $table='penggajians';
    protected $fillable=['id','id_tunjangan_pegawai','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','tanggal_pengambilan','status_pengambilan','petugas_penerima'];

    protected $visible=['id','id_tunjangan_pegawai','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','tanggal_pengambilan','status_pengambilan','petugas_penerima'];

     public function tunjangan_pegawai()
    {
        return $this->belongsTo('App\tunjangan_pegawai','tunjangan_pegawai_id');
    }
}