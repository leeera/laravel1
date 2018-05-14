@extends('layout')
@section('links')
@foreach ($obj as $f)
<li><a href="/posts/{{$f->id}}">{{$f->name}}</a></li>
@endforeach
@endsection
@section('body')
	@foreach ($posts as $post)
	<div>
		<h2>{{$post->title}}</h2>
		<p>{{ str_limit($post->body, 100)}}</p>
		<a href="/post/{{$post->id}}">читать дальше</a>
	</div>
	@endforeach
@endsection