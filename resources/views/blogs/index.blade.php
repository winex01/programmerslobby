@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-lg-8">

			@foreach($blogs as $blog)


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
						{{-- {!! $blog->description !!} --}}
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>

			@endforeach	
			
			{{-- pagination --}}
			{{ $blogs->links('pagination.blog') }}
		
		</div>

		<div class="col-lg-4">
			@include('layouts.facebook-page-widget')
			@include('layouts.suggested-projects-widget')
		</div>
		
	</div>


	<br>
@endsection