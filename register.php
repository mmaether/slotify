<?php

  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  $account = new Account();

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if (isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Slotify</title>
</head>
<body>
  <div id="input-container">
    <form id="loginForm" action="register.php" method="POST">
      <h2>Login to your account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. bartSimpson" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" name="loginPassword" required placeholder="Your password">
      </p>
      <button type="submit" name="loginButton">Log In</button>
    </form>


    <form id="registerForm" action="register.php" method="POST">
      <h2>Create your free account</h2>
      <p>
        <?php echo $account->getError(Constants::$usernameCharacters); ?>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="bartSimpson" value="<?php getInputValue('username'); ?>" required>
      </p>

      <p>
        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" placeholder="e.g. Bart" value="<?php getInputValue('firstName'); ?>" required>
      </p>

      <p>
        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" placeholder="e.g. Simpson" <?php getInputValue('lastName') ?> required>
      </p>

      <p>
        <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
        <?php echo $account->getError(Constants::$emailInvalid); ?>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="e.g. bart@gmail.com" <?php getInputValue('email') ?> required>
      </p>

      <p>
        <label for="email2">Confirm Email</label>
        <input type="email" id="email2" name="email2" placeholder="e.g. bart@gmail.com" <?php getInputValue('email2'); ?> required>
      </p>

      <p>
        <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
        <?php echo $account->getError(Constants::$passwordCharacters); ?>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password" <?php getInputValue('password'); ?> required>
      </p>

      <p>
        <label for="password2">Confirm Password</label>
        <input type="password" id="password2" name="password2" placeholder="Your password" <?php getInputValue('password2'); ?> required>
      </p>
      <button type="submit" name="registerButton">Sign Up</button>
    </form>

  </div>
</body>
</html>