<div class="card border-0 shadow mb-4">
	<div class="card-body">
		<h5 class="mb-0">{{ __('Suggested Projects') }}</h5>
		<p class="small mb-4">{{ __('Browse one of these random projects!') }}</p>
	
		<div class="row">
			@foreach($suggestedProjects as $row)
				<div class="col-6 mb-4">
					<div class="hovereffect">
                    	<img id="suggested-widget" class="mb-1" src="{{ Voyager::image($row->thumbnail('small', 'image')) }}" class="img-responsive" alt="{{ $row->title }}">
                        <div class="overlay">
                           <a class="info" style="font-size: 10px;" href="{{ route('project', $row->slug) }}">
                           		{{ $row->title }}
                           	</a>
                        </div>
                    </div>
				</div>
			@endforeach
		</div>
		<a href="{{ route('home') }}" class="btn btn-outline-primary btn-block">{{ __('View More Projects') }}</a>
	</div>
</div>

@include('adsense.vertical')