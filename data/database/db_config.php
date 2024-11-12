<?php
date_default_timezone_set('Asia/Jakarta');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'devertindo';

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}