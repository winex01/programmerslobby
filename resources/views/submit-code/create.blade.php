@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h1>{{ __('Submit Code!') }}</h1>

                        <form class="form-horizontal" method="POST" action="{{ route('submit.code.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">{{  __('Title:') }}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Your title" name="title" value="{{ old('title') }}">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">{{ __('Cover Photo:') }}</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Your cover photo" name="image" value="{{ old('image') }}">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description:') }}</label>
                                <textarea type="text" class="form-control richTextBox @error('description') is-invalid @enderror" id="description" placeholder="Type your description here" name="description">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- link code --}}
                            <div class="form-group">
                                <label for="code">{{ __('Sourcecode Link:') }} (ex. <a target="__blank" href="https://github.com/">Github</a>, <a target="__blank" href="https://gitlab.com/">Gitlab</a>, <a target="__blank" href="https://mediafire.com/">Mediafire</a>, <a target="__blank" href="https://sourceforge.net/">Sourceforge</a> etc.) </label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="github.com/winex01/programmerslobby" name="code" value="{{ old('code') }}">

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- tags --}}
                            <div class="form-group">
                                <label for="tags">{{ __('Tags:') }}</label>
                                <select class="form-control @error('description') is-invalid @enderror" id="tags" name="tags[]" multiple="multiple">
                                  @foreach($tags as $tag)
                                    <option 
                                        @if(old('tags'))
                                            @if(in_array($tag->id, old('tags') )) 
                                                selected 
                                            @endif 
                                        @endif
                                    value="{{ $tag->id }}">{{ $tag->description }}</option>
                                  @endforeach
                                </select>

                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                {!! NoCaptcha::display() !!}

                                @error('g-recaptcha-response')
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button name="submit_code" type="submit" value="submit" class="btn btn-primary btn-block">Submit Code</button>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button name="submit_code" type="submit" value="draft" class="btn btn-success btn-block">Save as Draft</button>
                                    </div>
                                </div>
                            </div>{{-- end row --}}
                        </form>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            @include('layouts.facebook-page-widget')
            @include('layouts.suggested-projects-widget')
        </div>
        
    </div>
    <br>
@endsection

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
@endpush

@push('js')
 {!! NoCaptcha::renderJs() !!}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
        $('#tags').select2();
    });
 </script>
@endpush

@include('layouts.tiny-mce')