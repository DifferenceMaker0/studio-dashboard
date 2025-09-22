@extends('layouts.posts')

@section('content')
    <h1>Edit Post</h1>
    {!! html()->form()->open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{html()->label('cover_image', 'Cover Image')}} 
            <img src="{{asset('uploads/thumbnails/'. $post->thumbnail ) }}" />
        </div>
        <div class="form-group">
            {{html()->label('title', 'Title')}}
            {{html()->text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{html()->label('body', 'Body')}}
            {{html()->textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
        {{html()->file('cover_image')}}
        </div>
        {{html()->hidden('_method','PUT')}}
        {{html()->submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! html()->form()->close() !!}

    {!!html()->form()->open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{html()->hidden('_method', 'DELETE')}}
        {{html()->submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!html()->form()->close()!!}
@endsection