@extends('layouts.admin.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Nuova Categoria</a>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $category->name }}</div>

                        <div class="card-body">
                        </div>
                        <a class="btn btn-primary"
                            href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Modifica</a>
                        <a class="btn btn-primary"
                            href="{{ route('admin.categories.show', ['category' => $category->id]) }}">Visualizza</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
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
