<?php $title="About Us - Techlog"; $aboutOn=' class="on" '; include '../../templates/top.php'; ?>
<?php include './php/login_handle.php';
?>

<style>
    <?php include '../../templates/style.css' ?>
    <?php include '../css/login.css' ?>

</style>

<!-- html goes here  -->
<?php
echo '<div class="msg">'.$user.'</div';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    


  <section>
      <div class="container">
          <div class="user signin-box">
              <div class="image-box">
                <div class="textOver">
                    <h1>Welcome Back</h1>
                    <h3>We're happy to see you..</h3>
                </div>
              </div>
              <div class="form-box">
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <h2>Log In</h2>
                      <input type="text" name="username" placeholder="Username">
                      <input type="password" name="password" placeholder="Password">
                      <input type="submit" name="" id="submit-btn" value="Log in">
                      <p class="signup">Don't have an account?<a href="./signup.php">Sign In</a></p>
                  </form>
              </div>
          </div>
      </div>
  </section>  
  </body>
</html>
<script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>