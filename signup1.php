<?php
$name=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$con= mysqli_connect('localhost','root','', 'forum_db');
$query="Insert into signup values('$name','$lname','$email','$password')";
$result= mysqli_query($con, $query);

header("Location:login.php");
?>

