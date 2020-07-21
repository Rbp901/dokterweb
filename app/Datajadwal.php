<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datajadwal extends Model
{
    protected $table ="datajadwal";

    public $timestamps = false;
    protected $fillable = ['namadokter','hari','jammulai','jamselesai'];
}
