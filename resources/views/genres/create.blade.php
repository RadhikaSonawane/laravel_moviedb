@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
    <div class="card-header">
        <h5> Create Genre</h5>
    </div>
</div>

<div class="container">
      <form method="post"action="{{route('genres.store')}}">
            @csrf

            <div class="form-group">
                Movie's genre:</br>
                <input type="text" name="name" class="form-control" value="" placeholder="add genre">
            </div>

            <div>
               Choose Movies:</br>
              <select name="movies[]" multiple="multiple">
                @foreach($movies as $movie)
                <option value="{{ $movie->id }}">{{ $movie->title }}
                </option>
                @endforeach
              </select>
            </div>

            </br>

            <div>
              <input type="submit" class="btn btn-success ribbon" value="Update">
              </div>
  </div>
</form>

@endsection
