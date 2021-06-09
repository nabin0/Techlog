
<?php 
$conSucced = false;
$displayMsg = '';
$name= $email = $phone = $msg = "";
$nameErr= $emailErr = $phoneErr = $msgErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";
    $con = mysqli_connect($server, $username, $password, $dbname);
    
    // storing all inputs into variables

if (empty($_POST['name'])){
    $nameErr = 'Name is required.';
}else{
    $name = test_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
}
if (empty($_POST['email'])){
    $emailErr = 'Email is required.';

}else{
    $email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }

}
if (empty($_POST['phone'])){
    $phoneErr = ' ';

}else{
    $phone =test_input( $_POST['phone']);
    if(!preg_match('/^[0-9]{10}+$/', $phone)) {
        $phoneErr = "Invalid Phone Number";
      }

}
if (empty($_POST['msg'])){
    $msgErr = 'Message is required.';

}else{
    $msg = test_input($_POST['msg']);
}
    

if (!empty($_POST['name']) && !empty($_POST['email'])  && !empty($_POST['msg'])){
    // Inserting input data into database (Using sql query)
    $sql =" INSERT INTO `userinfo` (`name`, `email`, `phone`, `msg`, `date`) VALUES ('$name', '$email', '$phone', '$msg', current_timestamp())";
    // Checking if connection is successfull or not
if  ($con->query($sql) == true && !empty($_POST['name']) && !empty($_POST['email'])  && !empty($_POST['msg'])){
        $conSucced = true;
        $displayMsg = ' <div class="successMsg">Thanks for contacting us. We will reach you soon.</div>';
} else{
        $displayMsg = ' <div class="successMsg" style="color:red;" >Please Fill valid Information</div>';

}
    // Closing connection
    $con->close();}
}
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>




