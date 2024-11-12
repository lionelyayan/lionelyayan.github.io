<?php
// include 'database/db_config.php';

// $result = mysqli_query($con, "SELECT * FROM navbar");
// echo '<ul>';
// while ($row = mysqli_fetch_assoc($result)) {
//     echo '<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="' . $row['link'] . '">' . $row['title'] . '</a></li>';
// }
// echo '</ul>';

// $con->close();


echo '<ul>';
    echo '<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#">Home</a></li>';
    echo '<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#">About</a></li>';
    echo '<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#">Services</a></li>';
    echo '<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#">Portfolio</a></li>';
    echo '<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#">Contact</a></li>';
echo '</ul>';