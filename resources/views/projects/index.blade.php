
@extends('layouts.master')

@section('main_title')
    <h1 class="text-center">Get Source Code For Free</h1>
@endsection

@section('content')
    @foreach($projects->chunk('3') as $chunk)
        <div class="row">
            @foreach($chunk as $project)
                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By <a href="#">{{ $project->submittedBy }}</a> <span>{{ $project->created_at->toFormattedDateString() }}</span></p>

                        <div class="hovereffect">
                            <img class="mb-2" src="{{ Voyager::image($project->thumbnail('cropped', 'image')) }}" class="img-responsive" alt="{{ $project->title }}">
                            <div class="overlay">
                               <h2>
                                    {{ implode(', ', $project->tags->pluck('description')->toArray()) }}
                               </h2>
                               <a class="info" href="{{ route('project', $project->slug) }}">{{ __('Download Code') }}</a>
                            </div>
                        </div>

                        <h2><a href="{{ route('project', $project->slug) }}" data-toggle="tooltip" title="{{ $project->title }}">{{ str_limit($project->title, 35) }}</a></h2>
                        <p class="blog-text mt-n2">
                            {!! shortenString($project->description, 180) !!}
                        </p>
                        <p><a class="read-more-btn" href="{{ route('project', $project->slug) }}">{{ __('Read More') }}</a>
                            <span>
                                {{-- <i class="fa fa-thumbs-o-up"></i> 7 {{ __('People like') }},  --}}

                                <i class="fa fa-eye"></i>
                                {{ $project->totalViews }}
                                {{ str_plural(__('View'), $project->views->count() ) }},

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
        {{ $projects->links() }}
    </div>
@endsection

@push('js')
<script id="dsq-count-scr" src="//{{ config('disqus.username') }}.disqus.com/count.js" async></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
