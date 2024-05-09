@extends('layouts.app')


@section('content')
    <div class="container mb-5">
        <h1>Movies</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-5">{{ $movie->title }}</h4>
                            <p class="card-text"><b>Original Title:</b> {{ $movie->original_title }}</p>
                            <p class="card-text"><b>Nationality:</b> {{ $movie->nationality }}</p>
                            <p class="card-text"><b>Date:</b> {{ $movie->date }}</p>
                            <p class="card-text"><b>Vote:</b> {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
