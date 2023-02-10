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
        // case sensitivity in php
        // in php ECHO , echo , EcHO ... are all same
        echo "Hello world<br>";
        ECHO "Hello world<br>";
        EcHO "Hello world<br>";
        // keywords are not case-sensitive in php but user defined variables are
        $a=10;
        // $a is not the same as $A
        echo $a;
        echo $A;
        // In short: php is not case sensitive for keywords, classes and functions but it is case sensitive for user defined variables
        function message(){
            echo "<br>Good Morning Everyone<br>";
        }
        message();
        MESSAGE();
        // being function message() and MESSAGE() is same in php
    ?>
</body>
</html>