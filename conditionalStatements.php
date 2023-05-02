<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional statements</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        div{
            margin:10px;
        }
        h2{
            margin-bottom:5px;
        }
    </style>
</head>
<body>
    <div style="text-align:center;">
        <h2 style="color:red;">Conditional statements</h2>

        <!-- php code -->
        <?php 
            $age = 34;
            if($age>40){
                echo "you can go to party";
            }else if($age>20){
                echo "your age is : ";
                echo $age;
            }
            else{
                echo "you are not allowed";
            }
        
            // arrays
            echo "<h3 style='margin:1rem;color:blue;'>Looping statements</h3>";
            
            $languages = array("java","php","python","nodejs","javascript","go");

            // echo $languages[0];
            // echo "<br>";
            // echo $languages[1];
            // echo "<br>";
            // echo $languages[2];
            // echo "<br>";
            // echo $languages[3];
            // echo "<br>";
            // echo $languages[4];
            // echo "<br>";

            // echo count($languages);
            // echo "<br>";

            //Loops in PHP
            $a = 0;
            while ($a <= 10) {
                # code...
                echo "<br>The value of a is : ";
                echo $a;
                $a++;
            }

            // iteration arrays in php using while loop
            $a = 0;
            while ($a < count($languages)) {
                # code...
                echo "<br>The value of language is : ";
                echo $languages[$a];
                $a++;
            }

            // iteration arrays in php using do while loop
            echo "<br>";
            $a = 20;
            do{
                # code...
                echo "<br>The value of language is : ";
                echo $a;
                $a++;
            }while ($a<10) ;

            // for loop
            echo "<h3>For loop</h3>";
            $a = 10;
            for ($i=0; $i < $a; $i++) { 
                # code...
                echo $i;
                echo "<br>";
            }

            // foreach loop 
            echo "<h1>foreach loop</h1>";
            foreach ($languages as $key => $value) {
                # code...
                echo "<br><br>The value from for each: ";
                echo $value;
            }
        ?>


    </div>
</body>
</html>