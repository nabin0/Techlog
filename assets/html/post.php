<?php $title="Contact Us - Techlog";  $readOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css'?>
    <?php include '../css/post.css'?>
</style>

<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$con = mysqli_connect($server, $username, $password, $dbname);

$q =$_GET['q'];
$query = "SELECT * FROM post WHERE sn = (select sn from post WHERE sn = $q)";
$tdata = mysqli_query($con, $query);
$row =  mysqli_fetch_array($tdata);

 echo '
        <div class="container">
        <div class="postHead">
        <img class="post-img" src="../image/postimg/'.$row['sn'].'.jpg" alt="">
        <p>Author: &nbsp;<b>'.$row['author'].'</b></h3>
        <p class="date">'.$row['date'].'</p>
        <p class="category">'.$row['category'].'</p>
        </div>
            <div class="content">
                <div class="txt-content">
                    <h2>'.$row['title'].'</h2>
                    <p class="content">'.$row['content'].'</p>
                </div>
            </div>
 </div>'
?>
 <script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>