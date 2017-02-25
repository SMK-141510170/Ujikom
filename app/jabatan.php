<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    //
    protected $table    = 'jabatans'; 
    protected $fillable =['kode_jabatan','nama_jabatan','besaran_uang'];
    protected $visible  =['kode_jabatan','nama_jabatan','besaran_uang'];
   
   public function kategori_lembur()
    {
        return $this->hasMany('App\kategori_lembur','id_jabatan');
    }

     public function tunjangan()
    {
        return $this->hasMany('App\tunjangan','id_jabatan');
    }

     public function pegawai()
    {
        return $this->hasMany('App\pegawai','id_jabatan');
    }
    
}
