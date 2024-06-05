<!doctype html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            font-family: 'Poppins';
            background-color: #F2F2F2 !important;
        }
        .teks-visible{
            visibility: hidden;
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

    <title>LokerKU | DataLoker</title>
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
<div class="container-fluid mt-3">
  <div class="container">
      <h4><b>Loker</b></h4>
      <p>List Loker yang kosong dan terisi {{Session::get('pengguna')['status']}}</p>
      
    </div>
    <div class="container">
      <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="container">
            <div class="container-fluid">
                @if(Session::get('pengguna')['status'] == "kosong")
                <a href="#" type="button" onclick="myalert1()" class="btn btn-lihat1">Loker yang kamu pinjam</a>
                @else
                <a href="/LokerYangDipinjam/{{Session::get('pengguna')['idpengguna']}}" type="button" class="btn btn-lihat1">Loker yang kamu pinjam</a>
                @endif
            </div>
        </div>
        
    
    
    <?php if(!empty($lokers)){ ?>
        @foreach($lokers as $loker)

            @if($loker->status == "off")
            @elseif($loker->status == "tersedia" || "disewa")
            <div class="col">
                <div class="card-columns-fluid">
                <div class="card mt-3 bg-light" style = "width: 15rem; " >
                <div class="card-body">
                    <div class="container text-center">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <h6 style="font-weight: bold;">Nomer</h6>
                        </div>

                        <div class="col">
                            <span class="border angka-loker2 border-dark container-fluid rounded"><?php echo $loker['nomer_loker'] ?></span>
                        </div>


                        </div>
                        </div>

                        @if(Session::get('pengguna')['status'] == "menyewa" && $loker->status == "tersedia")
                        <p class="card-text">Loker Tersedia</p>
                        <a href="#" type="button" onclick="myalert()" class="btn btn-lihat">Pinjam</a>

                        @elseif(Session::get('pengguna')['status'] == "menyewa" && $loker->status == "tersedia")
                        <p class="card-text">Loker Tersedia</p>
                        <a href="#" type="button" onclick="myalert()" class="btn btn-lihat">Pinjam</a>

                        @elseif(Session::get('pengguna')['status'] == "menyewa" && $loker->status == "disewa")
                        <p class="card-text"> Loker sedang disewa, tersedia pukul <?php echo $loker['waktu_selesai'] ?></p>
                        {{-- <button href="" onclick="myalert()" type="hidden" style="font-size: 16px" class="btn btn-warning">Off</button> --}}

                        @elseif(Session::get('pengguna')['status'] == "menyewa" && $loker->status == "disewa")
                        <p class="card-text"> Loker sedang disewa, tersedia pukul <?php echo $loker['waktu_selesai'] ?></p>
                        {{-- <button href="" onclick="myalert()" type="hidden" style="font-size: 16px" class="btn btn-warning">Off</button> --}}

                        @elseif(Session::get('pengguna')['status'] == "kosong" && $loker->status == "disewa")
                        <p class="card-text"> Loker sedang disewa, tersedia pukul <?php echo $loker['waktu_selesai'] ?></p>
                        {{-- <button href="" type="hidden" style="font-size: 16px" class="btn btn-warning">Off</button> --}}

                        @elseif(Session::get('pengguna')['status'] == "kosong" && $loker->status == "disewa")
                        <p class="card-text"> Loker sedang disewa, tersedia pukul <?php echo $loker['waktu_selesai'] ?></p>
                        {{-- <button href="" type="hidden" style="font-size: 16px" class="btn btn-warning">Off</button> --}}

                        @elseif(Session::get('pengguna')['status'] == "kosong" && $loker->status == "tersedia")
                        <p class="card-text">Loker Tersedia</p>
                        <a href="/DetailSewaLoker/{{$loker['idloker']}}" type="button" class="btn btn-lihat">Pinjam</a>

                        @elseif(Session::get('pengguna')['status'] == "kosong" && $loker->status == "tersedia")
                        <p class="card-text">Loker Tersedia</p>
                        <a href="/DetailSewaLoker/{{$loker['idloker']}}" type="button" class="btn btn-lihat">Pinjam</a>
                      
                        {{-- <a href="/" type="button" class="btn btn-warning">Pinjam</a> --}}
                        
                        @else
                  
                        
                      
                        
                        @endif
                        <script>
                            function myalert() {
                                alert("Tidak Boleh Meminjam Loker Lebih Dari 1 Di Satu Waktu");
                            }
                            function myalert1() {
                                alert("Silahkan Pinjam Loker Dahulu!");
                            }
                        </script>
                    </div>  
                 
                </div>
            </div>
            </div>
            @endif


        @endforeach
    <?php } ?>
 
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