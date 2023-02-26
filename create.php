<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $carname = $_POST['carname'];
        $model = $_POST['model'];
        $horsepower = $_POST['horsepower'];
        $Price = $_POST['Price'];
        $q = " INSERT INTO `main`(`carname`, `model`, `horsepower`,`Price`) VALUES ( '$carname', '$model', '$horsepower' , '$Price' )";

        $query = mysqli_query($conn,$q);
        header("location: /saadproject/index2.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style5.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <nav>
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar">
        <li>
          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
        </li>
      </ul>
      <form>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-c">
 <form method="post">
  <label>Car Name</label>
  <input type="text" name="carname">

  <label>Modul</label>
  <input type="text" name="model">

  <label>Horse Power</label>
  <input type="text" name="horsepower">

  <label>Price</label>
  <input type="text" name="Price">
  
  <button type="submit" name="submit">Submit</button>
  <a class="btn btn-info" name="cancel" href="index2.php" ><button>Cancel</button></a></form>
</div>  
</body>
</html>
