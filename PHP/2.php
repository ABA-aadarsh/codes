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
        // Data types in php
        // There are 8 data types in php

        // 1. String

        // string can be represented with single quote ' '
        echo 'This is a comment using single quote.<br>';
        // or with double quote " "
        echo "This is a comment using double quote.<br><br>";
        
        // the major difference between them is shown from the example below
        $a=123;
        echo 'In single quote: $a<br>'; // it is displayed as it is
        echo "In double quote: $a<br>"; // here the value stored in the varible is displayed

        // other methods: heredoc and nowdoc

        echo "<br><b>Using heredoc</b><br><br>";
        /*
            syntax:
            echo <<< identifier
            .....content......
            .....content......
            identifier;
        */
        echo <<< hello
        This is a message I have written using heredoc
        using heredoc you can write multiple lines in editor (but it will be displayed as single line in page)
        and end using an identifier (the identifier wont be displayed though)<br>
        hello;

        $message=<<<hello
        heredoc method can also be used to store in variable
        hello;

        echo "<br><b>Using nowdoc</b><br><br>";
        // it is similar to nowdoc
        /*
            syntax:
            echo <<< 'identifier'
            .....content......
            .....content......
            identifier;
        */
        // identifier must be written in single quote here
        echo<<< 'hello'
        This is using nowdoc
        hello;
    ?>    
</body>
</html>