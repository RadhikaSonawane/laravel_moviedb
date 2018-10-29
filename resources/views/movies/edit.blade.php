@extends('layouts/app') @section('content')

<div class="p-3 mb-2 text-white">
<h1> Edit Movie {{$movie->title}} Here</h1> </br>
</div>

<form method="POST"action="{{route('movies.update', ['movie' => $movie->id])}}">

  @csrf
<div class="container">
        <input type="hidden" name="_method" value="put">

        <div class="form-group">
              Picture link:</br>
              <input type="url" name="picture" class="form-control" value="{{$movie->picture}}" placeholder="Picture link">
        </div>

        <div>
              Movie name:</br>
              <input type="text" name="title" class="form-control" value="{{$movie->title}}" placeholder="Movie name" >
        </div>

        <div>
              Release Date:</br>
              <input type="date" name="releaseDate" class="form-control" value="{{$movie->releaseDate}}">
        </div>

        <div>
              RunTimes:</br>
              <input type="time" name="runtime" class="form-control" value="{{$movie->runtime}}" placeholder="runtime">
        </div>

        <div>
              Description:</br>
              <textarea rows="10" cols="50" class="form-control" name="description"  placeholder="Description">{{$movie->description}}</textarea>
        </div>

        <!--  Director  -->
        <div>
               Choose Director
              <select name="director">
                @foreach($directors as $director)
                  <option value="{{ $director->id }}">{{ $director->name }}</option>
                @endforeach
              </select>
        </div>

         <!-- Actors -->
         <div>
                Choose Actors
                </br>
                <select name="actors[]" multiple="multiple">
                  @foreach($actors as $actor)
                  <option value="{{ $actor->id }}">{{$actor->name}}</option>
                  @endforeach
                </select>
          </div>

        <!-- Genres  -->
        <div>
               Choose Genres
                <select  name="genres[]" multiple="multiple">
                  @foreach($genres as $genre)
                  <option value="{{ $genre->id }}">{{$genre->name}}
                  </option>
                  @endforeach
                </select>
          </div>

        </br>

        <div>
          <input type="submit" class="btn btn-primary" value="Update Movie">
        </div>
</div>
  </form>

@endsection
