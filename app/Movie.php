<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Movie extends Model
{
    //
    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'];

    public static function search($searchTerm, $take, $skip)
    {
        // return Movie::where('title', 'like','%'.$searchTerm.'%')->get();
        return Movie::when($searchTerm, function ($query) use ($searchTerm) {
            return $query->where('title', 'like', '%'.$searchTerm.'%');
        })
        ->when($take, function ($query) use ($take) {
            return $query->take($take);
        })
        ->when($skip, function ($query) use ($skip) {
            return $query->skip($skip);
        })
        ->get();


    }
}
