<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in php</title>
</head>
<body>
    <div style="text-align:center">
        <h3>Let's learn strings in php</h3>
        <?php 
            $str = "This is a string";
            echo $str;
            echo "<br>";
            $str_len = strlen($str);
            echo "The length of the string is ".$str_len;
            // echo $str_len;
            echo "<br>The number of words in the string is ".str_word_count($str);
            echo "<br>The reverse string is: ".strrev($str);

            echo "<br>The replaced string is ".str_replace("is","at",$str);
        ?>
    </div>
</body>
</html>