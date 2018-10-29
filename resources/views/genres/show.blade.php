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
                      <a class="btn btn-success ribbon" style="color:white;" href="{{route('genres.edit', ['genre'=> $genre->id])}}" role="button" aria-pressed="true">Edit Genre</a>

                  @endif
                      <a class="btn btn-success ribbon" style="color:white;" href="{{route('genres.index')}}" role="button" aria-pressed="true">Genre list</a>
                  </div>
            </div>
    </div>
</div>

<div class="container">

    <!--  <ul class="list-group-item disabled">
            @foreach($genre->movies as $movie)

            <li class="list-group-item">
                {{$movie->title}}
                </br>
            </li>

            @endforeach
        </ul>-->
        <ul class="list-group-item disabled">
        <li class="list-group-item">
        <h5>Film</h5>
        @foreach($genre->movies as $movie)
        {{$movie->title}}
        </li>
        @endforeach
        <ul>

</div>



@endsection
