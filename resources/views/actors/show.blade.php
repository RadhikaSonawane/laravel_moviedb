@extends('layouts/app') @section('content')
<div class="p-3 mb-2 bg-dark text-white">

      <div class="row">
            <div class="col-8">
                  <h5 style= "font-family: 'Anton', sans-serif;"> <strong>{{ $actor->name }} (- id: {{ $actor->id }})</strong> </h5>



                  <a class="btn btn-success ribbon" href="{{route('actors.edit', ['actor' => $actor->id])}} ">Edit Here</a></button></br></br>

                  <a class="btn btn-success ribbon" href="{{route('actors.index')}} ">Actor list</a></button>

                  <div class="card-body">

                  <p>{{ $actor->information }}</p>

            </div>
           </div>
    </div>

</div>




  @endsection
