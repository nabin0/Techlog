<?php $title="About Us - Techlog"; $aboutOn=' class="on" '; include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css' ?>
    <?php include '../css/login.css' ?>
</style>


<!-- html goes here  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <title>Log in page</title>
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
                  <form>
                      <h2>Log In</h2>
                      <input type="text" name="" placeholder="Username">
                      <input type="password" name="" placeholder="Password">
                      <input type="submit" name="" id="submit-btn" value="Log in">
                      <p class="signup">Don't have an account?<a href="signin.php">Sign In</a></p>
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