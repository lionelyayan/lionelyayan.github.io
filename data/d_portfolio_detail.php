<?php
include 'database/db_config.php';

$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');

$result = mysqli_query($con, "SELECT * FROM portfolio_detail WHERE project_name='$name'");
$row = mysqli_fetch_assoc($result);
$category = $row['category'];
$client = $row['client'];
$project_name = $row['project_name'];
$project_url = $row['project_url'];
$project_date = date('M Y', strtotime($row['project_date']));
$project_desc = $row['project_desc'];

$img = '';
$arrImg = explode(',', $row['img']);
for ($i=0; $i<count($arrImg); $i++) { 
  $img .='
    <div class="swiper-slide">
      <center style="background: '. $row['background'] .';">
        <img src="'.$arrImg[$i].'" alt="">
      </center>
    </div>
  ';
}

                
$con->close();