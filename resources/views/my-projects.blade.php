@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <h1>My Projects</h1>



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
