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
        // 8. Object
        // in php (->) is used instead of (.) for accessing properties and methods of object
        class student{
            public $name;
            public $age;
            function setDetail($n,$a){
                // reminder: $this->propertyName  , dont use $ sign infront of propertyName
                $this->name=$n;
                $this->age=$a;
            }
            function greet(){
                echo "Hello Everybody. My name is $this->name and I am $this->age years old.<br>";
            }
        }
        $s=new student();
        $s->setDetail("Ram",23);
        $s->greet();
        echo "Name: ".$s->name;
    ?>
</body>
</html>