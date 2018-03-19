<?php
if( isset ($_POST['submit_btn'])){

$fname = $_POST['fname'];
$regid = $_POST['regid'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$cno = $_POST['cno'];
$department = $_POST['department'];
$samester = $_POST['samester'];



  $host_name='localhost';
  $db_username = 'root';
  $db_password = '';
  $db_name='sportsweekdb';

  $conn=mysqli_connect($host_name,$db_username,$db_password,$db_name);
  if(!$conn){
    die("coonection failed :" . mysqli_error($conn));
  }

  $query = "INSERT INTO student_registration(fname, regid, password, cpassword, email, cno, department, samester)
              VALUES ('$fname', '$regid', '$password', '$cpassword', '$email', '$cno', '$department', '$samester' ) ";
  $result = mysqli_query($conn, $query);
  if(!$result){
    die( "Query faild :" . mysqli_error($conn));
  }
  else {
    echo "created account Successfully";
  }

}
 ?>





<html>
  <head>
    <meta charset="utf-8">
    <title>Sports Week</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <section class="container-fluid">
      <article>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
          <div class="container">
          <ul class="navbar-nav ">
            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Games</a>
            <div class="dropdown-menu ">
              <a class="dropdown-item" href="#">Cricket</a>
              <a class="dropdown-item" href="#">Football</a>
              <a class="dropdown-item" href="#">Table Tenis</a>
              <a class="dropdown-item" href="#">Lodo</a>
              <a class="dropdown-item" href="#">Badminton</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> E-Games</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Call Of Duty</a>
            <a class="dropdown-item" href="#">Dota 2</a>
            <a class="dropdown-item" href="#">IGI</a>
            <a class="dropdown-item" href="#">Need For Speed</a>
            <a class="dropdown-item" href="#">Other</a>
          </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Songs</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">National Songs</a>
          <a class="dropdown-item" href="#">Movies Songs</a>
          <a class="dropdown-item" href="#">Qawali</a>
          <a class="dropdown-item" href="#">other</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Stage performance</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Darama</a>
        <a class="dropdown-item" href="#">Mimicry</a>
        <a class="dropdown-item" href="#">Funny performance</a>
        <a class="dropdown-item" href="#">other</a>
      </div>
    </li>
        </ul>
        </div>
        </nav>
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner  bg-secondary border border-danger ">
    <div class="carousel-item active container ">
      <img class="rounded mx-auto d-block"src="image/toplogo2.jpg" alt="Los Angeles" width= "70%" height= "350">
    </div>
    <div class="carousel-item container">
      <img class="rounded mx-auto d-block" src="image/toplogo.jpg" alt="Chicago" width= "70%" height= "350">
    </div>
    <div class="carousel-item container">
      <img class="rounded mx-auto d-block" src="image/toplogo1.jpg" alt="New York" width= "70%" height= "350">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
        </div>
        </div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark container-fluid">
        <div class="container">
            <ul class="navbar-nav ">
            <li class="nav-item dropdown">
            <a class="nav-link " href="index.php"> Home</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link " href="#"> Contact Us</a>
      </li>
      </ul>

</div>
        </nav>
      </article>

      <article class="container text-center font-weight-bold ">
        <h1>Create an account</h1>
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-4">

        <form class="" action="" method="post">
          <label  for="">Full Name</label>
          <div>
            <input class="form-control" type="text" name="fname" value="" placeholder="name">
          </div>
          <label for="">Registration No.</label>
          <div class="">
            <input class="form-control" type="number" name="regid" value="" placeholder="registration no.">
          </div>

          <label for="">Password</label>
          <div class="">
            <input class="form-control" type="password" name="password" value="" placeholder="password">
          </div>
          <label for="">Confirm Password</label>
          <div class="">
            <input class="form-control" type="password" name="cpassword" value="" placeholder="confirm password">
          </div>
        </div>
        <div class="col-4">
          <label for="">Email</label>
          <div class="">
            <input class="form-control" type="email" name="email" value="" placeholder="email">
          </div>
          <label for="">Contact No.</label>
          <div class="">
            <input class="form-control" type="number" name="cno" value="" placeholder="mobile number">
          </div>
          <label for="">Department</label>
          <div class="">
            <input class="form-control" type="text" name="department" value="" placeholder="Department name">
          </div>
          <label for="">Samester</label>
          <div class="">
            <input type="number" name="samester" min="1" max="14" value="">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-8">
        <div class="">
          <br>
          <button type="submit" class="btn btn-outline-primary font-weight-bold bg-ino btn-block" name="submit_btn">Register</button>
        </div>
      </div>
      </div>

        </form>

      </article>

    </section>

  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
