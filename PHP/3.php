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
        // 2. Integer-> numbers without decimal value
        $integer=10; 

        // 3. Float-> numbers with decimal value
        $float=23.5;
        $float2=4E-3;   // 4*10^(-3)

        // 4. Boolean
        $b=TRUE; // TRUE and true are same
        $b2=false; // False and false are same
        echo "Boolean Output:<br>For true: $b<br>For false: $b2<br>";

        // 5. Null data type
        // when a variable is defined without assigning value, then by default its value is null
        $n=null;
        echo "<br>Displaying null in php : $n<br>";

        // 6. Resource-> resource is useful during database connectivity.....aru ta kehi thaha chaina

    ?>
</body>
</html>