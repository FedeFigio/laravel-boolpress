@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header d-flex justify-content-between">
            <a href="{{route('admin.posts.index')}}">I MIEI POST</a>
            <a href="{{route('admin.posts.index')}}">DASHBOARD</a>
            <a href="{{route('admin.posts.index')}}">USERS</a>
            <a href="{{route('admin.posts.index')}}">CATEGORIES</a>
            <a href="{{route('admin.posts.index')}}">TAG</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Nuovo Post</a>
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
                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>
                        <a class="btn btn-primary" href="{{ route('admin.posts.show', ['post' => $post->id]) }}">Visualizza</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary w-100">DELETE</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
