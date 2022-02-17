@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="row row-cols-3">
      @foreach ($movies as $movie)
      <div class="col p-3">
        <div class="card">
          <h2>TITOLO: {{ $movie->title }}</h2>
          <div>
            TITOLO ORIGINALE: {{ $movie->original_title }}
          </div>
          <div>
            LINGUA: {{ $movie->nationality }}
          </div>
          <div>
            DATA: {{ $movie->date }}
          </div>
          <div>
            VOTO: {{ $movie->vote }}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection