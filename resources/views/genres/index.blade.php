@extends('layouts/app') @section('content')

<!-- Genres   -->
<div class="p-3 mb-2 bg-dark text-white">
<div class="card-header">
  <h3>Movies genre</h3>
  @if(!Auth::guest())
    <a class="btn btn-success ribbon" style="color:white;" href="{{route('genres.create')}}" role="button" aria-pressed="true">Create Genre</a>
  @endif
</div>
</div></br>

<div class="container">
<div class="card">

    <ul class="list-group-item disabled">
      @foreach($genres as $genre)

        <li class="list-group-item">
            {{ $genre->name}} </br>

            <a class="btn btn-success ribbon" href="{{route('genres.show', ['genre'=>$genre->id])}}">Read more</a></br>
        </li>

        @endforeach
    </ul>

</div>

</div>
@endsection
