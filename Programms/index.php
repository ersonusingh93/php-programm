<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Programming with Html Form</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="" placeholder="Enter your Name"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="" placeholder="Enter your Email"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "Your name is $name and Email is $email";

    }
   else{
    echo "Not valid data";
   }

    ?>

    <?php

    echo "Welcome to Php Programming";
    ?>
</body>
</html>