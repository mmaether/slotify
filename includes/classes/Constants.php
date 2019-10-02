<?php
  class Constants {
    // Registration error messages.
    public static $usernameCharacters = "Your username must be between 5 and 25 characters.";
    public static $firstNameCharacters = "Your first name must be between 2 and 25 characters.";
    public static $lastNameCharacters = "Your last name must be between 2 and 25 characters.";
    public static $emailsDoNotMatch = "Your emails don't match.";
    public static $emailInvalid = "Email is invalid.";
    public static $passwordsDoNotMatch = "Your passwords don't match.";
    public static $passwordNotAlphanumeric = "Your passwords can only contain numbers and letters.";
    public static $passwordCharacters = "Your password must be between 5 and 30 characters.";
    public static $usernameTaken = "This username already exists.";
    public static $emailTaken = "This email is already in use.";

    // Login error messages.
    public static $loginFailed = "Your username or password was incorrect.";
  }
?>