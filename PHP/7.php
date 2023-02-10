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
        // Exponent 
        echo 10**3; // 10^3

        // concatenation in php
        // (.) is used for concatenation
        $s="Hello "."World";
        echo "<br>".$s;
        $Name="Ram";
        $lastName="Bahadur";
        $Name .=" ".$lastName; // concatenate and assign
        echo "<br>Name: $Name<br><br>";

        // logical operators
        /*
            and, AND, &&
            or, OR, ||
            !
        */
        $num=36;
        $n1=12;
        $n2=5;
        if($num%$n1==0 and $num%$n2==0){
            echo "$num is divisible by both $n1 and $n2<br>";
        }else if($num%$n1==0 && $num%$n2!=0){
            echo "$num is divisible by $n1 but not by $n2<br>";
        }else if ($num%$n1!=0 AND $num%$n2==0){
            echo "$num is not divisble by $n1 but divisible by $n2<br>";
        }else{
            echo "$num is not divisible by $n1 and $n2<br>";
        }
        // the above code is lengthen on purpose to show that "and", "AND" and "&&" are 
        

        // == and === in php
        // == checks whether two variables have same value or not
        // === checks whether two variables have same value and data type or not
        
        $a=5;
        $b="5";
        echo "<br> == and === in php<br>".'$a='."$a<br>".'$b="'.$b.'"<br>';
        if($a==$b){
            // here this condition becomes true
            echo "Result for == check: True<br>";
        }else{
            echo "Result for == check: False<br>";
        }

        if($a===$b){
            // here this condition becomes false so the else part will be executed
            echo "Result for === check: True<br>";
        }else{
            echo "Result for === check: False<br>";
        }
    ?>
</body>
</html>