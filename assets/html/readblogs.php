<?php $title="Contact Us - Techlog";  $readOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css'?><?php include '../css/readblogs.css'?>
</style>


<!-- Other Content goes here -->

<div class="container">
<?php 
require_once './php/get_blog.php';
get_blog();
?>
<!-- 
    <div class="box">
        <div class="card">
            <div class="content">
                <img src="../image/postimg/1.jpg" alt="">
                <div class="txt-content">
                    <h3>Name</h3>
                    <p class="date">date</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur inventore alias non
                        molestiae voluptate 
                    </p>
                </div>
                <a href="#">READ</a>
            </div>
        </div>
    </div>
 -->



</div>
<script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>