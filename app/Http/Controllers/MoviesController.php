<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

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

    public function store(Request $request)
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

    public function update(Request $request, $id)
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
