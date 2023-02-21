<?php
    // database connection set up
    include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record System</title>
</head>
<body>
    <div class="main">
        <h1>Student Records System</h1>
        <!-- data adding form -->
        <form method="post" action="entrydata.php">
            <span>Name</span>
            <input type="text" name="name" required>
            <br>
            <span>Marks</span>
            <input type="number" name="marks" required min="0" max="100">
            <br>
            <input type="submit" value="Save">
        </form>
        <hr>
        <!-- data retrieval part -->
        <h1>List of Students Marks</h1>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Marks</th>
                <th>Action</th>
            </tr>
            <?php
                $sql="select * from records";
                $result=mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row["id"];
                        $name=$row["name"];
                        $marks=$row["marks"];
                        echo "<tr><td>$name</td><td>$marks</td>";
                        echo "<td><a href='edit.php?id=$id'>Update</a> <a href='delete.php?id=$id'>Delete</a>";
                    }
                }  
            ?>
        </table>
    </div>
</body>
</html>