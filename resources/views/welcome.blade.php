<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAYBOOK</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="assets/fontawesome-free-5.15.1-web/css/all.min.css"> --}}
    <style>
    .bg
    {
        width: 100%;
        height: 100%;
        background-image: url("/admin/assets/img/image3.jpg");
        background-repeat: repeat;
        background-size: cover;
    }
    </style>
</head>
<body>

    <!-- Sidebar For Smartphone-->
        <div class="sidebar-right" id="sidebar">
            <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()">
                <i class="fa fa-times"></i>
            </button>
            <a href="#" class="active">Home</a>
            <a href="#">Show</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>

    <!--End Of Sidebar For Smartphone-->
    <div class="bg">

        <!-- Navbar-->

        <nav class="navbar justify-content-between">
            <div class="logo">
                <a href="">
                    <img src="{{ asset('/admin/assets/img/logo.png') }}" height="50px">
                </a>
            </div>
            <div class="menu">
                <a href="#">Home</a>
                <a href="#">Show</a>
                <a href="#">About</a>
                <a href="{{ route('login') }}" class="active">Login</a>
                <button class="btn btn-primary btn-lg-icon icon" onclick="sidebarOpen()">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- End Of navBar -->

        <!-- Content -->
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-around content">
                <div class="content-left">
                    <br><br><br><br>
                    <h1 class="text-blue">PLAYBOOK</h1>
                    <div class="description">
                        <p>
                            Buku ya buku, jembatan ya jembatan <br>
                            Bukan buku adalah jembatan
                        </p>
                    </div>
                    <br>
                    <a href="#" class="btn btn-primary btn-lg">GET STARTED</a>
                </div>

                <div class="image1">
                    <img src="{{ asset('/admin/assets/img/home.svg') }}" alt="" height="450px">
                </div>
            </div>
        </div>

        <!-- End Of Content-->
    </div>
</body>
<script src="assets/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script src="assets/js/all.js"></script>
</html>