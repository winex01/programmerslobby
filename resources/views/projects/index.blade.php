
@extends('layouts.master')

@section('main_title')
    <h1 class="text-center">Get Source Code For Free</h1>
@endsection

@section('content')
    @if(isset($projects))
        @foreach($projects->chunk('3') as $chunk)
            <div class="row mt-n3">
                @foreach($chunk as $project)
                    <div class="col-md-4">
                        <div class="single-blog">
                            <p class="blog-meta">By <a href="{{ route('user.projects', [$project->author_id, $project->submittedBy]) }}">{{ $project->submittedBy }}</a> <span class="text-dark">{{ $project->publishedDate }}</span></p>

                            <div class="hovereffect">
                                <img class="mb-2" src="{{ Voyager::image($project->thumbnail('cropped', 'image')) }}" class="img-responsive" alt="{{ $project->title }}">
                                <div class="overlay">
                                   <h2>
                                        {{ implode(', ', $project->tags->pluck('description')->toArray()) }}
                                   </h2>
                                   <a class="info" href="{{ route('project', $project->slug) }}">{{ __('View Code') }}</a>
                                </div>
                            </div>

                            <h2><a href="{{ route('project', $project->slug) }}" data-toggle="tooltip" title="{{ $project->title }}">{{ str_limit($project->title, 35) }}</a></h2>
                            <p class="blog-text mt-n2">
                                {!! shortenString($project->description, 180) !!}
                            </p>
                            <p><a class="read-more-btn" href="{{ route('project', $project->slug) }}">{{ __('Read More') }}</a>
                                <span class="text-dark">
                                    {{-- <i class="fa fa-thumbs-o-up"></i> 7 {{ __('People like') }},  --}}

                                    <i class="fa fa-eye"></i>
                                    {{ $project->totalViews }}
                                    {{ str_plural(__('View'), $project->totalViews ) }},

                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    <a href="{{ route('project', $project->slug) }}#disqus_thread">{{ __('...') }}</a>

                                </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        {{-- pagination --}}
        <div class="mt-4">
            {{ $projects->onEachSide(1)->links() }}
        </div>
    @else
        <div class="mt-4 mb-2">
            <div class="alert alert-danger">
                {{ __('No result found.') }}
            </div>
        </div>
    @endif

@endsection

@push('js')
<script id="dsq-count-scr" src="//{{ config('disqus.username') }}.disqus.com/count.js" async></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
