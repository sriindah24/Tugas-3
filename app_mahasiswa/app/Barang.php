<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table='gudang';
    protected $primaryKey='id_gudang';
    protected $fillable=['kode_gudang','tempat_gudang'];
   //protected $guarded=[];
    //
}
