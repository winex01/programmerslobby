{!! Share::currentPage(
	shortenString(
		removeWhiteSpaceAndSpecialChars($description ?? $project->description, 250)
	) . 'Submitted by ' . ($author ?? $project->submittedBy)
)->twitter()->facebook() !!}