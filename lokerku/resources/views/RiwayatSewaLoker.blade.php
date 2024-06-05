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
            font-size: 16px;
            font-weight: bold;
        }
        .btn-lihat{
            float: right;
            background: #D7816D;
            color: #FFFFFF;
            box-shadow: 3px 4px 6px 2px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }
        .card{
            box-shadow: 3px 4px 6px 2px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
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

    <title>LokerKU | Riwayat sewa Loker</title>
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

    <div class="container-fluid">
      <div class="container mt-3">
        <h4>Riwayat Sewa Loker</h4>
      </div>

      <div  class="container mt-3">
        
        <table class="table table-hover table-bordered">
          <tbody>
            <tr class="table-active">
              <th scope="row" class="table-active"><b> Nomer Loker </b></th>
			        <td class="table-active"><b> Nama Peminjam </b></td>
					<td class="table-active"><b> NPM </b></td>
              <td class="table-active"><b> Status </b></td>
            </tr>
            <?php if(!empty($sewalokers)){ ?>

                @foreach($sewalokers as $riwayat)
            <tr>
              <th scope="row"><?php echo $riwayat['nomor_loker'] ?></th>
              <td><?php echo $riwayat['nama_pengguna'] ?></td>
			        <td><?php echo $riwayat['npm'] ?></td>
							<td><?php echo $riwayat['status'] ?></td>
            </tr>
            @endforeach

            <?php } ?>
          </tbody>
        </table>

      </div>

    </div>


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