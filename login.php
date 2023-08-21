<?php 
include 'koneksidatabase.php';
if(isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];

  // Query untuk memilih tabel
  // query untuk mencari data dgn yg sesuai dgn user & password yg di input
  $cek_data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
  $hasil = mysqli_fetch_array($cek_data);
  $status = $hasil['status'];
  $login_user = $hasil['username'];
  $row = mysqli_num_rows($cek_data);

  // Pengecekan Kondisi Login Berhasil/Tidak
    if ($row > 0) {
        session_start();   
        $_SESSION['login_user'] = $login_user;

        if ($status == 'admin') {
          header('location: homepage_admin.php');
        }elseif ($status == 'user') {
          header('location: homepage_user.php'); 
        }
    }else{
      echo "<script>alert('Username / Password Yang Anda Masukkan Salah!');</script>";
      echo "<script>location= 'login.php'</script>";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">

    <title>SOLONG MINI KOPI</title>
  </head>

  <body>
      <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="Gambar/mieaceh.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"><span class="font-weight-bold">SOLONG MINI KOPI</span></h1>
                <hr>
                <p class="lead font-weight-bold">Jalan Lampineung No.23 Tungkop, Banda Aceh <br></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Gambar/kopiespresso.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Kopi Gayo</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Gambar/roticanai.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Roti Canai</h1>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
  <br>

  <!-- Form Login -->
  <div class="container">
      <h4 class="text-center">FORM LOGIN</h4>
      <hr>
      <form method="POST" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
              </div>
              <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
          </div>
        </div>
        <div class="mb-3" >
          <small><a href="register.php" class="text-dark">Belum Memiliki Akun ? Daftar Akun !</a></small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
      </form>

      <!--Footer-->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="address">
            <strong></strong><i class="fa-solid fa-location-dot"></i> Jalan Lampineung No.23 Tungkop, Banda Aceh</p>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="Gambar/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="Gambar/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="Gambar/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>