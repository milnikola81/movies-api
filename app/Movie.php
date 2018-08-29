<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Movie extends Model
{
    //
    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'];

    public static function search($searchTerm)
    {
        return Movie::where('title', 'like','%'.$searchTerm.'%')->get();
    }
}
