@extends('layout')
@section('body')
<form action="/addPost" method="post" enctype="multipart/form-data">
@csrf
	<input type="text" name='title'>
	<input type="text" name='body'>
	<input type="file" name='image'>
	<button class='btn'>отправить</button>
</form>
@endsection