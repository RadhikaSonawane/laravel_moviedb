@extends('layouts/app')

@section('content')

<h1>Create Genre</h1>



<form method="POST" action="{{route('genres.store')}}">
@csrf
  <div class="form-group">
  <input type="text" name="name"  class="form-control" placeholder="genre-name"/>
  <label>Movie</label>
            <select name="movies" class="form-control">
              <option value="">-</option>
              @foreach($movies as $movie)
              <option value="{{$movie->id}}">
                {{$movie->title}}
              </option>
              @endforeach
              <input type="submit" class="btn brn-primary" value="Add genre"/>
        </div>
      </form>
@endsection
