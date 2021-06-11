<?php
session_start();
$user = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

$server = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$con = mysqli_connect($server, $username, $password, $dbname);

$username = mysqli_real_escape_string($con,$_POST['username']);
$password =mysqli_real_escape_string($con,$_POST['password']); 

$query = "SELECT sn FROM signininfo WHERE fname = '$username' and pswd = '$password'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
     
if($count == 1) {
    $_SESSION['login_user'] = $username;
    $user = "Welcome &nbsp;".$_SESSION['login_user'];
}else {
    $error = "Your Login Name or Password is invalid";
    $user = $error;
}
}
?>