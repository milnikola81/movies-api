<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\MoviesPost;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('title');
        if($searchTerm) {
            return Movie::search($searchTerm);
        }
        return Movie::all();

        // return Movie::where('title', 'like', '%'.$search.'%')->get();
    }

    public function create()
    {
        //
    }

    public function store(MoviesPost $request)
    {
        return Movie::create($request->all());
    }

    public function show($id)
    {
        return Movie::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(MoviesPost $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return $movie;
    }

    public function destroy($id)
    {
        return Movie::destroy($id);
    }
}
