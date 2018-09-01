@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
    <div class="card-header">

            <div class="row">
                  <div class="col-8">
                      <h5>
                          <strong>Genre={{$genre->name}} </strong>
                      </h5>
                  </div>



                  <div class="col-4">
                  @if(!Auth::guest())
                      <button class="btn btn-success ribbon">
                          <a style= "color:white;" href="{{route('genres.edit', ['genre'=> $genre->id])}}">Edit genre</a>
                      </button>
                  @endif
                      <button class="btn btn-success ribbon">
                          <a style= "color:white;" href="{{route('genres.index')}} ">Genre list</a>
                      </button>
                  </div>
            </div>
    </div>
</div>

<div class="container">

      <ul class="list-group-item disabled">
            @foreach($genre->movies as $movie)

            <li class="list-group-item">
                {{$movie->title}}
                </br>
            </li>

            @endforeach
        </ul>

</div>



@endsection
