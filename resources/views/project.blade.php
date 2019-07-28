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
						{{ __('By') }} <a href="javascript:(void);">{{ $project->author->name }}</a> 
						<span class="text-muted">
							<sub>
								{{ __('published') }} {{ $project->created_at->diffForHumans() }}
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
					<h5 class="mb-0">Need something more?</h5>
					<p class="small mb-4">Try one of these premium Bootstrap themes!</p>
				
					<div class="row">
						<div class="col-6 mb-4">
							<div class="item-preview">
								<a class="item-preview-img box-shadow-lg d-block" href="https://www.creative-tim.com/product/material-kit-pro/?affiliate_id=101249" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Affiliate Link','click','Creative Tim - Material Kit Pro')" rel="nofollow">
								<img class="img-fluid" src="/assets/img/screenshots/premium/creative-tim/mkp.jpg" alt="Material Kit Pro - Premium Bootstrap 4 UI Kit">
								</a>
							</div>
						</div>

						<div class="col-6 mb-4">
							<div class="item-preview">
								<a class="item-preview-img box-shadow-lg d-block" href="https://www.creative-tim.com/product/material-kit-pro-react/?affiliate_id=101249" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Affiliate Link','click','Creative Tim - Material Kit Pro React')" rel="nofollow">
								<img class="img-fluid" src="/assets/img/screenshots/premium/creative-tim/mkp-react.jpg" alt="Material Kit Pro - Premium Bootstrap 4 UI Kit">
								</a>
							</div>
						</div>

						<div class="col-6 mb-4">
							<div class="item-preview">
								<a class="item-preview-img box-shadow-lg d-block" href="https://www.creative-tim.com/product/now-ui-kit-pro/?affiliate_id=101249" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Affiliate Link','click','Creative Tim - Now UI Kit Pro')" rel="nofollow">
								<img class="img-fluid" src="/assets/img/screenshots/premium/creative-tim/nukp.jpg" alt="Now UI Kit - Premium Bootstrap 4 UI Kit">
								</a>
							</div>
						</div>

						<div class="col-6 mb-4">
							<div class="item-preview">
								<a class="item-preview-img box-shadow-lg d-block" href="https://www.creative-tim.com/product/paper-kit-2-pro/?affiliate_id=101249" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Affiliate Link','click','Creative Tim - Paper Kit 2 Pro')" rel="nofollow">
								<img class="img-fluid" src="/assets/img/screenshots/premium/creative-tim/pk2p.jpg" alt="Paper Kit 2 Pro - Premium Bootstrap 4 UI Kit">
								</a>
							</div>
						</div>
					</div>
					<a href="/buy-bootstrap-themes" class="btn btn-outline-primary btn-block">View More Premium Content</a>
				</div>
			</div>
		</div>
	</div>

	<br>

@endsection