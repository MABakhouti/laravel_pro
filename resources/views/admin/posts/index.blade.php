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
    <link rel="icon" href="../../assets/backend/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/backend/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet"
        href="../../assets/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../../assets/backend/css/argon.css?v=1.2.0" type="text/css">
</head>

<style>
    .notification-bell-wrapper {
        /* position:relative; */
    }

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

<body>
    <!-- Sidenav -->
    <x-admin.sidebar />
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <x-admin.topnav />
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Posts</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('admin/post/add') }}" class="btn btn-sm btn-neutral">Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Posts</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="sort" data-sort="name">Post Title</th>
                                        <th scope="col" class="sort" data-sort="budget">Post content</th>
                                        <th scope="col" class="sort" data-sort="Comments">Comments</th>
                                        <th scope="col" class="sort" data-sort="Comments">Featured</th>
                                        <th scope="col" class="sort" data-sort="Status">Category</th>
                                        <th scope="col" class="sort" data-sort="completion">Action</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($posts as $key => $post)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar  mr-3">
                                                    @if ($post->image)
                                                        <img width='60' height='48' src='{{ asset("post_images/post_$post->id/$post->image") }}' />
                                                    @else
                                                        <img width='60' height='48' src='{{ asset('assets/frontend/images/posts/featured2.jpg') }}' />
                                                    @endif
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{ $post->post_title }}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            {{ $post->content }}
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class=""></i>
                                                <span class="status">0</span>
                                            </span>
                                        </td>
                                        <td style="column-width: 50px;">
                                            <span class="badge badge-dot mr-4">
                                                @if ($post->is_featured)
                                                    <i class="bg-success"></i>
                                                    <span class="status">Yes</span>
                                                @else
                                                    <i class="bg-danger"></i>
                                                    <span class="status">No</span>
                                                @endif
                                            </span>
                                        </td>
                                        <td style="column-width: 80px;">{{ $post->categories->name }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{ url('admin/post/edit') }}/{{ $post->id }}">Edit</a>
                                                    <a onclick="showConfirmationBox({{ $post->id }})" class="dropdown-item" href="#">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('post/markAsFeatured') }}/{{ $post->id }}">Mark as featured</a>
                                                    <a class="dropdown-item"
                                                        href="?action=mark-as-unfeatured&post-id=19">Mark as
                                                        unfeatured</a>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr> @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer
        py-4">
    <nav aria-label="...">
        <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                        target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative
                            Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                            class="nav-link" target="_blank">MIT License</a>
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
    <script src="../../assets/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- https://sweetalert2.github.io/ -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <style>
        #swal2-title {
            color: #5F74E3 !important;
        }
    </style>
    <script>
        function showConfirmationBox(postId) {
            Swal.fire({
                title: 'Are you sure you want to delete this post?',
                showCancelButton: true,
                confirmButtonText: 'yes',
                background: '#fff',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    // Swal.fire('Deleted!', '', 'success')
                    window.location = "{{ url('admin/post/delete') }}/" + postId;
                } else if (result.isDenied) {
                    Swal.fire('Changes are not Delete', '', 'info')
                }
            })
        }
    </script>

    </body>

</html>
