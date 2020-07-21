<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataspesialis extends Model
{
    protected $table ="dataspesialis";

    public $timestamps = false;
    protected $fillable = ['kdspesialis','spesialis'];
}


