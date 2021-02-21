<?php
$con=mysqli_connect("localhost","root","","myphp");
if(!$con)
{
    echo "connection error";
}
else
{

$name=$_POST["user_name"];
$email=$_POST["user_email"];
$pwd=$_POST["password"];
$ph=$_POST["phone"];

$sql="insert into login values('$name','$email','$pwd',$ph)";

if(mysqli_query($con,$sql))
{
    echo "success";
}
else
{
    echo "error";
}
}
?>

<html>
<head>
<style>
td
{
    font-size:20px;
    color:red;
    width:50%;
}
div
{
    margin:auto;
    width:50%;
    height:75%;
    background-color: lightgreen;
    text-align:center;
    border:10px outset rgb(240, 150, 6);
}
body
    {
        background-color:cyan;
    }
</style>
</head>
<body>
    <div>
<h1 align="center"><u>FORM DETAILS</u></h1>
<table align="center">
<tr><td> Name :   </td><td><?php  echo $name ?></td></tr>
<tr><td> Email :  </td><td><?php  echo $email ?></td></tr>
<tr><td> Psw :    </td><td><?php  echo $pwd ?></td></tr>
<tr><td> Phone :  </td><td><?php  echo $ph ?></td></tr><br><br>
<tr><td></td><td></td>
<tr><td><a href="Exercise_12.php">Back</td><td></td></tr>
</table>
</div>
</body>
</html>