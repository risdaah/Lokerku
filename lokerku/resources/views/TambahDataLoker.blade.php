<!doctype html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            font-family: 'Poppins';
            background-color: #F2F2F2 !important;
        }

        .navbar{
            background-color: #FFFFFF;
        }
        .btn-lihat{
            float: left;
            background: #D7816D;
            color: #FFFFFF;
            box-shadow: 3px 4px 6px 2px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
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

<title>LokerKU | TambahLoker</title>
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
                    <b><a class="nav-link" href="/HomepageAdmin">Home</a></b>
                </li>

                <li class="nav-item">
                    <b><a class="nav-link" href="/DataLoker">Data Loker</a></b>
                </li>

                <li class="nav-item">
                    <b><a class="nav-link" href="/RiwayatSewaLoker">Riwayat</a></b>
                </li>

                <li class="nav-item">
                    <b><a class="nav-link" href="/ProfilAdmin">Profil</a></b>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<!-- konten -->

<!-- form login -->
<section class="container-fluid d-flex">
    <div class="w-100 h-100">
      <div class="row justify-content-center align-items-center" style="margin-top: 90px">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
          <div class="header">
            <h1 class="login-title">Tambah Loker</h1>
        </div>
        <div class="login-form">
            <form action="{{route('tambahloker')}}" method="post">
                {{csrf_field()}}
                    <input type="username" class="form-control" name="nomorloker" style="border: none; box-shadow: none; background-color: #F2F2F2;" placeholder="Nomor Loker">
                    <hr>
                    <div class="d-grid gap-2">
                    <button class="btn mt-2 mb-2 btn-start mt-4 btn-masuk" style="background-color: #0D3A59; color: white;" type="submit">Tambah</button>
                    </div>
            </form>
      </div>
  </div>
</div>

</div>

</section>

<!-- end form login -->

<!-- end konten -->



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