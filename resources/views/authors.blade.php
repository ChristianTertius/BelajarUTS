@extends('layouts.main')

@section('container')
  <h1 class="container mt-3">{{ $title }}</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4 container mx-auto mt-3">
    
    @foreach ($books as $book)
      <div class="col">
        <div class="card">
          <img src="https://source.unsplash.com/100x50" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title">{{ $book['title'] }}</h2>
            <h5>Author: {{ $book->author->name }}</h5>

            <a href="/book/{{ $book->title }}" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    @endforeach


  </div>
@endsection
