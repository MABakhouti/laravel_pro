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
    <link rel="icon" href="{{ asset('../../assets/backend/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('../../assets/backend/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet"
        href="{{ asset('../../assets/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('../../assets/backend/css/argon.css?v=1.2.0') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('../../assets/plugins/froala/css/froala_editor.pkgd.min.css') }}"
        type="text/css">
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
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 150px; background-image: url(../assets/backend/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-11 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit Post</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/post/update') }}/{{$post->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <h6 class="heading-small text-muted mb-4">Post information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Post
                                                    Title</label>
                                                <input type="text" name="post_title"
                                                    value="{{ $post->post_title }}" class="form-control"
                                                    placeholder="Post Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Post
                                                    Category</label>
                                                <select name="cat_id" class="form-control">
                                                    @foreach ($categories as $category)
                                                        @if ($post && $post->categories && $category->id == $post->categories->id)
                                                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @else
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4 ">
                                    <div class="form-group ">
                                        <label class="form-control-label ">Post Content</label>
                                        <textarea name="post_content" rows="19" class="form-control " placeholder="Enter post title">{{ $post->content }}</textarea>
                                    </div>
                                </div>
                                <div class="pl-lg-4 ">
                                    <label class="form-control-label ">Upload Post image</label>
                                    <div class="input-group pb-3">
                                        <input type="file" name="image" class="form-control"
                                            id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                            aria-label="Upload">
                                    </div>
                                    @if ($post->image)
                                        <img width='150' height='100'
                                            src='{{ asset("post_images/post_$post->id/$post->image") }}' />
                                    @else
                                        <img width='150' height='100'
                                            src='{{ asset('assets/frontend/images/posts/featured2.jpg') }}' />
                                    @endif
                                </div>
                                <div class="d-flex mt-3 justify-content-end">
                                    <a href="" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-success">Update Post</button>
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
    <script src="{{ asset('../assets/backend/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/froala/js/froala_editor.pkgd.min.js') }}"></script>
    <script src="{{ asset('../assets/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../assets/backend/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('../assets/backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('../assets/backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('../assets/backend/js/argon.js?v=1.2.0') }}"></script>

    <script>
        var editor = new FroalaEditor('#postContent', {
            heightMin: 350
        });
    </script>
</body>

</html>
