@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">

  <div class="row">
    <div class="col-8">
    <h5 style= "font-family: 'Anton', sans-serif;"><strong>{{ $director->name }} (- id: {{ $director->id }})</strong></h5>
    </div>


    <div class="col-4">

    @if(!Auth::guest())
      <a class="btn btn-success ribbon" style="color:white;" href="{{route('directors.edit', ['director' => $director->id])}}" role="button" aria-pressed="true">Edit Director</a>
      @endif
      <a class="btn btn-success ribbon" style="color:white;" href="{{route('directors.index')}} " role="button" aria-pressed="true">Director list</a>
    </div>
  </div>
</div>

<div class="container">

  <div class="card-body">
    <ul class="list-group-item disabled">
    <li class="list-group-item">
    <h5>Film</h5>
    @foreach($director->movies as $movie)
    <a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a>
    </li>
    @endforeach
    <ul>

  </div>

</div>


@endsection
