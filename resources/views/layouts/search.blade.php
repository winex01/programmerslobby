
@if (is_active('home', 'search'))
	
	<form method="GET" action="{{ route('search.project') }}">
	    <input class="form-control" id="q" name="q" type="search" value="{{ isset($q) ? $q : '' }}" placeholder="Search project..." aria-label="Search">
	</form>

@elseif (is_active('blog'))

	{{-- <form class="my-auto d-inline">
	    <input id="search-box" class="form-control form-control-sm" type="search" placeholder="Search blog..." aria-label="Search">
	</form> --}}

@else
	{{-- Do Nothing --}}
@endif

