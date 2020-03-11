@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <h1>About Us</h1>

                        <p>
                            Welcome Aboard! The main purpose of this website is to help programmers by providing a free and complete source code that can be use in their own application. 
                            <span class="text-primary">Programmers Lobby</span>
                            specifically a website for sharing examples and posts consists of tutorials related to programmers and programming languages.
                        </p>

                        <p>Always Remember Keep it <a target="__blank" href="https://www.google.com/search?rlz=1C1CHBD_enPH835PH835&ei=XpdPXbiZMcLbhwOo8pCABg&q=DRY+programming&oq=DRY+programming&gs_l=psy-ab.3..0l3j0i22i30l7.6786.8657..8801...0.0..0.130.1735.0j15....2..0....1..gws-wiz.......0i71j35i39j0i67j0i273j0i131j0i22i10i30.sw6jODDTGI4&ved=0ahUKEwi4wOm7-_njAhXC7WEKHSg5BGAQ4dUDCAo&uact=5">DRY</a> :)</p>

                        <p>If you have any concerns or question please contact us <a href="{{ route('contact') }}">here.</a></p>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            @include('layouts.facebook-page-widget')
            @include('adsense.side')
            @include('layouts.suggested-projects-widget')
        </div>
        
    </div>
    <br>
@endsection