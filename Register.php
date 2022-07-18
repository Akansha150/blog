<!-- Session code and Js code-->
<?php
require 'function.php';
if (isset($_SESSION["id"])) {
  header("Location: main.php");
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/style2.css">
</head>

<body>
  <h2>Registration Form</h2>
  <form autocomplete="off" action="" method="post" class="container">
    <input type="hidden" id="action" value="register">
    <label for="">Full Name</label>
    <input type="text" id="name" value=""> <br>

    <label for="">Username</label>
    <input type="text" id="username" value=""> <br>

    <label for="">Password</label>
    <input type="password" id="password" value=""> <br>

    <label for="">E-mail</label>
    <input type="email" id="email" value=""> <br>

    <button type="button" onclick="submitData();">Register</button>
  </form>
  <br>
  <a href="login.php">Go To Login</a>
  <?php require 'script.php'; ?>
</body>

</html>