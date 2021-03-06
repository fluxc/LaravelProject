@extends("layouts.admin")

@section("content")
    <h1>Posts</h1>

      <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>User</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><img height ='50' src="{{$post->photo_id ? $post->photo->file : '/images/profile.jpg'}}"></td>
            <th>{{$post->user->name}}</th>
            <td>{{$post->category ? $post->category->name : 'uncategoryzed'}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at ->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
         </tr>
         @endforeach

    @endif
    </tbody>
  </table>
@stop