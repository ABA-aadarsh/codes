<?php
    include "server.php";
    $name=$_POST["name"];
    $marks=$_POST["marks"];
    
    $sql="insert into records(name,marks) values('$name','$marks')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:index.php");
    }
?>