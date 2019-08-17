@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h1>Submit Code!</h1>

                        <form class="form-horizontal" method="POST" action="#">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title: </label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Your title" name="title" value="{{ old('title') }}">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message">Message: </label>
                                <textarea type="text" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Type your messages here" name="message">{{ old('message') }}</textarea>

                                @error('message')
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



                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>

                        <br>

                        @include('layouts.inspire')
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

@push('js')
 {!! NoCaptcha::renderJs() !!}
@endpush