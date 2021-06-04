@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.tags.index') }}">Indietro</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">

                <h3>{{$tag->name}}</h3>
                <div class="d-flex">
                    <a class="btn btn-primary" href="{{ route('admin.tags.edit', ['tag' => $tag->id]) }}">Modifica</a>
                    <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary">DELETE</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
