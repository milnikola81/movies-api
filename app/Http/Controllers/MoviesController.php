<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\MoviesPost;

class MoviesController extends Controller
{

    public function index()
    {
        return Movie::all();
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
