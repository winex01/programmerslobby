@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-lg-8">

			@foreach($projects as $project)


				<div class="card border-0 shadow mb-4">
					<div class="card-body">
						<img src="{{ Voyager::image($project->thumbnail('medium', 'image')) }}" class="img-fluid" alt="{{ $project->title }}">
						<h4 class="m-0 mt-2">{{ $project->title }}</h4>
						<p class="blog-meta">
							{{ __('By') }} <a href="{{ route('user.projects', [$project->author_id, $project->submittedBy]) }}">{{ $project->submittedBy }}</a> 
							<span class="text-muted">
								{{ __('Published') }} {{ $project->created_at->toDayDateTimeString() }}
							</span>
						</p>
						<hr>


						{!! shortenString($project->description, 300) !!}

						<div class="mt-2"></div>
						<a href="{{ route('project', $project->slug) }}" class="btn btn-primary">{{ __('Read more...') }}</a> 
					</div>
				</div>

			@endforeach	
			
			{{-- pagination --}}
			{{ $projects->links('pagination.blog') }}
			
		</div>

		<div class="col-lg-4">
			@include('layouts.facebook-page-widget')
			@include('layouts.suggested-projects-widget')
		</div>
		
	</div>

	<br>
@endsection