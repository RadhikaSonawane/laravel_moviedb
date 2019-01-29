<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $check = Ratings::where('user_id', Auth::user()->id)->where('movie_id', $request->input('movie_id'))->first();
        if (!$check) {
          $rating = new Ratings();
          $rating->rating = $request->input('rating');
          $rating->user_id = Auth::user()->id;
          $rating->movie_id = $request->input('movie_id');
          $rating->save();
        }

        return redirect()->back();
      }



    /**
     * Display the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function show(Ratings $ratings)
    {
        $ratings->load('movie')->get();
        return view('ratings.show', ['ratings' => $ratings]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function edit(Ratings $ratings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ratings $ratings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ratings $ratings)
    {
        //
    }
}
