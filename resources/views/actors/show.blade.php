@extends('layouts/app') @section('content')
<div class="p-3 mb-2 bg-dark text-white">

      <div class="row">
            <div class="col-8">
                  <h5 style= "font-family: 'Anton', sans-serif;"> <strong>{{ $actor->name }} (- id: {{ $actor->id }})</strong> </h5>
                  <a class="btn btn-success ribbon" style="color:white;" href="{{route('actors.edit', ['actor' => $actor->id])}}" role="button" aria-pressed="true">Edit Actor</a>
                  <a class="btn btn-success ribbon" style="color:white;" href="{{route('actors.index')}}" role="button" aria-pressed="true">Actor List</a>
                  <p> @foreach($actor->movies as $movie)<a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a>, @endforeach</p>
            </div>
           </div>
    </div>






  @endsection
