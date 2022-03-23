<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf 
    <label for="tags">Tags</label>
    @foreach ($tags as $tag)
      <div>
        <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="">
        <label for="">{{$tag->name}}</label>
      </div>
    @endforeach


    <label for="title">Oggetto del post</label>
    <input type="text" name="title" id="" placeholder="inserirsci oggetto post">

    <label for="description">Corpo del post</label>
    <input type="text" name="content" id="" placeholder="cosa vorresti scrivere?">
    <select name="category_id" id="">
        <option value="">-- Seleziona categoria --</option>
        @foreach ($categories as $category)
           <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    <button type="submit" value="Submit">aggiungi</button>
</form>