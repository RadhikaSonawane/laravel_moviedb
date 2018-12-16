@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-header bg-dark text-light">
    <h5 style= "font-family: 'Anton', sans-serif;"> <strong>{{$genre->name}}</strong> </h5>

    </div>
    <div class="cantainer">
      <div class="row">
        <div class="col-md-8">
          <table class="table table-striped text-center">
            <tbody>
              <tr>
                <th>Movies List</th>
                <td>@foreach($genre->movies as $movie)<a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a>, @endforeach</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center">
    @if(!Auth::guest())
      <a class="btn btn-success ribbon" style="color:white; width:200px;" href="{{route('genres.edit', ['genre' => $genre->id])}}" role="button" aria-pressed="true">Edit Genre</a><br><br>
      @endif
      <a class="btn btn-success ribbon" style="color:white; width:200px;" href="{{route('genres.index')}}" role="Button" style="float:left">Back</a>
  <br/><br/></div>
</div>

</div>
@endsection
