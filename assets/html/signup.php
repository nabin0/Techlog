<?php $title="Contact Us - Techlog";  $signinOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css'?><?php include '../css/signup.css'?>
</style>
<?php include './php/signupHandle.php' ?>
<!-- Other Content goes here -->
<?php 
echo $displayMsg ;
?>
<section>
    <div class="container">
        <div class="left">
            <img src="../image/left.jpg">
            <div class="textOver">
                    <h1>Welcome Here</h1>
                    <h3>We're Happy To See Ya</h3>
            </div>
        </div>
        <div class="right">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Sign Up</h1>
                <input type="text" name="fname" id="fname" placeholder="Name"><span class="errormsg"><?php echo $fnameErr ?></span>
                <input type="text" name="lname" id="lname" placeholder="Userame"><span class="errormsg"><?php echo $lnameErr ?></span>
                <input type="tel" name="phone" id="phonr" placeholder="Phone number(with country code)"><span class="errormsg"><?php echo $phoneErr ?></span>
                <input type="text" name="email" id="email" placeholder="Email"><span class="errormsg"><?php echo $emailErr ?></span>
                <input type="date" name="dob" id="dob" placeholder="Date of birth"><span class="errormsg"><?php echo $dobErr ?></span>
                <input type="text" name="password" id="password" placeholder="Password"><span class="errormsg"><?php echo $passwordErr ?></span>
                <input type="text" name="cPassword" id="cPassword" placeholder="Confirm Password"><span class="errormsg"><?php echo $cPasswordErr ?></span>
                <input type="submit" value="Sign up">
                <p class="signup">Already have an account <a href="login.php">Log in</a></p>
            </form>
        </div>
    </div>
</section>
<script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>