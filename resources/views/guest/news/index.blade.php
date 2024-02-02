@extends('layouts.app')

@section('main-content')
    <h1>
        News
    </h1>
    <div class="container">
        <div class="row">

            @forelse ($newsList as $news)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <p>
                                    <strong>{{ $news->title }}</strong> : {{ $news->author }} - {{ $news->category }}
                                </p>
                            </div>
                            <img class="img-fluid" src="{{ $news->picture }}" alt="">
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
