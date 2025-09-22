@extends('layouts.posts')

@section('content') 
    <a href="{{route('posts.index')}}" class="btn btn-default">Go Back</a> 
        <h1>{{$post->title}}</h1>
        @if($post->cover_image)
            <img style="width:100%" src="{{asset('uploads/'. $post->cover_image ) }}">
        @else
        <p>No Cover Image</p>
        @endif
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>  
        @if($authUser->id == $post->user_id)
            <a href="{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!html()->form()->open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{html()->hidden('_method', 'DELETE')}}
                {{html()->submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!html()->form()->close()!!}
        @endif   
@endsection