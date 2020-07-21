<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datalihatdokter extends Model
{
    protected $table ="datalihatdokter";

    public $timestamps = false;
    protected $fillable = ['kdspesialis','namadokter'];
}


