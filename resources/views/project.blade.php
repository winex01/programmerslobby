@extends('layouts.master')

@section('content')
	<br>
	<div class="row">
		<div class="col-lg-8">

			<a class="img-preview d-block shadow-lg rounded mb-4" target="_blank" href="/previews/clean-blog/">
				<img src="{{ Voyager::image($project->thumbnail('medium', 'image')) }}" class="img-responsive" alt="{{ $project->title }}">
			</a>

			<div class="card border-0 shadow mb-4 d-lg-none">
				<div class="card-body">
					<a target="_blank" href="https://github.com/BlackrockDigital/startbootstrap-clean-blog/archive/gh-pages.zip" class="btn btn-block btn-primary mb-3 py-3" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Download','click','Clean Blog')">
					<i class="fal fa-download fa-fw"></i> <span>Free Download</span>
					</a>
					<hr>
					<a target="_blank" href="/previews/clean-blog/" class="btn btn-block btn-outline-primary mb-3"><i class="far fa-browser fa-fw"></i> Live Preview</a>
					<a target="_blank" href="https://github.com/BlackrockDigital/startbootstrap-clean-blog" class="btn btn-block btn-outline-github"><i class="fab fa-github fa-fw"></i> View on GitHub</a>
				</div>
			</div>

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<h4 class="m-0">{{ $project->title }}</h4>
					<p class="blog-meta">By {{ $project->author->name }} <span>{{ $project->created_at->diffForHumans() }}</span></p>
					<hr>
					{!! $project->description !!}
				</div>
			</div>

			<div class="card border-0 shadow mb-4">
				@include('layouts.disqus-comments')
			</div>
		</div>

		<div class="col-lg-4">

			<div class="card border-0 shadow mb-4 d-none d-lg-block">
				<div class="card-body">
					<a target="_blank" href="https://github.com/BlackrockDigital/startbootstrap-clean-blog/archive/gh-pages.zip" class="btn btn-block btn-primary mb-3 py-3" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Download','click','Clean Blog')">
					<i class="fal fa-download fa-fw"></i> <span>Free Download</span>
					</a>
					<hr>
					<a target="_blank" href="/previews/clean-blog/" class="btn btn-block btn-outline-primary mb-3"><i class="far fa-browser fa-fw"></i> Live Preview</a>
					<a target="_blank" href="https://github.com/BlackrockDigital/startbootstrap-clean-blog" class="btn btn-block btn-outline-github"><i class="fab fa-github fa-fw"></i> View on GitHub</a>
				</div>
			</div>

			<div class="card border-0 shadow mb-4 text-center">
				<div class="card-body">
					<div class="small mb-2 font-weight-bold">Get updates when Clean Blog is improved!</div>
					<a target="_blank" href="javascript:void(0)" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open('https://twitter.com/intent/user?original_referer=&amp;region=screen_name&amp;screen_name=SBootstrap&amp;source=followbutton&amp;variant=1.1', 'twitter', 'toolbar=no, width=450, height=600'); return false;" class="btn btn-twitter btn-sm btn-block"><i class="fab fa-twitter"></i> Follow @SBootstrap</a>
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