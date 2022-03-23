@extends('layouts.app')
@section('content')

@auth
    <div class="alert alert-success alert-dismissible fade show container" role="alert">
        <strong>You are logged in!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <a href="{{route('admin.posts.create')}}"><button>crea nuovo post</button></a>

@endauth
@foreach($posts as $post)
    <div class="posts_container">
        <h1>{{$post->title}}</h1>
        <h2>categorie: {{$post->category? $post->category->name : 'non appartiene a nessuna categoria'}}</h2>
        <p>{{$post->content}}</p>
        <p>tags: </p>
            @foreach ($post->tags as $tag)
                {{$tag->name}}
            @endforeach
        
        
        <a href="{{route('admin.posts.show', $post->id)}}"><button>mostra post</button></a>
        <form action="{{route("admin.posts.destroy", $post->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="" onclick="return confirm('Sei sicuro di voler eliminare questo post?');">Elimina</button>
        </form>
    </div>
@endforeach

@endsection