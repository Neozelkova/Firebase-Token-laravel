@extends('layouts.default')

@section('content')
	<div class="container">
	<h1>All Products</h1>

	@foreach ($products as $product)
	<div>
		<li>{{ $product->name }}</li>
		<p>{{ $product->amount}} </p>
		<p>{{ $product->discription }}</p>
	@endforeach
	</div>

@stop