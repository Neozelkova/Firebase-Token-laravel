@extends('layouts.default')

@section('content')
<div class="container">
	<h1>All Users</h1>

	@foreach($users as $user)
		<li> {{ $user->username }}</li>
	@endforeach
</div>

@stop