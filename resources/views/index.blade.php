
@extends('layouts.master')

@section('content')
    <h1 class="text-center">Get Source Code For Free</h1>
    <p class="text-center">Like us on <a href="https://www.facebook.com/ProgrammersLobby404/" target="_blank">Facebook</a> and ask your questions in comment section, <br>
    don't forget to leave a comment, And always remember keep it DRY :) ...
    </p>

  
    


    

    
@endsection

@push('js')
<script id="dsq-count-scr" src="//{{ config('disqus.username') }}.disqus.com/count.js" async></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>
@endpush