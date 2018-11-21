@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="card">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title">Genres</h5>
        @if(!Auth::guest())
        <a href="{{route('genres.create')}}" class="btn btn-primary" role="Button" style="float:right"> Create genre </a>
      @endif
    </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <table class="table table-striped">
              <tbody>
                @foreach($genres as $genre)
                <tr>
                  <td><a href="{{route('genres.show', ['genre' => $genre->id])}}">{{$genre->name}}</a></td>
                </tr>
                    @endforeach

              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
