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


						{!! shortenString($blog->body, 300) !!}

						<div class="mt-2"></div>
						<a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">{{ __('Read more...') }}</a> 
					</div>
				</div>

			@endforeach	
			
			{{-- pagination --}}
			{{ $blogs->links('pagination.blog') }}
			
			@include('adsense.square')
			
		</div>

		<div class="col-lg-4">
			@include('layouts.facebook-page-widget')
			@include('adsense.side')
			@include('layouts.suggested-projects-widget')
		</div>
		
	</div>

	<br>
@endsection