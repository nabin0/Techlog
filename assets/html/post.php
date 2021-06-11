<?php $title="Contact Us - Techlog";  $readOn=' class="on" ';  include '../../templates/top.php'; ?>
<style>
    <?php include '../../templates/style.css'?><?php include '../css/readblogs.css'?>
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

echo $row[2];
echo $q;
      echo '
      <div class="box">
          <div class="card">
              <div class="content">
                  <img src="../image/postimg/'.$row['sn'].'.jpg" alt="">
                  <div class="txt-content">
                      <h3>'.$row['author'].'</h3>
                      <p class="date">'.$row['date'].'</p>
                      <p>'.$row['seo_title'].' done</p>
                  </div>
                  <a href="./post.php?id='.$row['sn'].'">READ</a>
              </div>
          </div>
      </div>'
?>
 <script>
    <?php include '../../templates/app.js' ?>
</script>
<?php include '../../templates/bottom.php'; ?>