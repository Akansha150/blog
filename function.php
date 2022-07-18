<?php
session_start();
$conn = mysqli_connect("localhost", "admin", "admin", "Post");
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // else{
      //   echo "Connected successfully";
      // }
// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email=$_POST["email"];

  
  if(empty($name) || empty($username) || empty($password) ||empty($email)){
    echo "Please Fill Out The Form!";
    exit;
  }
  
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // echo("$email is a valid email address");
 }
 else{
    echo("$email is not a valid email address");
    exit;
 }
  $user = mysqli_query($conn, "SELECT * FROM Register WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query = "INSERT INTO Register (Name, username, password, email) VALUES ('$name','$username','$password','$email')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($username) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM Register WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];

     
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
