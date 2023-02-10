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
        // $ and $$ in php
        $a="b";
        $b="c"; // notice that the name of the variable here is same as the value of variable $a
        echo 'The value of $a is '.$a.'<br>';
        echo 'The value of $$a is '.$$a.'<br><br>';
        // Working Analogy: $$a = $($a) = $b = "c"

        // unset() in php: unset clears the value of the variable
        $name="Ram";
        echo "Before unset: name = $name";
        unset($name);
        echo "After unset: name = $name<br>";   // this will throw warning as "undefined variable"
        // the emptiness in result shows that the variable is clear
    ?>
</body>
</html>