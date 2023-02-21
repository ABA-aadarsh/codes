<?php
    include "server.php";
    $id=$_GET["id"];
    $sql="select * from records where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $name=$row["name"];
        $marks=$row["marks"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <div class="main">
        <h2>Edit Records</h2>
        <form action="editdata.php?id=<?php echo $id;?>" method="post">
            <span>Name</span>
            <input type="text" value='<?php echo $name;?>' name="name">
            <br>
            <span>Marks</span>
            <input type="number" value='<?php echo $marks; ?>' name="marks">
            <br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>