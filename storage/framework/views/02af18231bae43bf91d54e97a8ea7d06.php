<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Commerce </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dash Admin</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">lena</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar  navbar-light">
                    <a href="" class="navbar-brand mx-4 mb-3">
                        <h3 class="" style="color: black;">
                            Dashboard
                        </h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <div
                                class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <?php if(Auth::guard('admin')->check()): ?>
                                <h6 class="mb-0"><?php echo e(Auth::guard('admin')->user()->name); ?></h6>
                            <?php endif; ?>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="/" class="nav-item nav-link ">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Users
                            </a>
                            <div id="focus" class="dropdown-menu bg-transparent border-0">
                                <a href="<?php echo e(route('users.index')); ?>" class="dropdown-item">All Users</a>
                                <a href="<?php echo e(route('users.create')); ?>" class="dropdown-item">Add New Users</a>
                            </div>
                        </div>
                        <div id="focus" class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fab fa-product-hunt"></i>
                                Product
                            </a>
                            <div id="focus" class="dropdown-menu bg-transparent border-0">
                                <a href="<?php echo e(route('products.index')); ?>" class="dropdown-item">All Product</a>
                                <a href="<?php echo e(route('products.create')); ?>" class="dropdown-item">Add New Product</a>
                            </div>
                        </div>
                        <div id="focus" class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-th" aria-hidden="true"></i>
                                Category
                            </a>
                            <div id="focus" class="dropdown-menu bg-transparent border-0">
                                <a href="<?php echo e(route('categories.index')); ?>" class="dropdown-item">All Category</a>
                                <a href="<?php echo e(route('categories.create')); ?>" class="dropdown-item">Add New Category</a>
                            </div>
                        </div>
                        <div id="focus" class="nav-item dropdown">
                            <a href="<?php echo e(route('wishlist')); ?>" class="nav-link nav-link">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                                Wishlist
                            </a>
                            <div id="focus" class="nav-item dropdown">
                                <a href="<?php echo e(route('cart')); ?>" class="nav-link nav-link">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Cart
                                </a>
                            </div>

                            <a href="<?php echo e(route('order')); ?>" class="nav-item nav-link">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                Order
                            </a>
                            <div class="nav-item dropdown">
                                <a href="<?php echo e(route('message')); ?>" class="nav-link nav-link">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    Message
                                </a>
                            </div>
                            <a href="<?php echo e(route('logout')); ?>" class="nav-item nav-link">
                                <i class="fas fa-sign-in-alt me-2"></i>
                                Logout
                            </a>
                        </div>
                </nav>
            </div>
        </nav>
    </div>
    <div class="content">
        <nav id="navbar" class="navbar navbar-expand  navbar-light sticky-top px-4 py-0">
            <a href="#" style="color: black" class="sidebar-toggler flex-shrink-0 ">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#" style="padding-left: 7px">
                <span class="d-none d-lg-inline-flex" style="color: black">Welcome to E-commerce</span>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div id="focus"
                         class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="<?php echo e(route('message')); ?>" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <?php if(Auth::guard('admin')->check()): ?>
                            <span class="d-none d-lg-inline-flex"><?php echo e(Auth::guard('admin')->user()->name); ?></span>
                        <?php endif; ?>
                    </a>
                    <div id="focus"
                         class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">My Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<!-- JavaScript Libraries -->
<script src="<?php echo e(asset('https://code.jquery.com/jquery-3.4.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/chart/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/waypoints/waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/tempusdominus/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Template Javascript -->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/components/layout.blade.php ENDPATH**/ ?>