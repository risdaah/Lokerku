<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>LokerKU | Profil Pengguna</title>
</head>
<body>

       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img width="140" height="50" src="storage/images/logo.jpeg"></a>
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
                    </

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

<!-- container -->
<div class="container-fluid mt-5">
    <div class="container">
        <h4><b>Profil Pengguna</b></h4>

        <div class="login-form mt-4">
            <div class="mb-3">
                <form action="{{route('editbaru')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" class="form-control" name="idpengguna" placeholder="y" id="nama">    
                    
                    <input type="hidden" class="form-control" name="status" placeholder="Masukkan NPM" id="npm">

            <label for="exampleFormControlInput1" class="form-label">Nama Pengguna</label>
            <input type="username" class="form-control shadow-none" name="nama-pengguna" value="{{Session::get('pengguna')['nama']}}" style="border: none; box-shadow: none; background-color: #F2F2F2;" placeholder="">
            <hr width="100%" align="left">

            <label for="exampleFormControlInput1" class="form-label">NPM Pengguna</label>
             <input type="username" class="form-control shadow-none" name="npm-pengguna" value="{{Session::get('pengguna')['npm']}}" style="border: none; box-shadow: none; background-color: #F2F2F2;" placeholder="">
            <hr width="100%" align="left">

            <label for="exampleFormControlInput1" class="form-label">Email UPN Pengguna</label>
             <input type="username" class="form-control shadow-none" name="email-pengguna" value="{{Session::get('pengguna')['email']}}" style="border: none; box-shadow: none; background-color: #F2F2F2;" placeholder="">
            <hr width="100%" align="left">

            <label for="exampleFormControlInput1" class="form-label">Telp Pengguna</label>
            <input type="username" class="form-control shadow-none" name="telp-pengguna" value="{{Session::get('pengguna')['telp']}}" style="border: none; box-shadow: none; background-color: #F2F2F2;" placeholder="">
            <hr width="100%" align="left">

            <a href="{{URL::to('LogoutUser')}}" type="button" class="btn btn-lihat mt-3">Logout</a>
           
            <button onclick="" type="submit" style="background-color: #D7816D" class="btn btn-lihat mt-3 mr-3">Simpan</button>
            </div>
        </div>
        </form>
        <script type="text/javascript"> 
       
          
        
        document.getElementById("nama").setAttribute('value','{{Session::get('pengguna')['idpengguna']}}');
        document.getElementById("npm").setAttribute('value','{{Session::get('pengguna')['status']}}');
        
        </script>
    </div>
    

</div>
<!-- end container -->


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