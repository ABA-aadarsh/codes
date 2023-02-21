<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <span>Enter Your Name: </span>
        <input type="text" name="name" placeholder="Your Name">
        <br>
        <input type="submit" value="Submit">
    </form>
    <hr>
    <?php
        // form
        if($_POST){
            $name=$_POST["name"];
            echo "Its nice to meet you $name. How is your day going, $name? <br>";

            echo "<br>Now see the url above, this is what happens when we use get method.<br>";
        }
        
    ?>
</body>
</html>