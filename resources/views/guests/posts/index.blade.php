@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $post->title }}</div>
                        <div class="card-body">
                            {{ $post->content }}
                        </div>
                        <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">Visualizza</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
