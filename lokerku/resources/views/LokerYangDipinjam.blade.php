<!doctype html>
<html lang="en">

<head>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body{
      font-family: 'Poppins';
      background-color: #F2F2F2 !important;
    }
    .angka-loker{
      font-size: 40px;
      font-weight: bold;
    }
    .btn-lihat{
      float: right;
      background: #D7816D;
      color: #FFFFFF;
      box-shadow: 3px 4px 6px 2px rgba(0, 0, 0, 0.1);
      border-radius: 20px;
    }
    .teks-visible{

      visibility: hidden;
    }
    .card{
      box-shadow: 3px 4px 6px 2px rgba(0, 0, 0, 0.1);
    }
    .jam-loker{
      font-size: 22px;
    }
    .navbar{
      background-color: #FFFFFF;
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

    <title>LokerKU | Loker Yang Dipinjam</title>
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand" href="/"><img width="140" height="50" src="/storage/images/logo.jpeg"></a>
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
<div class="container-fluid mt-3">
  <div class="container">
    <h4><b>Loker Yang Sedang Kamu Pinjam</b></h4>
    <p>Jika sudah habis jamnya mohon dikembalikan</p>
  </div>
  <div class="container d-flex justify-content-center">
    <div class="card">
      <div class="card-body mb-2">
      <form action="{{route('kembalikan')}}" method="post">
        <div class="container text-center">
      
          <div class="row">
        
            <div class="col align-self-center">
            @foreach($sewa as $item)
              <h5 class="text-left" style="font-weight: bold;">Nomor Loker</h5>
             @endforeach
            </div>
            <div class="col">
              
            </div>
            <div class="col">
            @foreach($sewa as $item)
              <span class="border angka-loker border-dark container-fluid rounded"> {{$item->nomor_loker}}</span>
              @endforeach
            </div>
          </div>

          <h6 class="text-left">{{Session::get('pengguna')['nama']}}</h6>
          <h6 class="text-left">{{Session::get('pengguna')['npm']}}</h6>
          <br>


        
            {{csrf_field()}}
            <div class="login-form">
            @foreach($sewa as $item)
            <input type="hidden" class="form-control" name="idhistory"  value="{{$item->idhistory}}">   
            @endforeach
            @foreach($sewa as $item)
            <input type="hidden" class="form-control" name="nomer_loker"  value="{{$item->nomor_loker}}">   
            @endforeach
            @foreach($sewa as $item)
            <input type="hidden" class="form-control" name="idpengguna"  value="{{Session::get('pengguna')['idpengguna']}}">   
            @endforeach
          <div class="row">
            <div class="col align-self-center">
              <h6 class="text-left">Jam Mulai</h6>
            </div>
            <div class="col">
            @foreach($sewa as $item)
              <h6 class="text-left">{{$item->waktu_mulai}}</h6>
              @endforeach
            </div>
            <div class="col">
              
            </div>
          </div>

          <div class="row">
            <div class="col align-self-center">
              <h6 class="text-left">Jam Selesai</h6>
            </div>
            <div class="col">
            @foreach($sewa as $item)
              <h6 class="text-left">{{$item->waktu_selesai}}</h6>
              @endforeach
            </div>
            <div class="col">
              
            </div>
          </div>

        </div>
        
        <p class="card-text teks-visible">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
        <div class="container mt-3">
          <div class="container-fluid">
            <button type="submit" onclick="" class="btn btn-lihat">Kembalikan</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>



</div>
</div>
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