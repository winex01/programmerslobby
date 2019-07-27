@extends('layouts.master')

@section('content')
    <h1 class="text-center">Get Source Code For Free</h1>
    <p class="text-center">Like us on <a href="https://www.facebook.com/ProgrammersLobby404/" target="_blank">Facebook</a> and ask your questions in comment section, <br>
    don't forget to leave a comment, And always remember keep it DRY :) ...
    </p>

  


    @foreach($projects->chunk('3') as $chunk)
        <div class="row">
            @foreach($chunk as $project)
                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By {{ $project->author->name }} <span>{{ $project->created_at->diffForHumans() }}</span></p>
                        
                        <div class="hovereffect">
                            <img src="{{ Voyager::image($project->thumbnail('cropped', 'image')) }}" class="img-responsive" alt="{{ $project->title }}">
                            <div class="overlay">
                               <h2>
                                    @foreach($project->tags->pluck('description') as $tag)
                                        {{ $tag }}
                                         @if (!$loop->last)
                                            {{ __(',') }}
                                        @endif
                                    @endforeach
                               </h2>
                               <a class="info" href="#">Download Code</a>
                            </div>
                        </div>

                        <h2><a href="{{ route('project', $project->slug) }}" data-toggle="tooltip" title="{{ $project->title }}">{{ str_limit($project->title, 40) }}</a></h2>
                        <p class="blog-text">{!! (str_limit(strip_tags($project->body), 190)) !!}</p>
                        <p><a class="read-more-btn" href="{{ route('project', $project->slug) }}">Read More</a>
                            <span><i class="fa fa-heart"></i> 7 People like, <i class="fa fa-comments-o"></i> 3.. 
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
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>
@endpush