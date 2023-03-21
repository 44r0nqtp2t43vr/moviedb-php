<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // use HasFactory;
    // protected $table = 'movie';
    // public $timestamps = false;

    // protected $guarded = ['mov_id'];
    // protected $filltable = ['mov_title', 'mov_year', 'mov_time', 'mov_lang', 'mov_dt_rel', 'mov_rel_country'];
    public $incrementing = false;
    protected $primarykey = 'mov_id';
    public $timestamps = false;

}
