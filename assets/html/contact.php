<?php $title="Contact Us - Techlog";  $contactOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css' ?>
    <?php include '../css/contact.css' ?>
</style>

<?php 
$conSucced = false;
if (isset($_POST['name'])){
    // Connection to database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$con = mysqli_connect($server, $username, $password, $dbname);

// storing all inputs into variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

// Inserting input data into database (Using sql query)
$sql =" INSERT INTO `userinfo` (`name`, `email`, `phone`, `msg`, `date`) VALUES ('$name', '$email', '$phone', '$msg', current_timestamp())";

// Checking if connection is successfull or not
if  ($con->query($sql) == true){
    $conSucced = true;
}

// Closing connection
$con->close();}
?>

<?php 
if ($conSucced == true){
    echo ' <div class="successMsg">Thanks for contacting us. We will reach you soon.</div>';
}
?>
    <form action="contact.php" method="post">
        <div class="inpFld">
            <label for="name">Name: </label>
            <input type="text" name="name" id="myName" placeholder="Name">
        </div>

        <div class="inpFld">
            <label for="email">Email: </label>
            <input type="text" name="email" id="myEmail" placeholder="Email">
        </div>
        <div class="inpFld">
            <label for="phone">Phone No: </label>
            <input type="tel" name="phone" id="myPhone" placeholder="Phone Number">
        </div>

        <div class="inpFld">
            <label for="message">Message: </label>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
        </div>
        <button class="button" name="submitForm" type="submit"></button>
        </form>

        <script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>
