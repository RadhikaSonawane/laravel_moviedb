@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
  <div class="card-header">
  <h5> Edit {{$genre->name}}</h5> </br>
  </div>
</div>

<div class="container">
<form method="post"action="{{route('genres.update', ['genre' => $genre->id]) }}">

    @csrf

        <input type="hidden" name="_method" value="PUT">

            </br>

            <div class="form-group">
                Movie genre</br>
                <input type="text" name="name" class="form-control" value="{{$genre->name}}" placeholder="add genre">
            </div>

              </br>

            <div>
                <input type="submit" class="btn btn-success ribbon" value="Update Genre">
            </div>
 </div>
  </form>
@endsection
