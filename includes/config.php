<?php
  ob_start();
  session_start();
  $timezone = date_default_timezone_set("America/New_York");

  $con = mysqli_connect("localhost:3307", "root", "root", "slotify");

  if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

?>