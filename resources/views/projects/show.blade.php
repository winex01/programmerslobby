@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-lg-8">

			<div class="d-block shadow-lg rounded mb-4">
				<img src="{{ Voyager::image($project->thumbnail('medium', 'image')) }}" class="img-fluid" alt="{{ $project->title }}">
			</div>

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<h4 class="m-0">{{ $project->title }}</h4>
					<p class="blog-meta">
						{{ __('Submitted by') }} <a href="javascript:(void);">{{ $project->submittedBy }}</a> 
						<span class="text-muted">
							<br>
							<sub>
								{{ __('Published') }} {{ $project->created_at->toDayDateTimeString() }}
							</sub>
						</span>
						
						<span class="text-dark pull-right">
							<i class="fa fa-eye" aria-hidden="true"></i> 
							{{ $project->totalViews }}
							{{ str_plural(__('view'), $project->views->count() ) }}
						</span>
					</p>
					
					@include('layouts.social-media-share')

					<hr>
					{!! $project->description !!}
				</div>
			</div>

			@include('adsense.square')
			@include('layouts.disqus-comments-widget')
			
		</div>

		<div class="col-lg-4">
			@include('layouts.download-links-widget')
			@include('layouts.facebook-page-widget')
			@include('adsense.side')
			@include('layouts.suggested-projects-widget')
		</div>
		
	</div>
	<br>
@endsection
