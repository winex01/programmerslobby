@if ($paginator->hasPages())
    <ul class="pagination justify-content-center" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">{{ __('Newer Posts') }}</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('Newer Posts') }}</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('Older Posts') }}</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">{{ __('Older Posts') }}</span>
            </li>
        @endif
    </ul>
@endif