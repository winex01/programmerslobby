@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <h1>Contact Us</h1>

                        <form class="form-horizontal" method="POST" action="/contact">
                            {{ csrf_field() }} 
                            <div class="form-group">
                            <label for="Name">Name: </label>
                            <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message: </label>
                            <textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
                        </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" value="Send">Send</button>
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