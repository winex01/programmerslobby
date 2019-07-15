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
                padding-top: 70px;
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
                border-bottom:1px solid linear-gradient(to right, #006417, #00b128);
                height: 50px;
            }
        </style>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="#">ProgrammersLobby.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link py-0 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Language
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">PHP</a>
                  <a class="dropdown-item" href="#">Python</a>
                  <a class="dropdown-item" href="#">C#</a>
                  <a class="dropdown-item" href="#">C++</a>
                  <a class="dropdown-item" href="#">Java</a>
                  <a class="dropdown-item" href="#">Javascript</a>
                  <a class="dropdown-item" href="#">Others</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0" href="#">Meme</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0" href="#">Submit Code</a>
              </li>

              <li class="nav-item">
                <a class="nav-link py-0" href="#">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link py-0" href="#">Login</a>
              </li>

            </ul>
          </div>
        </nav>

       <div class="container">
           <h1 class="text-center mt-2">Get Source Code For Free</h1>
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
