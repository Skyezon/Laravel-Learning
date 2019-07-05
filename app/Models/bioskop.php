<?php

namespace App\Models;
use App\Models\Movie;

use Illuminate\Database\Eloquent\Model;

class bioskop extends Model
{
    protected $fillable=[
        'lokasi','nama'
    ];
    public function movies(){
        return $this->hasMany('App\Models\Movie');
    }
}
