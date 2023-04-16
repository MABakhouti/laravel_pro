<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



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
    <link rel="icon" href="{{ asset('assets/backend/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/argon.css?v=1.2.0') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/froala/css/froala_editor.pkgd.min.css') }}" type="text/css">
    <style>
        #fr-logo {
            display: none;
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
        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 150px; background-image: url(../assets/backend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-6 order-xl-1">
                    <div class="card" style="height:550px">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit Category</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/category/update') }}/{{ $category->id }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <h6 class="heading-small text-muted mb-4">Category Information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Category
                                                    Name</label>
                                                <input type="text" name="category_name" class="form-control"
                                                    placeholder="Post Title" value="{{ $category->name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-10 mt-6">
                                            <div class="d-flex mt-3 justify-content-end">
                                                <a href="{{ url('admin/categories') }}"
                                                    class="btn btn-secondary">Back</a>
                                                <button type="submit" class="btn btn-success">Edit Category</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer pt-0 ">
                <div class="row align-items-center justify-content-lg-between ">
                    <div class="col-lg-6 ">
                        <div class="copyright text-center text-lg-left text-muted ">
                            &copy; 2020 <a href="https://www.creative-tim.com " class="font-weight-bold ml-1 "
                                target="_blank ">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end ">
                            <li class="nav-item ">
                                <a href="https://www.creative-tim.com " class="nav-link " target="_blank ">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://www.creative-tim.com/presentation " class="nav-link "
                                    target="_blank ">About Us</a>
                            </li>
                            <li class="nav-item ">
                                <a href="http://blog.creative-tim.com " class="nav-link " target="_blank ">Blog</a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md "
                                    class="nav-link " target="_blank ">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../../assets/backend/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/plugins/froala/js/froala_editor.pkgd.min.js"></script>
    <script src="../../assets/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js "></script>
    <script src="../../assets/backend/vendor/js-cookie/js.cookie.js "></script>
    <script src="../../assets/backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js "></script>
    <script src="../../assets/backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js "></script>
    <!-- Argon JS -->
    <script src="../../assets/backend/js/argon.js?v=1.2.0 "></script>

    <script>
        var editor = new FroalaEditor('#postContent', {
            heightMin: 350
        });
    </script>
</body>

</html>
