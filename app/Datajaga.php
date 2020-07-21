<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datajaga extends Model
{
    protected $table ="datajaga";

    public $timestamps = false;
    protected $fillable = ['kddokter','hari','jammulai','jamselesai'];
}
