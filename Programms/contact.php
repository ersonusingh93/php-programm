<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Page</h1>
    <p>Fill the details  : </p>
    <form action="" method="post">
        <p>
            <label for="name">Name : </label>
            <input type="text" name="name" id="inputname">
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="email" name="email" id="inputemail">
        </p>
        <p>
            <label for="comment">Message: </label>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        <?php 
        if(isset($_POST["submit"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            echo "<h1>Name is : $name"."<br>";
        }


        ?>
    </form>
</body>
</html>