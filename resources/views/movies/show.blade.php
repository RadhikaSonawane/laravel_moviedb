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
                    <strong>Run Times: </strong>{{$movie->runtime}} minutes</li>
                <li class="list-group-item">
                    <strong>Director: </strong>{{$movie->director['name']}}</li>
                @foreach($movie->genres as $genre)
                <li class="list-group-item">
                    <strong>Genre:</strong>{{$genre->name}}</li>
                @endforeach
                <li class="list-group-item">
                    <strong>Actors: </strong>Names</li>

                @foreach($movie->actors as $actor)
                <li class="list-group-item">
                    {{$actor->name}}</li>
                @endforeach

            </ul>
            @if(!Auth::guest())
            @endif

          </div>
        </br>
    </div>
</div>

</div>






@endsection
