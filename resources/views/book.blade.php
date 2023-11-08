@extends('layouts.main')

@section('container')
  <div class="row row-cols-1 row-cols-md-3 g-4 container mx-auto mt-3">
    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/100x50" class="card-img-top" alt="...">
        <div class="card-body">
          <h2 class="card-title">{{ $book->title }}</h2>
          <h5>Author: {{ $book->author->name }}</h5>
          <h5>Year: {{ $book->year }}</h5>
          <h5>Publisher: {{ $book->publisher }}</h5>
          <h5>Category: <a href="/categories/{{ $book->category->slug }}">{{ $book->category->name }}</a></h5>
          <h5>Synopsis: {{ $book->synopsis }}</h5>
          <a href="/">Back to Home</a>
        </div>
      </div>
    </div>


  </div>
@endsection
