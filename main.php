<?php

require 'function.php';
if (isset($_SESSION["id"])) {
  $id = $_SESSION["id"];
  // echo $id;
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM Register WHERE id = $id"));
  echo "Hello  ".$user['Name'];
} else {
  header("Location: main.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Welcome to my Blog</title>

</head>

<body>
  <div class="uprContainer">
    <div class="action">
      <div>
        <button><a href='create.php'>Add Blog</a></button>
      </div>
      <div>
        <button><a href="logout.php">Logout</a>
      </div>
    </div>
  </div>

  <div class="container">
    <h2>List of Blogs</h2>
    <?php
    $connection = new mysqli("localhost", "admin", "admin", "Blog");
    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
    }
    // echo "Connected successfully";

    $sql = "SELECT * FROM Post";
    $result = $connection->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='table'>
            <h1>$row[Title]</h1>
            <p>$row[Discription]</p>
            <button ><a href='edit.php?id=$row[ID]'>Edit</a></button>
            <button><a href='delete.php?id=$row[ID]'>Delete</a></button>
        </div><br>";
    }
    ?>
  </div>

</body>

</html>