@extends('layouts.master')

@section('content')
    <h1 class="text-center">Get Source Code For Free</h1>
    <p class="text-center">Like this website and ask your questions in comment section, <br>
    don't forget to leave a comment, ProgrammersLobby.com coming soon..
    </p>


    {{-- {{ dd($projects) }} --}}

    @foreach($projects->chunk('3') as $chunk)
        <div class="row">
            @foreach($chunk as $project)
                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By {{ $project->author->name }} <span>{{ $project->created_at->diffForHumans() }}</span></p>
                        <img src="{{ Voyager::image($project->thumbnail('cropped', 'image')) }}" class="img-responsive" alt="Image">
                        <h2><a href="#" title="{{ $project->title }}">{{ str_limit($project->title, 40) }}</a></h2>
                        <p class="blog-text">{!! (str_limit(strip_tags($project->body), 190)) !!}</p>
                        <p><a class="read-more-btn" href="#">Read More</a>
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