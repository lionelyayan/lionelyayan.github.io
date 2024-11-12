<?php
// include 'database/db_config.php';

// $currentPage = htmlspecialchars(basename($_SERVER['PHP_SELF']), ENT_QUOTES, 'UTF-8');

// $result = mysqli_query($con, "SELECT * FROM navbar");
// $first = true;
// echo '<ul>';
// while ($row = mysqli_fetch_assoc($result)) {
//     $link = $currentPage == 'portfolio-details.php' ? $_SERVER['HTTP_REFERER'].$row['link'] : $row['link'];
//     echo '<li><a class="nav-link scrollto" href="' . $link . '">' . $row['title'] . '</a></li>';
//     $first = false;
// }
// echo '</ul>';

// $con->close();



echo '<ul>';
    echo '<li><a class="nav-link scrollto" href="#">Home</a></li>';
    echo '<li><a class="nav-link scrollto" href="#about">About</a></li>';
    echo '<li><a class="nav-link scrollto" href="#project">Project</a></li>';
    echo '<li><a class="nav-link scrollto" href="#footer">Contact</a></li>';
echo '</ul>';