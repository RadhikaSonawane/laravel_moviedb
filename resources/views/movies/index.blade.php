@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
    <div class="card-header">
        <h3 style= "font-family: 'Anton', sans-serif;">Find Your Favorite Movies</h3>
        @if(!Auth::guest())
        <button type="button" style= "float:none;" class="btn btn-success ribbon">
          <a style= "color:white;" href="{{route('movies.create')}} ">Create Movies</a></button>
        @endif
    </div>
</div></br>


<div class="container">
      <div class="row">

        @foreach($movies as $movie)
        <div class="col-md-3">
          <div class="card text-center">
                  <div class="card-header">
                    <h5><strong>{{$movie->title}}</strong></h5>
                    <p>({{$movie->releaseDate}})</p>
                    <p>{{$movie->runtime}} minutes</p>
                  </div>
          <div class="card-body">
                <img  class="img-fluid" alt="Responsive image" width="200" height="250" src="{{$movie->picture}}"></br>
                <p class="text-muted">({{$movie->description}}) </p>
                <a href="{{route('movies.show', ['movie'=>$movie->id])}}" class="btn btn-success">Read more</a>

               </div>
  </div>

    </div>
    @endforeach
  </div>



</div>



@endsection
