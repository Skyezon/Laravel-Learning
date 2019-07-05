<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'title','isi','angka','movie_id'
    ];
    public function movie(){
        return $this->belongsTo('App\Models\Movie','movie_id');
    }
}
