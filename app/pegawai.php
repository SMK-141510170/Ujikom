<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    //
    protected $table='pegawais';
    protected $fillable=['nip','id_user','id_jabatan','id_golongan','foto','email','permission','password','name'];
    protected $visible=['nip','id_user','id_jabatan','id_golongan','foto','email','permission','password','name'];

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
    	return $this->hasMany('App\lembur_pegawai','id_pegawai');
    }


     public function User()
    {
        return $this->belongsTo('App\User','id_user');
    }

      public function tunjangan_pegawai()
    {
        return $this->hasMany('App\tunjangan_pegawai','id_pegawai');
    }
}
