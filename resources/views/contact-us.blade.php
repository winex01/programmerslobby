@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <h1>Contact Us</h1>

                        <form class="form-horizontal" method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="form-group">
                                <label for="Name">Name: </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your name" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="john@example.com" name="email" value="{{ old('email') }}">

                                @error('email')
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