<?php
    include "server.php";
    $id=$_GET["id"];
    $name=$_POST["name"];
    $marks=$_POST["marks"];
    $sql="update records set name='$name', marks=$marks where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:index.php");
    }
?>