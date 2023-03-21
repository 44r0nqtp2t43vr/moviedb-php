<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    // use HasFactory;
    protected $table = 'director';
    public $timestamps = false;

    protected $guarded = ['dir_id'];
    protected $filltable = ['dir_fname', 'dir_lname'];
}
