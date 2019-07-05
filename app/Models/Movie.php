<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Bioskop;
class Movie extends Model
{
    //
   protected $fillable =[
    'title','sinopsis','director','date', 'image', 'movie','bioskop_id'
    ];

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function bioskop(){
        return $this->belongsTo('App\Models\Bioskop','bioskop_id');
    }
}
