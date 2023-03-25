<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // use HasFactory;
    protected $table = 'movie';
    public $timestamps = false;

    protected $primaryKey = 'mov_id';
    protected $guarded = ['mov_id'];
    protected $fillable = ['mov_title', 'mov_year', 'mov_time', 'mov_lang', 'mov_dt_rel', 'mov_rel_country'];
    
    public function directors() {
        return $this->belongsToMany(Director::class, 'movie_direction', 'mov_id', 'dir_id');
    }

}
