<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style type="text/css">
            body {
                background-color: #efefef !important;
                /*padding-top: 70px;*/
            }
            .single-blog {
                box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.2);
                padding: 10px;
                margin-top: 30px;
                background-color: #fff;
            }
            .single-blog img {
                width: 100%;
            }
            .blog-meta {
                font-size: 14px;
                margin-bottom: 2px;
            }
            .single-blog span {
                float: right;
                font-size: 12px;
                color: cornflowerblue;
            }
            .blog-text {
                font-size: 14px;
                text-align: justify;
            }
            .single-blog h2 {
                margin-top: 10px;
                font-size: 16px;
                color: #007bff;
            }
            .single-blog h2 a {
                text-decoration: none;
            }
            .read-more-btn {
                background-image: linear-gradient(to right, #1c03b5, #5c8bef);
                padding: 5px 12px 8px;
                border-radius: 20px;
                line-height: 20px;
                font-size: 14px;
                color: #fff;
                border: none!important;
            }
            .read-more-btn:hover {
                background-image: linear-gradient(to right, #006417, #00b128);
                text-decoration: none;
                color: #fff;
            }
            .navbar
            {
                border-top:3px solid #F48024;
                border-bottom: 1px solid #ddd;
                /*height: 50px;*/
            }
        </style>
        
    </head>
    <body>

        {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
          <a class="navbar-brand text-muted" href="#">ProgrammersLobby.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            
          </div>
        </nav> --}}


        <nav class="navbar py-0 navbar-expand-sm navbar-light bg-light fixed-top py-md-0">
            <a class="navbar-brand text-muted" href="#">ProgrammersLobby.com</a>
            <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Meme</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Submit Code</a></li>
                  {{-- <li class="nav-item"></li> --}}
                  {{-- <li class="nav-item"></li> --}}
                    
                </ul>

                <form class="mx-2 my-auto d-inline w-25">
                    <input class="form-control form-control-sm" type="search" placeholder="Search..." aria-label="Search">
                </form>

                <a class="ml-2 text-info" href="#">Login</a>
                <a class="ml-2 btn btn-outline-primary btn-sm my-2 my-sm-0" href="#">Sign up</a>
              {{-- <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 ml-1" type="submit">Search</button> --}}
                
            </div>

        </nav>



       <div class="container mt-5">
           <h1 class="text-center">Get Source Code For Free</h1>
           <p class="text-center">Like this video and ask your questions in comment section, <br>
            don't forget to subscribe Easy Tutorials YouTube Channel to watch more videos.
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
