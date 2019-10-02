<?php
  include("includes/config.php");

  // log out manually
  //session_destroy();

  if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
  } else {
    header("Location: register.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Slotify</title>
</head>
<body>
  Hello
</body>
</html>