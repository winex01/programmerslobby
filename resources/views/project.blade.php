@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-md-8">
			
			<img src="{{ Voyager::image($project->thumbnail('medium', 'image')) }}" class="img-responsive" alt="{{ $project->title }}">
			
			<div class="card mt-2">
			  <div class="card-body">
				<h4>{{ $project->title }}</h4>
			  </div>
			</div>
			

			<div class="card mt-1">
			  <div class="card-body">
				<strong>Description:</strong>
				{!! $project->body !!}
			  </div>
			</div>

		</div>
		<div class="col-md-4">
			
			<ul class="list-group">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>

		</div>
	</div>

	<br>

@endsection