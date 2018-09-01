@extends('layouts/app') @section('content')

<div class="p-3 mb-2 bg-dark text-white">
<div class="card-header">
<h3 style= "font-family: 'Anton', sans-serif;" >Create Director</h3>
</div>
</div></br>

<div class="container">
<form method="POST" action="{{ route('directors.store') }}">

    {{ csrf_field() }}

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Name OF Director" name="name" required></br>
        <button type="submit" class="btn btn-success ribbon">Update</button>
    </div>
</form>

<!-- Alert messages generate when users don't fill in the form -->
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
