<?php $title="Contact Us - Techlog";  $readOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php 
require_once './php/get_blog.php';

    include '../../templates/style.css'?><?php include '../css/readblogs.css'?>
</style>


<!-- Other Content goes here -->

<div class="container">
<?php 
get_blog();
?>
</div>
<script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>