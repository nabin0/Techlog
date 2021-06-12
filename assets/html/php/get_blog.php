<?php 
function get_blog(){
    $server = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$con = mysqli_connect($server, $username, $password, $dbname);

$query = "SELECT * FROM post ORDER BY date LIMIT 20";
$tdata = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($tdata)){
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
                <a type="submit" href="./post.php?q='.$row['sn'].'">READ</a>
            </div>
        </div>
    </div>
';



}

}

?>
