<?php
    if(empty($_POST) && empty($_POST['email'])){
        echo "<br> Please Fill the Form";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "Your name is : $name"."<br>";
        echo "Your email is : $email"."<br>";
    }

?>