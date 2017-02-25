<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_lembur extends Model
{
    //
    protected $table = 'kategori_lemburs';
    protected $fillable=['kode_lembur','id_jabatan','id_golongan','besaran_uang'];
    protected $visble=['kode_lembur','id_jabatan','id_golongan','besaran_uang'];
   

    public function jabatan()
    {
        return $this->belongsTo('App\jabatan','id_jabatan');
    }

     public function golongan()
    {
        return $this->belongsTo('App\golongan','id_golongan');
    }

     public function lembur_pegawai()
    {
        return $this->hasMany('App\lembur_pegawai','kode_lembur_id');
    }
   
}
