<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        if(!empty($email) && !empty($password) && !is_numeric($email))

        {

            $query = "insert into reg (Name, Email, Password) values ('$name','$email','$password')";

            mysqli_query($conn, $query);

            echo"<script type='text/javascript'> alert('Sucessfully Register')</script>";
            header("location: login_form.php");

            

        }

        else
        {
            echo"<script type='text/javascript'> alert('Please enter valid information')</script>"; 
        }

    

    }



?>

