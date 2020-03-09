<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Content</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">{{ __('Projects') }}</a></li>
                        <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Info</h3>
                    <ul>
                        <li><a href="{{ route('disclaimer') }}">{{ __('Disclaimer') }}</a></li>
                        <li><a href="{{ route('tos') }}">{{ __('Terms And Privacy') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>{{ config('app.name') }}</h3>
                    <p>
                        Like us on Facebook and ask your questions in comment section, 
                        don't forget to leave a comment on a project you visit, And always 
                        remember keep it DRY :) ...
                    </p>
                </div>
                <div class="col item social">
                    <a href="https://www.facebook.com/ProgrammersLobby404/"><i class="icon ion-social-facebook"></i></a>
                    <a href="https://twitter.com/proglobby404"><i class="icon ion-social-twitter"></i></a>
                </div>
            </div>
            <p class="copyright">{{ config('app.name') }} © {{ date('Y') }}</p>
        </div>
    </footer>
</div>