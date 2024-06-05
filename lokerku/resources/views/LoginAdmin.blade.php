<!doctype html>
<html lang="en">
<head>

  <style>
    
    .logo-login{

      margin-left: 20px;
    }
  
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Font Googles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
  <!-- FontAwesome Cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <title>LokerKU | Login Admin</title>
</head>
<body>

    {{-- @if(session()->has('failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session()->get('failed')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close>
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif --}}

  <!-- form login -->
  <section class="container-fluid d-flex">
    <div class="w-100 h-100">
      <a class="logo-login" href="#"><img width="140" height="50" src="storage/images/logo.jpeg"></a>
      <div class="row justify-content-center align-items-center" style="margin-top: 90px">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
          <div class="header">
            <h1 class="login-title">Login Admin</h1>
          </div>
          <form action="{{route('loginprosesadmin')}}" method="post">
            {{csrf_field()}}
          <div class="login-form">
            <input type="username" class="form-control shadow-none" name="username" style="border: none;" placeholder="Masukkan Username Admin">
            <hr>
            <input type="password" class="form-control shadow-none" name="password" style="border: none;" placeholder="Masukkan Password">
            <hr>
            <div class="d-grid gap-2">
                <button onclick="" class="btn mt-2 mb-2 btn-start mt-4 btn-masuk" type="submit">Masuk</button>
            </div>
          </form>  
            <br>
          </div>
        </div>
      </div>

    </div>
   
  </section>

  <!-- end form login -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
</html>