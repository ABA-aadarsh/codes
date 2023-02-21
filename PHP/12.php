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
        // scope of a variable

        $n=10; 
        function display(){
            echo "$n"; // this is will result as : variable is not defined
            // since $n is a local variable and not defined within this scope, it cant be accessed
        }
        display();

        function display2(){
            // first we will globalize the variable here 
            global $n;
            echo $n;    // this will not result in error
        }
        display2();
    ?>
</body>
</html>