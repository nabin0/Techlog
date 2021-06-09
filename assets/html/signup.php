<?php $title="Contact Us - Techlog";  $signinOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css'?><?php include '../css/signup.css'?>
</style>
<?php include './php/signupHandle.php' ?>
<!-- Other Content goes here -->
<div class="container">
<?php 
echo $displayMsg ;
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <div class="inprow">
            <label for="fname">First Name: </label>
            <input type="text" name="fname" id="fname" placeholder="Enter your first name here"><span class="errormsg"><?php echo $fnameErr ?></span>
        </div>

        <div class="inprow">
            <label for="lname">Last Name: </label>
            <input type="text" name="lname" id="lname" placeholder="Enter your last name here"><span class="errormsg"><?php echo $lnameErr ?></span>
        </div>

        <div class="inprow">
            <label for="phone">Phone no: </label>
            <input type="tel" name="phone" id="phonr" placeholder="Enter your Phone number here (with country code)"><span class="errormsg"><?php echo $phoneErr ?></span>
        </div>

        <div class="inprow">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Enter your email here"><span class="errormsg"><?php echo $emailErr ?></span>
        </div>

        <div class="inprow">
            <label for="fname">DOB: </label>
            <input type="date" name="dob" id="dob" placeholder="Enter your Date of birth."><span class="errormsg"><?php echo $dobErr ?></span>
        </div>

        <div class="inprow">
            <label for="fname">password: </label>
            <input type="text" name="password" id="password" placeholder="Enter your Password"><span class="errormsg"><?php echo $passwordErr ?></span>
        </div>

        <div class="inprow">
            <label for="fname">Confirm Password: </label>
            <input type="text" name="cPassword" id="cPassword" placeholder="Enter same password as above"><span class="errormsg"><?php echo $cPasswordErr ?></span>
        </div>

            <button type="submit" id="submitBtn">Sign in</button>
  
    </form>
</div>
<script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>