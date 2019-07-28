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
						{{ __('Submitted by') }} <a href="javascript:(void);">{{ $project->author->name }}</a> 
						<span class="text-muted">
							<br>
							<sub>
								{{ __('Published') }} {{ $project->created_at->toDateString() }}
								-
								{{ __('Last Updated').' '.$project->updated_at->toDateString() }}
							</sub>
						</span>
						

						<span class="text-dark pull-right">
							<i class="fa fa-eye" aria-hidden="true"></i> 
							{{ $project->views->count() }} 
							{{ str_plural(__('view'), $project->views->count() ) }}
						</span>
					</p>
					<hr>
					{!! $project->description !!}
				</div>
			</div>

			<div class="card border-0 shadow mb-4">
				@include('layouts.disqus-comments')
			</div>
		</div>

		<div class="col-lg-4">

			@if($project->hasCodeLink)
				<div class="card border-0 shadow mb-4 d-none d-lg-block">
					<div class="card-body">
						@if($project->download_link)
							<a target="_blank" href="{{ $project->download_link }}" class="btn btn-block btn-danger mb-3 py-3">
								<i class="fa fa-download" aria-hidden="true"></i> <span>{{ __('Free Download') }}</span>
							</a>
							<hr>
						@endif

						@if($project->gitlab_link)
							<a target="_blank" href="{{ $project->gitlab_link }}" class="btn btn-block btn-outline-primary mb-3">
								<i class="fa fa-gitlab" aria-hidden="true"></i></i></i> {{ __('View on GitLab') }}
							</a>
						@endif

						@if($project->github_link)
							<a target="_blank" href="{{ $project->github_link }}" class="btn btn-block btn-outline-dark">
								<i class="fa fa-github" aria-hidden="true"></i> {{ __('View on GitHub') }}
							</a>
						@endif

						@if($project->sourcecode_link)
							<a target="_blank" href="{{ $project->sourcecode_link }}" class="btn btn-block btn-outline-success">
								<i class="fa fa-code" aria-hidden="true"></i> {{ __('View SourceCode') }}
							</a>
						@endif
					</div>
				</div>
			@endif

			<div class="card border-0 shadow mb-4 text-center">
				<div class="card-body">
					<div class="small mb-2 font-weight-bold">{{ __('Get updates when new sourcode is uploaded!') }}</div>
					@include('layouts.facebook-page')
				</div>
			</div>

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<div class="d-flex justify-content-between small">
						<span class="font-weight-bold">License</span>
						<span><i class="fal fa-balance-scale"></i> <a class="font-weight-bold" href="https://github.com/BlackrockDigital/startbootstrap-clean-blog/blob/master/LICENSE">MIT License</a></span>
					</div>
					<hr class="my-2">
					<div class="d-flex justify-content-between small">
						<span class="font-weight-bold">Released</span>
						<span>Sep 25, 2014</span>
					</div>
					<hr class="my-2">
					<div class="d-flex justify-content-between small">
						<span class="font-weight-bold">Bootstrap Version</span>
						<span>4.3.1</span>
					</div>
					<hr class="my-2">
					<div class="d-flex justify-content-between small">
						<span class="font-weight-bold">Last Updated</span>
						<span>Jun 13, 2019</span>
					</div>
					<hr class="my-2">
					<div class="d-flex justify-content-between small">
						<span class="font-weight-bold">Theme Version</span>
						<span>5.0.7</span>
					</div>
				</div>
			</div>

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<h5 class="mb-0">{{ __('SUGGESTED PROJECT') }}</h5>
					<p class="small mb-4">{{ __('Browse one of these random projects!') }}</p>
				
					<div class="row">
						@foreach($suggestedProject as $row)
							<div class="col-6 mb-4">
								<div class="hovereffect">
		                            <img class="mb-1" src="{{ Voyager::image($row->thumbnail('small', 'image')) }}" class="img-responsive" alt="{{ $row->title }}" height="100px;">
		                            <div class="overlay">
		                               <a class="info" style="font-size: 10px;" href="{{ route('project', $row->slug) }}">
		                               		{{ $row->title }}
		                               	</a>
		                            </div>
		                        </div>
							</div>
						@endforeach
					</div>
					<a href="/buy-bootstrap-themes" class="btn btn-outline-primary btn-block">View More Premium Content</a>
				</div>
			</div>
		</div>
	</div>

	<br>

@endsection