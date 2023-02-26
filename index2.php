<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style5.css">

    <!-- Bootstrap CSS -->
 
    <title>Hello, world!</title>
  </head>
  
 <body>   
  <nav>
    <div class="container-fluid">
      <ul>
        <li>
          <a class="nav-link active bg-light" aria-current="page" href="index2.php" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-light" href="create.php">Create New User</a>
        </li>
      </ul>
      <form>
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</nav>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CarName</th>
      <th scope="col">Model</th>
      <th scope="col">Horse Power</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php  
      include "connection.php";
      $sql="SELECT * FROM main";
      $result=$conn->query($sql);
      if(!$result){
        die("Invalid Query!");
      }
      while($row=$result->fetch_assoc()){

    echo"
    <tr>
      <th>$row[id]</th>
      <td>$row[carname]</td>
      <td>$row[model]</td>
      <td>$row[horsepower]</td>
      <td>$row[Price]</td>
      <td>
          <a href='edit.php?id=$row[id]'><button>Edit</button></a>
          <a href='delete.php?id=$row[id]'><button>Delete</button></a>
      </td>
    </tr>
  ";}
  ?>
  </tbody>
</table>
</div>  
   
  </body>
</html>
