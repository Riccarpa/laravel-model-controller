@extends('layouts.main')

@section('title','MyBooks | Books')

@section('content')
    <section id="books">
        @forelse ($books as $book)
        <div class="card" >
            <div class="card-body">
              <h5 class="card-title">{{$book['title']}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$book['genre']}}</h6>
              <div class="card-text">
                  <p>{{$book['description']}}</p>
                   <address>{{$book['author']}}</address>
              </div>
            </div>
          </div>
        @empty
            <h2>nessun libro</h2>
        @endforelse
    </section>
@endsection
    
