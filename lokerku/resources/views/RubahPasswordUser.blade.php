<!doctype html>
<html lang="en">
<head>

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

  <title>LokerKU | Ubah Password User</title>
</head>
<body>

  <!-- form login -->
  <section class="login d-flex">
    <div class="login-right w-100 h-100">
      
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
          <div class="header">
            <h1 class="login-title text-center">Lupa Password</h1>
          </div>
          <form action="{{route('rubahpassworduser')}}" method="post">
            {{csrf_field()}}
          <div class="login-form">
            <input type="npm" class="form-control" name="password" style="border: none;" placeholder="Masukkan Password Baru">
            <input type="hidden" class="form-control" name="data" style="border: none;" value="{{$data['idpengguna']}}">
            <hr>
            <div class="d-grid gap-2">
              <button class="btn mt-2 mb-2 btn-start mt-4 btn-masuk" type="submit">Simpan</button>
            </div>
          </form>
          </div>
        </div>
      </div>

    </div>
    <div class="login-left w-50 h-100">
      <img class="banner-login" src="storage/images/banner login 1.png" alt="">

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