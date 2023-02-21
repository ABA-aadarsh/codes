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
        // Ternary operator:  same as in C
        $a=10;
        echo ($a%2==0)? "$a is Even.<br>": "$a is Odd.<br>";
        echo "<br>";

        // unary operator: same as in C
        $a=1;
        $b=1;
        echo '$a++ : '.$a++."<br>";
        echo '++$b : '.++$b."<br>";
        // $a++ => first assign and then increment
        // ++$a => first increment and then assign

        // Echo and Print
        // echo and print are much same, but have some differences
        /*
            Some Differences: 
                echo is faster than print
                echo can accept multiple arguements while print takes only one
                echo doesnot return anything while print return 1
        */
        echo "<br><b>Echo and Print</b><br>";
        // similarity
        echo "Hello World<br>";
        print "Hello World<br>";
        // difference
        echo "<br>This ","is ","made ","with ","multiple ","parameters<br>"; // this will not throw error
        // print "<br>This ","is ","made ","with ","multiple ","parameters<br>";   // this will sure throw error
    ?>
</body>
</html>