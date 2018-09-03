<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\MoviesPostRequest;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('title');
        $take = $request->input('take');
        $skip = $request->input('skip');

        return Movie::search($searchTerm, $take, $skip);

    }

    public function create()
    {
        //
    }

    public function store(MoviesPostRequest $request)
    {
        return Movie::create($request->all());
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(MoviesPostRequest $request, $id)
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
