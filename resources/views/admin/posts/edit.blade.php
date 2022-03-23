@extends('layouts.app')

@section('content')
    
<form action="{{route('admin.posts.update', $post->id)}}" method="post">
    @method('put')
    @csrf
    
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="content">Content:</label>
      <input type="text" id="content" name="content" {{$post->content}}>
    </div>
    <select name="category_id" id="">
      <option value="">-- Seleziona categoria --</option>
      @foreach ($categories as $category)
         <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    <label for="tags">Tags</label>
    @foreach ($tags as $tag)
      <div>
        <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="">
        <label for="">{{$tag->name}}</label>
      </div>
    @endforeach
    <input type="submit" value="Confirm">
  </form>

@endsection