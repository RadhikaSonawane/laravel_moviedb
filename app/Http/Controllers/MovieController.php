<?php
namespace App\Http\Controllers;
use App\Director;
use App\Movie;
use App\Genre;
use App\Actor;
use App\Ratings;
use Illuminate\Http\Request;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movie = Movie::get();
    return view('movies/index', ['movies'=>$movie]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $movie = Movie::orderBy('title')->get();
      $directors = Director::orderBy('name')->get();
      $genres = Genre::orderBy('name')->get();
      $actors = Actor::orderBy('name')->get();
      #$ratings = Ratings::orderBy('rating')->get();
      $ratings = array("rating"=>3);
      return view('movies.create',[
        'movies' => $movie,
        'directors' => $directors,
        'genres' => $genres,
        'actors' => $actors,
        'ratings'=> $ratings,
      ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $movie_title = $request->input('title');
      $movie_picture =$request->input('picture');
      $movie_releaseDate = $request->input('releaseDate');
      $movie_runtime = $request->input('runtime');
      $movie_director_id = $request->input('director');
      $movie_genre_id = $request->input('genre');
      $movie_actor_id = $request->input('actor');
      $movie_description = $request->input('description');

     //create new movie method
      $movie = new Movie;
      $movie->picture = $movie_picture;
      $movie->title = $movie_title;
      $movie->description = $movie_description;
      $movie->runtime = $movie_runtime;
      $movie->releaseDate = $movie_releaseDate;
      $movie->director_id = $movie_director_id;
      $movie->save();
      $movie->actors()->sync($request->input('actors'));
      $movie->genres()->sync($request->input('genres'));
      #$movie->ratings()->sync($request->input('ratings'));



      return redirect()->route('movies.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      $movie->load('director')->get();
      return view('movies.show', ['movie' => $movie]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      return view('movies.edit', [
        'movie' => $movie,
        'directors' =>Director::orderBy('name')->get(),
        'genres' =>Genre::orderBy('name')->get(),
        'actors' =>Actor::orderBy('name')->get(),
    ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

      $movie_title = $request->input('title');
      $movie_picture =$request->input('picture');
      $movie_releaseDate = $request->input('releaseDate');
      $movie_runtime = $request->input('runtime');
      $movie_director_id = $request->input('director');
      $movie->actors()->sync($request->input('actors'));
      $movie->genres()->sync($request->input('genres'));
      $movie_description = $request->input('description');

      $movie->title = $movie_title;
      $movie->picture = $movie_picture;
      $movie->description = $movie_description;
      $movie->runtime = $movie_runtime;
      $movie->releaseDate = $movie_releaseDate;
      $movie->director_id = $movie_director_id;
      $movie->save();
      return redirect()->route('movies.show', ['movie' => $movie->id]);


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
