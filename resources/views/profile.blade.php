@extends('layouts.main')

@section('title', 'Profile')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Hello, {{$name}}!</h1>
			</div>
		</div>
	</div>
@endsection
