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
        // sorting and reversing arrays
        $num= array (1,-5,10,0,4);
        echo "Before sort(): $num[0] , $num[1] , $num[2] , $num[3] , $num[4]<br>";
        sort($num);
        echo "After sort(): $num[0] , $num[1] , $num[2] , $num[3] , $num[4]<br>";
        rsort($num);
        echo "After rsort(): $num[0] , $num[1] , $num[2] , $num[3] , $num[4]<br>";

        // sorting and reversing strings: same
        $names= array("himal","aadarsh","bashanta","anand");
        echo "<br>Before sort()<br>";
        var_dump($names); // var_dump displays information about the variable

        sort($names);
        echo "<br>After sort()<br>";
        var_dump($names);

        rsort($names);
        echo "<br>After reverse()<br>";
        var_dump($names);
    ?>
</body>
</html>