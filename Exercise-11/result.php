<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["user_name"];
    $email=$_POST["user_email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];

    if(empty($name))
    {
       $name_error='please insert your name';
    }
    if(empty($email))
    {
        $email_error='please insert your email';
    }
    if (empty($password))
    {
        $password_error='please insert your password';
    }
    elseif (strlen($password)<6)
    {
        $password_error='Password needs at least 6 digit';
    }
    if (empty($phone))
    {
        $ph_error='Enter your Mobile Number';
    }
    elseif (strlen($phone)!=10) 
    {
        $ph_error='Enter Mobile number with 10 digit';
    }
}
include('Exercise_11.php');
?>
