<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/favicon.ico">
    <title>Relatos, Colaboradores y Recetas</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/mediumish.css" rel="stylesheet">
</head>

<body>

    <!-- Begin Nav
================================================== -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="logo">
            </a>
            <!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Stories <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Author</a>
                    </li>
                </ul>
                <!-- End Menu -->
                <!-- Begin Search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                            <path
                                d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z">
                            </path>
                        </svg></span>
                </form>
                <!-- End Search -->
            </div>
        </div>
    </nav>
    <!-- End Nav
================================================== -->

    <!-- Begin Site Title
================================================== -->
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Training Twill</h1>
            <p class="lead">
                Relatos, Colaboradores y Recetas
            </p>
        </div>
        <!-- End Site Title
================================================== -->

        <!-- Begin Featured
	================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Featured</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">

                @forelse ($recetas as $receta)
                    <!-- begin post -->
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5 wrapthumbnail">
                                <a href="{{ route('receta.show', $receta->slug) }}">
                                    <div class="thumbnail" 
                                         style="background-image:url( {{ $receta->image('cover', 'default', ['w' => 900, 'fit' => null]) }}">
                                    </div>                
                                </a>
                            </div>
                            <div class="col-md-7">
                                <div class="card-block">
                                    <h2 class="card-title"><a href="#">{{ $receta->title }}</a></h2>
                                    <h4 class="card-text">{{ $receta->subtitle }}</h4>
                                    <div class="metafooter">
                                        <div class="wrapfooter">
                                            <span class="meta-footer-thumb">
                                                <a href="#"><img class="author-thumb"
                                                        src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                        alt="Sal"></a>
                                            </span>
                                            <span class="author-meta">
                                                <span class="post-name"><a href="#">{{$receta->owner}}</a></span><br />
                                                <span class="post-date">{{ $receta->created_at->format('M d') }}</span><span class="dot"></span><span
                                                    class="post-read">{{ $receta->created_at->diffForHumans() }}</span>
                                            </span>
                                            <span class="post-read-more"><a href="#" title="Read Story"><svg
                                                        class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                                        <path
                                                            d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                            fill-rule="evenodd"></path>
                                                    </svg></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end post -->
                @empty
                    <p>No hay publicaciones</p>
                @endforelse
            </div>
        </section>
        <!-- End Featured
	================================================== -->

        <!-- Begin List Posts
	================================================== -->
        <section class="recent-posts">
            <div class="section-title">
                <h2><span>All Stories</span></h2>
            </div>
            <div class="card-columns listrecent">

                <!-- begin post -->
                <div class="card">
                    <a href="#">
                        <img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="#">Autumn doesn't have to be nostalgic, you know?</a>
                        </h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="#"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="#">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="#" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

            </div>
        </section>
        <!-- End List Posts
	================================================== -->

        <!-- Begin Footer
	================================================== -->
        <div class="footer">
            <p class="pull-left">
                Copyright &copy; {{ date('Y') }} Your Website Name
            </p>
            <p class="pull-right">
                Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
            </p>
            <div class="clearfix">
            </div>
        </div>
        <!-- End Footer
	================================================== -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>