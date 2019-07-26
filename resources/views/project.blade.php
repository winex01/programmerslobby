@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-md-8">
			
			<img src="{{ Voyager::image($project->thumbnail('medium', 'image')) }}" class="img-responsive" alt="{{ $project->title }}">
			
			<br>
			<h1>{{ $project->title }}</h1>
			
			{!! $project->body !!}

		</div>
		<div class="col-md-4"></div>
	</div>

	<div></div>



@endsection