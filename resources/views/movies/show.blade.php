@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
<div class="card-header">
        <div class="col-8">
              <h5><strong>{{$movie->title}}</strong></h5>
        </div>
 </div>
        @if(!Auth::guest())
        <div class="col-4">
            <a class="btn btn-success ribbon" style="color:white;" href="{{route('movies.edit', ['movie'=> $movie->id])}}" role="button" aria-pressed="true">Edit Movie</a>
            <a class="btn btn-success ribbon" style="color:white;" href="{{route('movies.index')}} " role="button" aria-pressed="true">Movie List</a>
        </div>
        @endif
    </div>
</div>

<div class="container">
<div class="card">
    <div class="col-3">
        <img  class="img-fluid" alt="Responsive image" width="500;" height="300" src="{{$movie->picture}}">
    </div> </br>

    <div class="col-9">
        <div class="card">
            <ul class="list-group-item disabled">
                <li class="list-group-item" src="{{$movie->picture}}">
                    <strong>Picture: </strong>{{$movie->picture}}</li>
                <li class="list-group-item">
                    <strong>Description: </strong>{{$movie->description}}</li>
                <li class="list-group-item">
                    <strong>Run Times: </strong>{{$movie->runtime}} </li>
                <li class="list-group-item">
                    <strong>Director: </strong><a href="{{$movie->director['id']}}">{{$movie->director['name']}}</a></li>
                <li class="list-group-item">
                  <strong>Genre:</strong>
                @foreach($movie->genres as $genre)
                    <a href="{{route('genres.show', ['genre' => $genre->id])}}">{{$genre->name}}</a>
                @endforeach
                </li>
                <li class="list-group-item">
                  <strong>Actor:</strong>
                @foreach($movie->actors as $actor)
                    <a href="{{route('actors.show', ['actor' => $actor->id])}}">{{$actor->name}}</a>
                @endforeach
                </li>
            </ul>

          </div>
        </br>
    </div>
</div>

</div>






@endsection
