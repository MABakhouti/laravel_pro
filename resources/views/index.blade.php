<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Argon - Bloging site</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/brand/favicon.png" type="image/png">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/simple-line-icons.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" type="text/css" media="all">

    <!-- aos scroll plugin -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        <!-- header -->
        <header class="header-personal">
            <div class="container-xl header-top">
                <div class="row align-items-center">

                    <div class="col-4 d-none d-md-block d-lg-block">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                        <!-- site logo -->
                        <a class="navbar-brand" href="personal.html"><img
                                src="assets/frontend/images/other/avatar-lg.png" alt="logo" /></a>
                        <a href="/" class="d-block text-logo">Argon<span class="dot">.</span></a>
                        <span class="slogan d-block">Professional Writer & Personal Blogger</span>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <!-- header buttons -->
                        <div class="header-buttons float-md-end mt-4 mt-md-0">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button ms-2 float-end float-md-none">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">

                    <div class="collapse navbar-collapse justify-content-center centered-nav">
                        <!-- menus -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="/">Home</a>
                            </li>
                            @foreach ($categories as $key => $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('post/categories') }}/{{ $category->id }}">{{ $category->name }}</a>
                                </li>
                            @endforeach

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <section class="hero-carousel">

            <div class="row post-carousel-featured post-carousel">

                <!-- post -->
                <div class="post featured-post-md">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge"> Vacation</a>
                        <h4 class="post-title"><a href=''>Another movie title</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">2021-09-18 12:46:22</li>
                        </ul>
                    </div>
                    <a href=''>
                        <div class="thumb rounded">
                            <div class="inner data-bg-image"
                                data-bg-image="assets/frontend/images/posts/featured-md-4.jpg"></div>
                        </div>
                    </a>
                </div>

                <!-- post -->
                <div class="post featured-post-md">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge"> Web Development</a>
                        <h4 class="post-title"><a href=''>Test</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">2021-09-18 12:46:54</li>
                        </ul>
                    </div>
                    <a href=''>
                        <div class="thumb rounded">
                            <div class="inner data-bg-image"
                                data-bg-image="assets/frontend/images/posts/featured-md-4.jpg"></div>
                        </div>
                    </a>
                </div>

                <!-- post -->
                <div class="post featured-post-md">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge"> Web Development</a>
                        <h4 class="post-title"><a href=''>Oceans</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">2021-09-18 12:46:53</li>
                        </ul>
                    </div>
                    <a href=''>
                        <div class="thumb rounded">
                            <div class="inner data-bg-image"
                                data-bg-image="assets/frontend/images/posts/featured-md-4.jpg"></div>
                        </div>
                    </a>
                </div>

                <!-- post -->
                <div class="post featured-post-md">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge"> Inspiration</a>
                        <h4 class="post-title"><a href=''>This is test title</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">2021-09-18 12:46:52</li>
                        </ul>
                    </div>
                    <a href='post-details.php.html'>
                        <div class="thumb rounded">
                            <div class="inner data-bg-image"
                                data-bg-image="assets/frontend/images/posts/featured-md-4.jpg"></div>
                        </div>
                    </a>
                </div>

                <!-- post -->
                <div class="post featured-post-md">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge"> Fashion</a>
                        <h4 class="post-title"><a href='/post-details.html'>Cumque facere odio s</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">2021-09-18 12:46:51</li>
                        </ul>
                    </div>
                    <a href=''>
                        <div class="thumb rounded">
                            <div class="inner data-bg-image"
                                data-bg-image="assets/frontend/images/posts/featured-md-4.jpg"></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- section main content -->
        <section class="main-content">
            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="row gy-4">
                            @foreach ($posts as $key => $post)
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-grid rounded bordered" data-aos="fade-up"
                                        data-aos-offset="220" data-aos-duration="1000">
                                        <div class="thumb top-rounded">
                                            <a href="category.html"
                                                class="category-badge position-absolute">{{ $post->categories->name }}</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href='{{ url("post/details/$post->id") }}'>
                                                <div class="inner">
                                                    @if ($post->image)
                                                        <img width='100%'
                                                            src='{{ asset("post_images/post_$post->id/$post->image") }}' />
                                                    @else
                                                        <img width='100%'
                                                            src='{{ asset('assets/frontend/images/posts/post-md-2.jpg') }}' />
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"><img
                                                            src="assets/frontend/images/other/author-sm.png"
                                                            class="author" alt="author" />Katen Doe</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    {{ date('d F Y', strtotime($post->created_at)) }}</li>
                                            </ul>
                                            <h5 class="post-title mb-3 mt-3">
                                                <a
                                                    href='{{ url("post/details/$post->id") }}'>{{ $post->post_title }}</a>
                                            </h5>
                                            <p class="excerpt mb-0">{{ $post->content }}</p>
                                        </div>
                                        <div class="post-bottom clearfix d-flex align-items-center">
                                            <div class="social-share me-auto">
                                                <button class="toggle-button icon-share"></button>
                                                <ul class="icons list-unstyled list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-pinterest"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-telegram-plane"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="far fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="more-button float-end">
                                                <a href='{{ url("post/details/$post->id") }}'><span
                                                        class="icon-options"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="widget rounded">
                                <div class="widget-about data-bg-image text-center"
                                    data-bg-image="assets/frontend/images/map-bg.png">
                                    <img src="assets/brand/blue.png" alt="logo" class="mb-4" />
                                    <p class="mb-4">Hello, We’re content writer who is fascinated by content fashion,
                                        celebrity and lifestyle. We helps clients bring the right content to the right
                                        people.</p>
                                    <ul class="social-icons list-unstyled list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-medium"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- widget categories -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Posts by categories</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">

                                    <ul class="list">
                                        @foreach ($categories as $key => $category)
                                            <li><a
                                                    href="{{ url('post/categories') }}/{{ $category->id }}">{{ $category->name }}</a><span>{{ count($category->posts) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- footer -->
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <!-- copyright text -->
                        <div class="col-md-4">
                            <span class="copyright">© 2021 argon. All rights reserved.</span>
                        </div>

                        <!-- social icons -->
                        <div class="col-md-4 text-center">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>

                        <!-- go to top button -->
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end"><i
                                    class="icon-arrow-up"></i>Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="assets/brand/blue.png" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="/">Home</a>
                </li>
                @foreach ($categories as $key => $category)
                    <li><a href="{{ url('post/categories') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>
    <script>
        $(function() {
            AOS.init();
        });
    </script>

</body>

</html>
