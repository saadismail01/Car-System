<?php
  include "connection.php";
  $id="";
  $carname="";
  $model="";
  $horsepower="";
  $Price="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:saadproject/index.php");
      exit;
     
    }
    $id = $_GET['id'];
    $sql1 = "select * from main where id=$id";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: saadproject/index.php");
      exit;
      
    }
    $carname=$row["carname"];
    $model=$row["model"];
    $horsepower=$row["horsepower"];
    $Price=$row["Price"];
  }
  else{
    $id = $_POST["id"];
    $carname=$_POST["carname"];
    $model=$_POST["model"];
    $horsepower=$_POST["horsepower"];
    $Price=$_POST["Price"];
    $sql = "update main set carname='$carname', model='$model', horsepower='$horsepower' , Price='$Price' where id='$id'";
    $result = $conn->query($sql);
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
    <div class="collapse navbar-collapse">
      <ul class="navbar">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-c">
 <form method="post" >

<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>


  <label>Car Name</label>
  <input type="text" value="<?php echo $carname; ?>"name="carname">

  <label>Modul</label>
  <input type="text" value="<?php echo $model; ?>"name="model">

  <label>Horse Power</label>
  <input type="text" value="<?php echo $horsepower; ?>"name="horsepower">

   <label>Price</label>
  <input type="text" value="<?php echo $Price; ?>"name="Price">

  <button href="index2.php"  class="btn btn-success" type="submit" name="submit" >Submit</button> 
  <a class="btn btn-infp" type="submit" name="cancel" href="index2.php" ><button>Cancel</button></a>

   




 </form>
</div>  
   
  </body>
</html>
