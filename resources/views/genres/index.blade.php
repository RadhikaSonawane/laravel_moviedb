@extends('layouts.app')

@section('content')


  <div class="p-3 mb-2 bg-dark text-white">
    <div class="card-header">
      <div class="card-header bg-dark text-light">
        <h3 style= "font-family: 'Anton', sans-serif;" class="card-title">Genres</h3>
        @if(!Auth::guest())
        <a href="{{route('genres.create')}}" class="btn btn-success ribbon" role="Button" style="float:left"> Create genre </a>
      @endif
    </div>
  </div>
  </div> <br/><br/>
  <div class="container">
      <div class="card">
          <div class="col-md-8">
            <ul class="list-group-item disabled">
                @foreach($genres as $genre)
                <li class="list-group-item">{{$genre->name}}</br>
                    <a href="{{route('genres.show', ['genre' => $genre->id])}}" class="btn btn-success ribbon">Read More</a></br>
                </li>
                @endforeach
            </ul>
          </div>
        </div>
    </div>


@endsection
