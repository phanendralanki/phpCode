<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- print statement -->

       <!-- <?php
           echo "This is my first php"

           //single line comment
           /*
           multiline comment
           */

       ?> -->

        <!-- <?php 
            echo "this is another php code"
        ?> -->


        <!-- variable -->

        <!-- <?php
            $variable1 = "phani";
            $variable2 = 30;

            echo $variable1;
            echo $variable2;

            echo $variable2+10;

            // case insensitive
            Echo $variable1
        ?> -->
       

       <!-- operators -->
       <!-- Arithmentic operators 
       Assignment operators 
       Comparision operators 
       Increment/Decrement operators 
       Logical operators  -->

    <?php 
        $num1 = 10;
        $num2 = 20;
        echo "The value of variable1 + variable 2 is: ";
        echo "<br>";
        echo $num1+$num2;
        echo "<br>";
        // echo "phani"

        echo "The value of variable1 - variable 2 is: ";
        echo "<br>";
        echo $num1-$num2;
        echo "<br>";

        echo "The value of variable1 * variable 2 is: ";
        echo "<br>";
        echo $num1*$num2;
        echo "<br>";

        echo "The value of variable1 / variable 2 is: ";
        echo "<br>";
        echo $num1/$num2;
        echo "<br>";

        // Assignement operators  
        $newVar = +$num1;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";  
        
        echo "<h1>Increment or decrement operators</h1>";
        $new = "<br>";
        $value = 10;
       
       echo --$value;
       echo $new;
       echo ++$value;
       echo $new;
       echo $value++;
       echo $new ;
       echo $value--;
       echo $new;
       echo $value;
    ?>

    <h1>Data types</h1>
    <?php 

    // Data types
    // 1.string
    // 2.integer
    // 3.float
    // 4.boolean
    // 5.Array
    // 6.object

    
    $var = "This is a string";
    echo var_dump($var);

    echo $new;
    $var = 10;
    echo var_dump($var);
    echo $new;

    $var = 67.1;
    echo var_dump($var);
    echo $new;

    $var = true;
    echo var_dump($var);


    ?>

<?php 
    define('phani',20);     //constant
    echo $new;
    echo phani;

?>


    </div>
</body>
</html>