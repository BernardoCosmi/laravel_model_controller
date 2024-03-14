@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="row justify-content-center">
        @foreach ($movies as $movie)
        <div class="col-sm-4">
            <div class="card mb-3 text-center m-2" style="min-height: 250px"> 
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $movie->title }}</h5>
                    <p class="card-text"><strong>Original Title:</strong> {{ $movie->original_title }}</p>
                    <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                    <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
       @endforeach 
    </div>
    
@endsection
