<!doctype html>
<html lang="en">

<head>

    <style>

        .banner-home{
            background-image: url("storage/images/banner home.png")
        }

    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Googles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <!-- FontAwesome Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>LokerKU | Homepage</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img width="140" height="50" src="storage/images/logo.jpeg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <b><a class="nav-link" href="/HomepageUser">Home</a></b>
                    </li>

                    <li class="nav-item">
                        <b><a class="nav-link" href="/HomepageUser">About</a></b>
                    </li>

                    <li class="nav-item">
                        <b><a class="nav-link" href="/ListLoker">List Loker</a></b>
                    </li>

                    <li class="nav-item">
                        <b><a class="nav-link" href="/ProfilUser">Profil</a></b>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- container -->

    <div class="banner-home">
        <h1 class="text-center font-weight-bold justify-content-center" style="color: #ffff;">Halo! {{Session::get('pengguna')['nama']}}</h1>
    </div>


    <!-- end container -->

    <!-- Selection-->
    <div class="features" id="features">
        <div class="container">
            <h2 class="text-center font-weight-bold">Tentang Kami</h2>
        </div>
    </div>

    <div class="selection">
        <div class="container">
            <div class="row d-flex justify-content-center">

                <div class="card-columns">

                    <div class="col-md-12">
                        <div class="card">
                            <img src="storage/images/gambar 1.jpg" alt="images" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-titles font-weight-bold" style="color :#D1756B;">Mudah</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                </p>
                                <a href="" class="btn btn-start d-flex justify-content-center ">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <img src="storage/images/gambar 2.jpg" alt="images" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-titles font-weight-bold" style="color :#D7816D;">Efisien</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                </p>
                                <a href="" class="btn btn-start d-flex justify-content-center ">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <img src="storage/images/gambar 3.jpg" alt="images" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-titles font-weight-bold" style="color :#E0AF6F;">Menarik</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                </p>
                                <a href="" class="btn btn-start d-flex justify-content-center ">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Selection-->

    <!-- Footer -->
    <section class="footer">
        <!-- Footer -->
        <footer class="text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <h3>Lorem ipsum dolor</h3>
                    <br>
                    <p class="d-flex justify-content-center align-items-center">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, consequuntur temporibus eveniet
                        dolores a, sequi quisquam ipsa id ex commodi aliquam, rem repudiandae officia dolorem laudantium
                        sapiente dignissimos maiores nihil.
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 copyright">
                © 2022 Copyright : 
                <a class="text-white" href="https://www.upnjatim.ac.id/">Universitas Pembangunan Nasional "Veteran" Jawa
                    Timur</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <!-- End Footer-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>