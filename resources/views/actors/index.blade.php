@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
<div class="card-header">
        <h3 style= "font-family: 'Anton', sans-serif;">Find Your Favorite Actors</h3>
        <button type="button" class="btn btn-success ribbon">
            <a style= "color:white;" href="{{route('actors.create')}} ">Create Actor</a></button>
        </br>
  </div>
  </div></br></br>

  <div class="container">
      <div class="card">

    <ul class="list-group-item disabled">
        @foreach ($actors as $actor)
        <li class="list-group-item">{{ $actor->name}}</br>
            <a href="{{ route('actors.show', ['actor' => $actor]) }}" class="btn btn-success ribbon">Read More</a></br>
        </li>
        @endforeach
    </ul>

</div>
</br>
</br>
</div>

@endsection
