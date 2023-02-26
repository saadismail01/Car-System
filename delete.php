<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from main where id=$id";
        //$conn->query($sql);
        mysqli_query($conn,$sql);
    }
    header('location:/saadproject/index2.php');
    exit;
?>