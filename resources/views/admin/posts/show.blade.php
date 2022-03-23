@extends('layouts.app')

@section('content')
    <h1>Titolo post: {{$post->title}}</h1>
    <p>Contenuto: {{$post->content}}</p>
    <a href="{{route('admin.posts.edit', $post->id)}}"><button>modifica</button></a>
    <a href="{{route('admin.posts.index', $post->id)}}"><button>Home</button></a>
    @foreach ($post->tags as $tag)
                {{$tag->name}}
            @endforeach
@endsection
 