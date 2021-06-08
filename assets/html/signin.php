<?php $title="Contact Us - Techlog";  $signinOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css'?><?php include '../css/signin.css'?>
</style>

<!-- Form submittion script goes here -->
<?php
$conSucced = false;

if(isset($_POST['fname'])){
$server = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$con = mysqli_connect($server, $username, $password, $dbname);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$cPassword = $_POST['cPassword'];

$sql = "INSERT INTO `signininfo` ( `fname`, `lname`, `phone`, `email`, `dob`, `pswd`, `confirmedPswd`) VALUES ( '$fname', '$lname', '$phone', '$email', '$dob', '$password', '$cPassword')";

// Checking if connection is successfull or not
if($con->query($sql) == true){
    $conSucced = true;
}


$con->close();
}
?>

<!-- Other Content goes here -->
<div class="container">
    <h3>Please Fill the form correctly to become member of this site</h3>
    <form action="signin.php" method="post">

        <div class="inprow">
            <label for="fname">First Name: </label>
            <input type="text" name="fname" id="fname" placeholder="Enter your first name here">
        </div>

        <div class="inprow">
            <label for="lname">Last Name: </label>
            <input type="text" name="lname" id="lname" placeholder="Enter your last name here">
        </div>

        <div class="inprow">
            <label for="phone">Phone no: </label>
            <input type="tel" name="phone" id="phonr" placeholder="Enter your Phone number here (with country code)">
        </div>

        <div class="inprow">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Enter your email here">
        </div>

        <div class="inprow">
            <label for="fname">DOB: </label>
            <input type="date" name="dob" id="dob" placeholder="Enter your Date of birth.">
        </div>

        <div class="inprow">
            <label for="fname">password: </label>
            <input type="text" name="password" id="password" placeholder="Enter your Password">
        </div>

        <div class="inprow">
            <label for="fname">Confirm Password: </label>
            <input type="text" name="cPassword" id="cPassword" placeholder="Enter same password as above">
        </div>

            <button type="submit" id="submitBtn">Sign in</button>
  
    </form>
</div>
<script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>