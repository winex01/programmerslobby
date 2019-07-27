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
					<h5 class="m-0">{{ $project->title }}</h5>
					<hr>
					{!! $project->description !!}
				</div>
			</div>

			<div class="card border-0 shadow mb-4">
				<div class="card-body">
					<div class="disqus-comments">
						<div id="disqus_thread"><iframe id="dsq-app6029" name="dsq-app6029" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" sandbox="allow-forms allow-popups allow-same-origin allow-scripts" width="100%" src="//tempest.services.disqus.com/ads-iframe/google/?position=top&amp;shortname=startbootstrap&amp;experiment=network_default&amp;variant=fallthrough&amp;service=dynamic&amp;anchorColor=%23dd3d31&amp;colorScheme=light&amp;sourceUrl=https%3A%2F%2Fstartbootstrap.com%2Fthemes%2Fclean-blog%2F&amp;typeface=sans-serif&amp;canonicalUrl=https%3A%2F%2Fstartbootstrap.com%2Fthemes%2Fclean-blog%2F&amp;disqus_version=43bf82a" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 614px !important;"></iframe><iframe id="dsq-app6026" name="dsq-app6026" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" width="100%" src="https://disqus.com/embed/comments/?base=default&amp;f=startbootstrap&amp;t_u=https%3A%2F%2Fstartbootstrap.com%2Fthemes%2Fclean-blog%2F&amp;t_d=Clean%20Blog%20-%20Bootstrap%20Blog%20Theme%20-%20Start%20Bootstrap&amp;t_t=Clean%20Blog%20-%20Bootstrap%20Blog%20Theme%20-%20Start%20Bootstrap&amp;s_o=default#version=0ac6af584272c5fdcd44643479fbe23d" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 5929px !important;" horizontalscrolling="no" verticalscrolling="no"></iframe><iframe id="dsq-app6031" name="dsq-app6031" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" sandbox="allow-forms allow-popups allow-same-origin allow-scripts" width="100%" src="//tempest.services.disqus.com/ads-iframe/google/?position=bottom&amp;shortname=startbootstrap&amp;experiment=network_default&amp;variant=fallthrough&amp;service=dynamic&amp;anchorColor=%23dd3d31&amp;colorScheme=light&amp;sourceUrl=https%3A%2F%2Fstartbootstrap.com%2Fthemes%2Fclean-blog%2F&amp;typeface=sans-serif&amp;canonicalUrl=https%3A%2F%2Fstartbootstrap.com%2Fthemes%2Fclean-blog%2F&amp;disqus_version=43bf82a" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 615px !important;"></iframe></div>
					<script type="text/javascript">
					    (function() { // DON'T EDIT BELOW THIS LINE
					      var d = document,
					        s = d.createElement('script');
					      s.src = 'https://startbootstrap.disqus.com/embed.js';
					      s.setAttribute('data-timestamp', +new Date());
					      (d.head || d.body).appendChild(s);
					    })();
					  </script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div>
				</div>
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