@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
<div class="card-header">
<h3 style= "font-family: 'Anton', sans-serif;">Edit Actor : {{$actor->name}}</h3>
</div>
</div></br></br>

<div class="container">
<form method="POST" action="{{ route('actors.update', ['actor' => $actor->id]) }}">

    <input type="hidden" name="_method" value="PUT" />

    {{ csrf_field() }}

    <div class="form-group">
        <h2>{{$actor->name}}</h2></br>
        <textarea class="form-control" name="name"  value="" required>{{ $actor->name }}</textarea></br>
        <button type="submit" class="btn btn-success ribbon">Submit</button>
    </div>
</form>

<!--Alert messages ganarate when users don't fill in the form -->
@if(count($errors))
    <div class="alert alert-primary" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  </div>
@endsection
