@extends('layouts.admin.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('admin.tags.create') }}">Nuovo Tag</a>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($tags as $tag)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $tag->name }}</div>

                        <div class="card-body">
                        </div>
                        <a class="btn btn-primary"
                            href="{{ route('admin.tags.edit', ['tag' => $tag->id]) }}">Modifica</a>
                        <a class="btn btn-primary"
                            href="{{ route('admin.tags.show', ['tag' => $tag->id]) }}">Visualizza</a>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
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
