@extends('layouts.app')
@section('content')

@auth
    <div class="alert alert-success alert-dismissible fade show container" role="alert">
        <strong>You are logged in!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    

@endauth
<div class="d-flex justify-content-center flex-column align-items-center">
    <h1>Lista Posts</h1>
    <a href="{{ route('admin.posts.create') }}"><button type="button" class="btn btn-warning">Crea Post</button></a>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Contenuto</th>
            <th scope="col">Tags</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category ? $post->category->name : '-' }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    @foreach ($post->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </td>
                <td class="d-flex flex-column align-items-center">
                    <a href="{{ route('admin.posts.show', $post->id) }}">
                        <button type="button" class="btn btn-primary">Mostra</button>
                    </a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}">
                        <button type="button"
                        class="btn btn-warning">Modifica</button>
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection