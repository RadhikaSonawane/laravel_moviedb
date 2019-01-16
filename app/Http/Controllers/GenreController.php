<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;


use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::get();
        return view('genres/index', ['genres'=>Genre::orderBy('name')->get()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Movie $movie)
    {

    //choose a movie so you can add multple genre to one movie
      return view('genres.create', ['movie' => $movie, 'movies'=>Movie::Get()]);
      Genre::where('name', $request->input('name'))->exists();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $genre_name = $request->input('name');
                $genre = new Genre();
                    $genre->name = $request->input('name');
                    $genre->id=$request->input('id');
                    $genre->save();
                    $genre->movies()->attach($request->input('movies'));
                    return redirect()->route('genres.index');
                 }
    /**
     * Display the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('genres/show',  ['genre'=>$genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        return view('genres/edit',  [
        'genre'=>$genre,
        'movies'=>Movie::orderBy('title')->get(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {

        $genre_name = $request->input('name');
        //$genre->movies()->sync($request->input('movies'));
        $genre->name = $genre_name;
        $genre->save();
        return redirect()->route('genres.show', ['genre'=>$genre->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
