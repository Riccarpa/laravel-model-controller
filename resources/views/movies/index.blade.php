@extends('layouts.main')

@section('title','MyBooks | Books')

@section('content')
    <section id="books">
        @forelse ($movies as $movie)
        <div class="card" >
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
              <div class="card-text">
                  <p>{{$movie->nationality}}</p>
                   <address>{{$movie->vote}}</address>
              </div>
            </div>
          </div>
        @empty
            <h2>nessun film</h2>
        @endforelse
    </section>
@endsection
    
