@extends('layouts.default')

@section('content')
	<div class="container">
	<h1>All Countries</h1>
		@foreach ($countries as $country)
		<li>{{ $country->name }}</li>
		@endforeach
	</div>
@stop