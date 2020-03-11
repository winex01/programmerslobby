{!! Share::currentPage(
	shortenString(
		removeWhiteSpaceAndSpecialChars($description ?? $project->description, 250)
	) . 'Submitted by ' . ($author ?? $project->submittedBy)
)->twitter()->facebook() !!}

@push('js')
	<script src="{{ asset('js/share.js') }}"></script>
	<script type="text/javascript">
		$('#social-links').find('ul').addClass('list-inline list-group list-group-horizontal');
		$('#social-links').find('li').css('margin-right', 10);
	</script>
@endpush