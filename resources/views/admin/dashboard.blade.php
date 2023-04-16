<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/argon.css?v=1.2.0') }}" type="text/css">

    <style>
        .notification-circle {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            background: linear-gradient(180deg, #fb6340 0, #f56036 100%) !important;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: 15px;
            right: 25px;
            z-index: 10;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <!-- Sidenav -->
    <x-admin.sidebar />
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <x-admin.topnav />
        <!-- Header -->
        <div class="header bg-primary pb-6" style="height:100vh">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('admin/post/add') }}" class="btn btn-sm btn-neutral">Add New Post</a>
                            <a href="{{ url('admin/category/add') }}" class="btn btn-sm btn-neutral">Add New Category</a>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Posts</h5>
                                            <span class="h2 font-weight-bold mb-0">{{ $num_of_posts }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <?php
                                            $total_posts_week_ago = $totals_weeks_ago[0]->total_posts_week_ago;
                                            $up_by = ($total_posts_week_ago/100)*$num_of_posts
                                        ?>
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$up_by}}%</span>
                                        <span class="text-nowrap">Since last week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">

                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Comments</h5>
                                            <span class="h2 font-weight-bold mb-0">{{ $num_of_comments }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <?php
                                            $total_comments_week_ago = $totals_weeks_ago[0]->total_comments_week_ago;
                                            $up_by = ($total_comments_week_ago/100)*$num_of_comments
                                        ?>
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$up_by}}%</span>
                                        <span class="text-nowrap">Since last week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Replies</h5>
                                            <span class="h2 font-weight-bold mb-0">{{ $num_of_replies }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <?php
                                            $total_replies_week_ago = $totals_weeks_ago[0]->total_replies_week_ago;
                                            $up_by = ($total_replies_week_ago/100)*$num_of_replies
                                        ?>
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$up_by}}%</span>
                                        <span class="text-nowrap">Since last week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Categories</h5>
                                            <span class="h2 font-weight-bold mb-0">{{ $num_of_categories }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                <i class="ni ni-chart-bar-32"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <?php
                                            $total_categories_week_ago = $totals_weeks_ago[0]->total_categories_week_ago;
                                            $up_by = ($total_categories_week_ago/100)*$num_of_categories
                                        ?>
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$up_by}}%</span>
                                        <span class="text-nowrap">Since last week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../../assets/backend/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/backend/vendor/js-cookie/js.cookie.js"></script>
    <script src="../../assets/backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../assets/backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../../assets/backend/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../../assets/backend/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/backend/js/argon.js?v=1.2.0"></script>
</body>

</html>
