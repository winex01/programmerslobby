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
						{{ __('By') }} <a href="{{ route('user.projects', [$project->author_id, $project->submittedBy]) }}">{{ $project->submittedBy }}</a> 
						<span class="text-muted">
							{{ __('Published') }} {{ $project->created_at->toDayDateTimeString() }} 
						</span>

						{{-- bookmark --}}
				        @if($project->isFavorited())
							<a href="{{ route('project.bookmark', $project->id) }}" title="{{ __('Remove bookmark on this project') }}">
					        	<i class="fa fa-bookmark" aria-hidden="true"></i> Unbookmark
					        </a>
				        @else
				        	<a href="{{ route('project.bookmark', $project->id) }}" title="{{ __('Bookmark on this project') }}">
					        	<i class="fa fa-bookmark-o" aria-hidden="true"></i> Bookmark
					        </a>
				        @endif

						<span class="text-dark pull-right">
							<i class="fa fa-eye" aria-hidden="true"></i> 
							{{ $project->totalViews }}
							{{ str_plural(__('view'), $project->totalViews ) }}
						</span>
					</p>
					
					@foreach($project->tags as $tag)
						<a class="badge badge-secondary" href="{{ route('search.project') .'?q='.$tag->description }}">{{ $tag->description }}</a>
					@endforeach

					@include('layouts.social-media-share')
					

					<hr>
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
