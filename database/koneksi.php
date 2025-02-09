<?php

$mysqli = new mysqli("mysql.railway.internal", "root", "tbCJffpICJffTTfKohviTLEHoXfYJySH", "railway");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
