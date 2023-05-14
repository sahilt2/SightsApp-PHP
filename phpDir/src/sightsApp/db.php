<?php
$host = 'db';
$dbname = 'sightsDB';
$user = 'root';
$pass = 'lionPass';

// check mysql connection status

$conn = new mysqli($host, $user, $pass, $dbname);

if(!$conn) {
    die( "Connection failed" . mysqli_error($conn));
  }