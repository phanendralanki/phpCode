<?php
$insert = false;
if(isset($_POST['name'])){

    // procedural programming
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a database connection
    $con = mysqli_connect($server,$username,$password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to ". mysqli_connect_error());

    }
    //echo "successfully connected to the database";

    // inserting code
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc']; 

    $sql = "INSERT INTO `travel`.`trip` (`name`, `age`, `email`, `phone`, `desc`) VALUES ('$name','$age','$email','$phone','$desc');";
    //echo $sql;
    //Execute the query
    if($con->query($sql)== true){
        // echo "successfully inserted";
        $insert = true;
    }else{
        // echo "Error: $sql <br> $con->error";
    }

    //close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Swarnandhra college Trip Form</h1>
        <p>Enter your details to confirm your participation</p>
        <?php 
            if($insert == true){
                echo "<p class='success-msg'>Thanks for submitting</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your mobile">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information">

            </textarea>
            <button class="btn">Submit</button>
            <!-- <button type='reset' class="btn">Reset</button> -->
        </form>
        <!-- 

            INSERT INTO `trip` (`sid`, `name`, `age`, `email`, `phone`, `desc`) VALUES ('4', 'chandu', '20', 'chandu@gmail.com', '6332354321', 'I am chandra pavan');
            
         -->
    </div>
    <script src="index.js"></script>
</body>
</html>