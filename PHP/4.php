<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 7. Array

        // Indexed array
        echo "<b> Indexed Array </b> <br>";
        $numbers=array (12, 56, 78, 90);
        for($c=0;$c<4;$c++){
            echo "Index: $c Value: $numbers[$c] <br>";
        }
        echo "<br>";

        // Associative array
        echo "<b> Associative Array </b> <br>";
        $age=array("Ram"=>34, "Shyam"=>30, "Baburao"=>54);
        foreach($age as $person=>$personsAge){
            echo "$person is $personsAge year old<br>";
        }
        // we can acces like: echo $age["Ram"];
        echo "Age of Ram is ".$age["Ram"]."<br>";

        // Multidimensional array
        echo "<br><b> Multidimensional Array </b> <br>";
        $marks=array(
            "Ram"=>array("Math"=>78,"Science"=>67),
            "Shyam"=>array("Math"=>56,"Science"=>80)
        );
        echo "Marks of Ram in Math is ".$marks["Ram"]["Math"]."<br>";
    ?>
</body>
</html>