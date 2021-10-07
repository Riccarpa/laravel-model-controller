@extends('layouts.main')

@section('title','MyBooks | Books')

@section('content')
    <section id="books">
        @forelse ($movies as $movie)
        <div class="card" >
            <div class="card-body">
              <h5 class="card-title">{{$movie['title']}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$movie['genre']}}</h6>
              <div class="card-text">
                  <p>{{$movie['description']}}</p>
                   <address>{{$movie['author']}}</address>
              </div>
            </div>
          </div>
        @empty
            <h2>nessun film</h2>
        @endforelse
    </section>
@endsection
    
