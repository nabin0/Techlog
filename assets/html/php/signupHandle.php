
<!-- Form submittion script goes here -->
<?php
$conSucced = false;
$displayMsg = "";
$fname =$lname = $phone =$email = $dob = $password = $cPassword = "";
$fnameErr =$lnameErr = $phoneErr =$emailErr = $dobErr = $passwordErr = $cPasswordErr = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

$server = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$con = mysqli_connect($server, $username, $password, $dbname);

if(empty($_POST['fname'])){
    $fnameErr = "Required";
} else{
    $fname = $_POST['fname'];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
        $nameErr = "Only letters are allowed";
      }
}
if(empty($_POST['lname'])){
    $lnameErr = "Required";
} else{
    $lname = $_POST['lname'];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
        $nameErr = "Only letters are allowed";
      }
}

if(empty($_POST['phone'])){
    $phoneErr = "";
} else{
    $phone = $_POST['phone'];
}

if(empty($_POST['email'])){
    $emailErr = "Required";
} else{
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}

if(empty($_POST['dob'])){
    $dobErr = "Required";
} else{
    $dob = $_POST['dob'];
}

if(empty($_POST['password'])){
    $passwordErr = "Required";
} else{
    $password = $_POST['password'];

}

if(empty($_POST['cPassword'])){
    $cPasswordErr = "Required";
} else{
    $cPassword = $_POST['cPassword'];
    if ($password != $cPassword){
        $cPasswordErr = "Password did not match";
    }
}

if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['password']) && $password == $cPassword){
$sql = "INSERT INTO `signininfo` ( `fname`, `lname`, `phone`, `email`, `dob`, `pswd`, `confirmedPswd`) VALUES ( '$fname', '$lname', '$phone', '$email', '$dob', '$password', '$cPassword')";


// Checking if connection is successfull or not
if  ($con->query($sql) == true && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['password']) && $password == $cPassword){
    $conSucced = true;
    $displayMsg = ' <div class="successMsg">Your Account for TechLog is registered. use your firstname as username.</div>';
} else{
    $displayMsg = ' <div class="successMsg" style="color:red;" >Please Fill valid Information</div>';
}
$con->close();
}
}

?>
