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
      background: #E0AF70;
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

    <title>LokerKU | Data Loker</title>
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
      <h4><b>Pinjam Loker</b></h4>
      <p>Silahkan Mengisikan Data Berikut</p>
    </div>
    <div class="container d-flex justify-content-center">
      <div class="card">
        <div class="card-body mb-2">
          <div class="container text-center">
            <div class="row">
              <div class="col align-self-center">
                <h5 class="text-left" style="font-weight: bold;">Nomer Loker</h5>
              </div>
              <div class="col">
                
              </div>
              <div class="col">
                <span class="border angka-loker border-dark container-fluid rounded">{{$product['nomer_loker']}}</span>
              </div>
            </div>
  
            <br>
            <h6 class="text-left">{{Session::get('pengguna')['nama']}}</h6>
            <h6 class="text-left">{{Session::get('pengguna')['npm']}}</h6>
            <br>


            <div class="row">
              <div class="col align-self-center">
                <p>Jam Mulai</p>
              </div>
              <div class="col">
                <p>Jam Selesai</p>
              </div>
              <div class="col">
                
              </div>
            </div>
            <form action="{{route('sewaloker')}}" method="post">
              {{csrf_field()}}
              <input type="hidden" class="form-control" name="nama" placeholder="y" id="nama">    
              
              <input type="hidden" class="form-control" name="npm" placeholder="Masukkan NPM" id="npm">
              
              <input type="hidden" class="form-control" name="email" placeholder="Masukkan Email" id="email">
              
              <input type="hidden" class="form-control" name="nomerloker" placeholder="Masukkan Telp" id="nomorloker">
            
              
              <input type="hidden" class="form-control mb-3" name="idloker" placeholder="Masukkan Password" id="idloker">
             
              <input type="hidden" class="form-control mb-3" name="idpengguna" placeholder="Masukkan Password" id="idpengguna">
             
            <div class="row">
              <div class="col align-self-center">

                <input type="name" class="form-control mb-3" name="waktumulai" placeholder="Masukkan Password" id="waktu_mulai">
              </div>
              <h3>-</h3>
              <div class="col">
                <input type="name" class="form-control mb-3" name="waktuselesai" placeholder="Masukkan Password" id="waktu_selesai">
              </div>
              <div class="col">
                
              </div>
            </div>
         
            <p class="card-text text-left "><small class="text-muted">*Usahakan isi waktu sesuai kebutuhan</small></p>
          </div>
          
          <p class="card-text teks-visible">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
          <div class="container mt-3">
            <div class="container-fluid">
              <button onclick="" type="submit" class="btn btn-lihat">Pinjam</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <form action="{{route('sewaloker')}}" method="post">
    {{csrf_field()}}
<div class="login-form">
    <input type="hidden" class="form-control" name="nama" placeholder="y" id="nama">    
    <br>
    <input type="hidden" class="form-control" name="npm" placeholder="Masukkan NPM" id="npm">
    <br>
    <input type="hidden" class="form-control" name="email" placeholder="Masukkan Email" id="email">
    <br>
    <input type="hidden" class="form-control" name="nomerloker" placeholder="Masukkan Telp" id="nomorloker">
  
    <br> 
    <input type="hidden" class="form-control mb-3" name="idloker" placeholder="Masukkan Password" id="idloker">
    <br> 
    <input type="hidden" class="form-control mb-3" name="idpengguna" placeholder="Masukkan Password" id="idpengguna">
    <br> 

    <div class="d-grid gap-2"> 
        <button onclick="" class="btn mt-2 mb-2 btn-start mt-4 btn-masuk" type="submit">Daftar</button>
    </div>
</div>

</form>
  <script type="text/javascript"> 
          
    var now     = new Date(); 
    var year    = now.getFullYear();
    var month   = now.getMonth()+1; 
    var day     = now.getDate();
    var hour    = now.getHours();
    var selesai = now.getHours()+3;
    var minute  = now.getMinutes();
    var second  = now.getSeconds(); 
    if(month.toString().length == 1) {
         month = '0'+month;
    }
    if(day.toString().length == 1) {
         day = '0'+day;
    }   
    if(hour.toString().length == 1) {
         hour = '0'+hour;
    }
    if(minute.toString().length == 1) {
         minute = '0'+minute;
    }
    if(second.toString().length == 1) {
         second = '0'+second;
    }   
    var mulai = hour+'.'+minute;   
    var selesai = selesai+'.'+minute;  
  

document.getElementById("nama").setAttribute('value','{{Session::get('pengguna')['nama']}}');
document.getElementById("npm").setAttribute('value','{{Session::get('pengguna')['npm']}}');
document.getElementById("email").setAttribute('value','{{Session::get('pengguna')['email']}}');
document.getElementById("nomorloker").setAttribute('value','{{$product['nomer_loker']}}');
document.getElementById("waktu_mulai").setAttribute('value',mulai);
document.getElementById("waktu_selesai").setAttribute('value',selesai);
document.getElementById("idloker").setAttribute('value','{{$product['idloker']}}');
document.getElementById("idpengguna").setAttribute('value','{{Session::get('pengguna')['idpengguna']}}');
document.getElementById("tesmulai").setAttribute('value',mulai);
</script>
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