@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-lg-8">

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<img src="{{ Voyager::image($blog->thumbnail('medium', 'image')) }}" class="img-fluid" alt="{{ $blog->title }}">
					<h4 class="m-0 mt-2">{{ $blog->title }}</h4>
					<p class="blog-meta">
						{{ __('By') }} <a href="javascript:(void);">{{ $blog->submittedBy }}</a> 
						<span class="text-muted">
							{{ __('Published') }} {{ $blog->created_at->toDayDateTimeString() }}
						</span>
					</p>
					<hr>
					{!! $blog->body !!}
				</div>
			</div>

			@include('layouts.disqus-comments-widget')
			
		</div>

		<div class="col-lg-4">
			@include('layouts.facebook-page-widget')
			@include('layouts.suggested-projects-widget')
		</div>
		
	</div>
	<br>
@endsection