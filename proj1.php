<?php
$insert = false;
    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection with database failed due to".mysqli_connect_error());
    }
    // echo "Sucessfully Connected To Database";
 
    $name     = $_POST['name'];
    $age      = $_POST['age'];
    $gender   = $_POST['gender'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $desc     = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip`( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES 
    ('$name ', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql ;

    if($con->query($sql) == true){
        // echo "Sucessfully Inserted";
        $insert = true;

    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Welcome Travel form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ravi+Prakash&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="proj1.css">
</head>
<body>
    <img src="ai.jpg" alt="Design Machine to think" class="ai">
    <div class="container">
        <h1 class="heading">Welcome To Coding Contest Form</h1>
        <br><br><br>
        <p>Enter your details and submit the form  to confirm your participation  </p>
        <br>

        <?php
        if($insert == true){
            echo"<p class='SubmitMsg'>Thanks for Participating in this contest</p>";
        }
        ?>

    <form action="proj1.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="text" name="age" id="age" placeholder="Enter your age">
    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
    <input type="email" name="email" id="email" placeholder="Enter your Email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your queries"></textarea>
    <button class="btn">Submit</button>
    </form>
   </div>

   

    <script src="proj1.js"></script>
</body>
</html>