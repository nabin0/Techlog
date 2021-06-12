<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <section>
        <header>
            <a href="../../index.html" class="logo">TECHLOG</a>
            <div class="toggle">
                <div class="menu-btn"></div>
            </div>
            <ul class="navigation hearder-nav">
                <?php 
                if(!isset($aboutOn)){
                    $aboutOn = "class='navItm' ";
                }
                if(!isset($contactOn)){
                    $contactOn = "class='navItm' ";
                }
                if(!isset($readOn)){
                    $readOn = "class='navItm' ";
                }
                if(!isset($signinOn)){
                    $signinOn = "class='navItm' ";
                }
                ?>
                <li class="header-nav-list-itm"><a href="about.php" style="--i:1;" <?php echo $aboutOn ?> >About Us</a></li>
                <li class="header-nav-list-itm"><a href="contact.php" style="--i:2;"  <?php echo $contactOn ?>>Contact Us</a></li>
                <li class="header-nav-list-itm"><a href="readblogs.php" style="--i:3;"  <?php echo $readOn ?>>Read Blogs</a></li>
                <li class="header-nav-list-itm"><a href="signup.php" style="--i:4;"  <?php echo $signinOn ?>>Sign Up</a></li>
                <li class="header-nav-list-itm"><a href="#" style="--i:5;">
                        <span class="themeText" id="themeMode">
                            <i class="fa fa-moon-o" id="themeText" style="font-weight: bold;">Dark</i>
                        </span></i>
                    </a></li>
            </ul>
        </header>
    </section>