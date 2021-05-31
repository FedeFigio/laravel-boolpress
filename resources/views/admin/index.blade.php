@extends('layouts.app')

@section('content')
    <div class="container">



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('admin.posts.index') }}">I MIEI POST</a>
                            <a href="{{ route('admin.posts.index') }}">DASHBOARD</a>
                            <a href="{{ route('admin.posts.index') }}">USERS</a>
                            <a href="{{ route('admin.posts.index') }}">CATEGORIES</a>
                            <a href="{{ route('posts.index') }}">VISUALIZZA SITO</a>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
