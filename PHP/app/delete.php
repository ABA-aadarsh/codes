<?php
    include "server.php";
    $id=$_GET["id"];
    $sql="delete from records where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:index.php");
    }
?>