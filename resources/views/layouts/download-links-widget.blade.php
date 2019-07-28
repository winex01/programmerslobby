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