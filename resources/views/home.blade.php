@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
    <div class="container">
      <div class="cards-row">
        @foreach($series as $serie)
        <div class="card-col">
          <figure>
            <img src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}" />
          </figure>
          <figcaption>
            <h6>{{ $serie['series'] }}</h6>
          </figcaption>
        </div>
        @endforeach
      </div>
    </div>
  </main>

@endsection