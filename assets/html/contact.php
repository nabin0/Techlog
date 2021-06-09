<?php $title="Contact Us - Techlog";  $contactOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css' ?>
    <?php include '../css/contact.css' ?>
</style>
<?php 
require './php/contactUsSubmit.php';
?>
<?php 
echo $displayMsg ;
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="inpFld">
            <label for="name">Name: </label>
            <input type="text" name="name" id="myName" placeholder="Name"><span class="errormsg"><?php echo $nameErr ?></span>
        </div>

        <div class="inpFld">
            <label for="email">Email: </label>
            <input type="text" name="email" id="myEmail" placeholder="Email"><span class="errormsg"><?php echo $emailErr ?></span>
        </div>
        <div class="inpFld">
            <label for="phone">Phone No: </label>
            <input type="tel" name="phone" id="myPhone" placeholder="Phone Number"><span class="errormsg"><?php echo $phoneErr ?></span>
        </div>

        <div class="inpFld">
            <label for="message">Message: </label>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea><span class="errormsg"><?php echo $msgErr ?></span>
        </div>
        <button class="button" name="submitForm" type="submit"></button>
        </form>

        <script>
    <?php include '../../templates/app.js' ?>
    <?php include '../js/contact.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>
