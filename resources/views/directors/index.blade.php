@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
    <div class="card-header">
        <h3 style= "font-family: 'Anton', sans-serif;">Find Your Favorite directors</h3>
        @if(!Auth::guest())
          <a class="btn btn-success ribbon" style="color:white;" href="{{route('directors.create')}}" role="button" aria-pressed="true">Create Director</a>
          @endif
    </div>
</div></br></br>

<div class="container">

    <ul class="list-group-item disabled">
        @foreach ($directors as $director)
        <li class="list-group-item">
            {{ $director->name}} </br>

        <a href="{{ route('directors.show', ['director' => $director]) }}" class="btn btn-success ribbon">Read more</a></br>
        </li>

        @endforeach
    </ul>

</div>
</br>
</br>



</div>

@endsection
