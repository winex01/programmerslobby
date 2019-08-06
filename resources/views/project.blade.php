@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-lg-8">

			<div class="d-block shadow-lg rounded mb-4">
				@if(config('app.env') != 'production')
					<img src="https://lorempixel.com/730/400/" class="img-fluid" alt="{{ $project->title }}">
				@else
					<img src="{{ Voyager::image($project->thumbnail('medium', 'image')) }}" class="img-fluid" alt="{{ $project->title }}">
				@endif
			</div>

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<h4 class="m-0">{{ $project->title }}</h4>
					<p class="blog-meta">
						{{ __('Submitted by') }} <a href="javascript:(void);">{{ $project->author->name }}</a> 
						<span class="text-muted">
							<br>
							<sub>
								{{ __('Published') }} {{ $project->created_at->toDayDateTimeString() }}
								{{-- {{ __('Last Updated').' '.$project->updated_at->toDayDateTimeString() }} --}}
							</sub>
						</span>
						

						<span class="text-dark pull-right">
							<i class="fa fa-eye" aria-hidden="true"></i> 
							{{ $project->views->count() }} 
							{{ str_plural(__('view'), $project->views->count() ) }}
						</span>
					</p>
					<hr>
					@include('layouts.inspire')
					{!! $project->description !!}
				</div>
			</div>

			@include('layouts.disqus-comments-widget')
			
		</div>

		<div class="col-lg-4">
			@include('layouts.download-links-widget')
			@include('layouts.facebook-page-widget')
			@include('layouts.suggested-projects-widget')
		</div>
		
	</div>
	<br>
@endsection