<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    // use HasFactory;
    protected $table = 'genres';
    public $timestamps = false;

    protected $guarded = ['gen_id'];
    protected $filltable = ['gen_title'];
}