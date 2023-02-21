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
        // call by value 
        echo "<b>Call by value</b><br>";
        function display($n){
            $n++;
            echo "After incrementing in function: n=$n<br>";
        }
        $n=10;
        echo "Before function call: n=$n<br>";
        display($n);
        echo "After function call: n=$n<br><br>";
        // call by reference
        echo "<b>Call by reference</b><br>";
        function display2(&$n){
            $n++;
            echo "After incrementing in function: n=$n<br>";
        }
        $n=10;
        $a=&$n;
        echo "Before function call: n=$n<br>";
        display2($a);
        echo "After function call: n=$n<br>";
    ?>
</body>
</html>