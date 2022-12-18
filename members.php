<?php

include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $dob = $_REQUEST["dob"];
    $phone = $_REQUEST["phone"];
    $coach = $_REQUEST["coach"];
    

    $ins = "INSERT INTO member (id,name, date,dob,phone,coach) VALUES ('$id','$name','$date','$dob','$phone','$coach')";
        $query1 = mysqli_query($connection, $ins);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<body>
    

<!-- nav bar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"><img src="assets/img/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="#">Gym Mananagement System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="receptionist.php">receptionist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="billing.php">billing</a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav bar end     -->

<section class="members">

<div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                          <h2 >Coach</h2>
                      </div>
                  </div>
              </div>

<!-- form start -->
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"> ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of Joining</label>
    <input type="text" name="date" class="form-control" id="inputAddress" placeholder="DD/MM/YYYY">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Date of Birth</label>
    <input type="text" name="dob" class="form-control" id="inputAddress2" placeholder="DD/MM/YYYY">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Coach</label>
    <input type="text" name="coach" class="form-control" id="inputAddress2" placeholder="coach">
  </div>
  
  <button type="submit"  name= "submit" class="btn btn-primary">Save</button>
</form>

</div>
<!-- form end -->

</section>

<style>
    html, body{
        height: 100%;
    }
    .members{
        height: 100%;
        padding-top: 100px;
        padding-right: 200px;
        padding-left: 200px;
        background: #000;
    }
    label{
        color: #fff;
    }
    .btn{
        color: #fff;
        background: #D20303;
        border: 0px;
        border-radius: 0px;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 50px;
        padding-left: 50px;
        font-size: 20px;
    }
</style>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>