@extends('layouts.app')

@section('main-content')
    <h1>
        Movies
    </h1>
    <div class="container">
        <div class="row">

            @forelse ($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>
                                    {{ $movie->title }} - {{ $movie->original_title }}
                                </h3>
                            </div>
                            <p>
                                {{ $movie->nationality }}, {{ $movie->date }}, {{ $movie->vote }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h3>
                        There are no movies available...
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
@endsection
