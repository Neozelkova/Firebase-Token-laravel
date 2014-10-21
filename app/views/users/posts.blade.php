@extends('layouts.default')

@section('content')
<div class="container">
	<h1>All Posts</h1>

	@foreach ($posts as $post)
		<li>{{ $post->name }}</li>
	@endforeach

</div>
@stop