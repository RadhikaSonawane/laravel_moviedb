<?php

namespace App\Http\Controllers;

use App\Director;
use App\Movie;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $directors = Director::get();
      return view('directors/index', ['directors' => $directors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directors/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //Save database data
      $director_name = $request->input('name');

      //create new director method
      $director = new Director();
      $director->name= $request->input('name');
      $director->id=$request->input('id');

      $director->save();

      return redirect()->route('directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        return view('directors/show',  ['director' => $director]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {

        return view('directors/edit', ['director' => $director]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {

      //Save database data
      $director_name = $request->input('name');
      $director_info = $request->input('director');

      //create new director method
      $director->name = $director_name;
      $director->save();

      //return redirect()->route('directors.index');
      //redirect to the actor list
      return redirect()->route('directors.show', ['director' => $director->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        //
    }
}
