<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/all.css') }}">
     
    </head>
    <body>

        {{-- 
                ASP/ASP.NET
                Android
                C#
                C/C++
                Delphi
                HTML/CSS
                Java
                Javascript
                MySQL
                PHP
                PostgreSQL
                Python
                Visual Basic
                Visual Basic.Net
                iOS
         --}}

        <nav class="navbar py-0 navbar-expand-sm navbar-light bg-light fixed-top py-md-0">
            <a class="navbar-brand text-muted" href="#">ProgrammersLobby.com</a>
            <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Programming
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">ASP/ASP.NET</a>
                          <a class="dropdown-item" href="#">Android</a>
                          <a class="dropdown-item" href="#">C#</a>
                          <a class="dropdown-item" href="#">C/C++</a>
                          <a class="dropdown-item" href="#">Delphi</a>
                          <a class="dropdown-item" href="#">HTML/CSS</a>
                          <a class="dropdown-item" href="#">Java</a>
                          <a class="dropdown-item" href="#">Javascript</a>
                          <a class="dropdown-item" href="#">MySQL</a>
                          <a class="dropdown-item" href="#">PHP</a>
                          <a class="dropdown-item" href="#">PostgreSQL</a>
                          <a class="dropdown-item" href="#">Python</a>
                          <a class="dropdown-item" href="#">Visual Basic</a>
                          <a class="dropdown-item" href="#">Visual Basic.Net</a>
                          <a class="dropdown-item" href="#">iOS</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Others</a>
                        </div>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>

                <form class="mx-2 my-auto d-inline w-25">
                    <input class="form-control form-control-sm" type="search" placeholder="Search..." aria-label="Search">
                </form>

                <a class="ml-2 text-muted" href="#">Login</a>
                <a class="ml-2 btn btn-outline-primary btn-sm my-2 my-sm-0" href="#">Sign up</a>
            </div>
        </nav>

       <div class="container mt-5">
           <h1 class="text-center">Get Source Code For Free</h1>
           <p class="text-center">Like this website and ask your questions in comment section, <br>
            don't forget to leave a comment, ProgrammersLobby.com coming soon..
           </p>

           <div class="row">

                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Admin <span>September 24, 2018</span></p>
                        <img style="width: 100%; height: 250px;" src="/images/img1.jpg" class="img-responsive" alt="Image">
                        <h2><a href="#">Learn How To Make a Website</a></h2>
                        <p class="blog-text">Like this video and ask your questions in comment sections, don't forget to Subscribe Easy Tutorials YouTube Channel to watch more videos...</p>
                        <p><a class="read-more-btn" href="#">Read More</a>
                            <span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class="fa fa-comments-o"></i> 3.. 
                            </span>
                        </p>
                    </div>  
                </div>

                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Winnie Damayo <span>October 04, 2018</span></p>
                        <img style="width: 100%; height: 250px;" src="/images/img2.jpg" class="img-responsive" alt="Image">
                        <h2><a href="#">Learn How To Make a Website</a></h2>
                        <p class="blog-text">Like this video and ask your questions in comment sections, don't forget to Subscribe Easy Tutorials YouTube Channel to watch more videos...</p>
                        <p><a class="read-more-btn" href="#">Read More</a>
                            <span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class="fa fa-comments-o"></i> 3.. 
                            </span>
                        </p>
                    </div>  
                </div>

                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Jane Dough <span>July 18, 2018</span></p>
                        <img style="width: 100%; height: 250px;" src="/images/img3.jpg" class="img-responsive" alt="Image">
                        <h2><a href="#">Learn How To Make a Website</a></h2>
                        <p class="blog-text">Like this video and ask your questions in comment sections, don't forget to Subscribe Easy Tutorials YouTube Channel to watch more videos...</p> 
                        <p><a class="read-more-btn" href="#">Read More</a>
                            <span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class="fa fa-comments-o"></i> 3.. 
                            </span>
                        </p>
                    </div>  
                </div>

           </div>

           <div class="row">

                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Admin <span>September 24, 2018</span></p>
                        <img style="width: 100%; height: 250px;" src="/images/img1.jpg" class="img-responsive" alt="Image">
                        <h2><a href="#">Learn How To Make a Website</a></h2>
                        <p class="blog-text">Like this video and ask your questions in comment sections, don't forget to Subscribe Easy Tutorials YouTube Channel to watch more videos...</p>
                        <p><a class="read-more-btn" href="#">Read More</a>
                            <span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class="fa fa-comments-o"></i> 3.. 
                            </span>
                        </p>
                    </div>  
                </div>

                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Winnie Damayo <span>October 04, 2018</span></p>
                        <img style="width: 100%; height: 250px;" src="/images/img2.jpg" class="img-responsive" alt="Image">
                        <h2><a href="#">Learn How To Make a Website</a></h2>
                        <p class="blog-text">Like this video and ask your questions in comment sections, don't forget to Subscribe Easy Tutorials YouTube Channel to watch more videos...</p>
                        <p><a class="read-more-btn" href="#">Read More</a>
                            <span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class="fa fa-comments-o"></i> 3.. 
                            </span>
                        </p>
                    </div>  
                </div>

                <div class="col-md-4">
                    <div class="single-blog">
                        <p class="blog-meta">By Jane Dough <span>July 18, 2018</span></p>
                        <img style="width: 100%; height: 250px;" src="/images/img3.jpg" class="img-responsive" alt="Image">
                        <h2><a href="#">Learn How To Make a Website</a></h2>
                        <p class="blog-text">Like this video and ask your questions in comment sections, don't forget to Subscribe Easy Tutorials YouTube Channel to watch more videos...</p> 
                        <p><a class="read-more-btn" href="#">Read More</a>
                            <span><i class="fa fa-thumbs-o-up"></i>7 People like, <i class="fa fa-comments-o"></i> 3.. 
                            </span>
                        </p>
                    </div>  
                </div>
       </div>

        <div class="mt-4">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
