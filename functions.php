<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <div style="text-align:center;">
    <h2>Let's learn functions</h2>

        <?php 

            function printFive(){
                echo "Five";
                echo "<br>";
            }
            printFive();
            
            function printNumber($num){
                echo "<br>your number is : ";
                echo $num;
            }
            printNumber(237);

            

        ?>
    </div>
</body>
</html>