<?php
require 'function.php';
if (isset($_SESSION["id"])) {
  header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>

  <link rel="stylesheet" href="css/style2.css">
</head>

<body>
  <h2>Login</h2>
  <form autocomplete="off" action="" method="post" class="container">
    <input type="hidden" id="action" value="login">
    <label for="">Username</label>
    <input type="text" id="username" value="" required> <br>
    <label for="">Password</label>
    <input type="password" id="password" value="" required> <br>
    <button type="button" onclick="submitData();">Login</button>
  </form>
  <br>
  <a href="Register.php">Go To Register</a>
  <?php require 'script.php'; ?>
</body>

</html>