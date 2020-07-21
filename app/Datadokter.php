<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datadokter extends Model
{
    protected $table ="datadokter";

    public $timestamps = false;
    protected $fillable = ['kddokter','namadokter','kdspesialis','telepon','jk'];
}
