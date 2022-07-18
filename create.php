<?php
$connection = new mysqli("localhost", "admin", "admin", "Blog");

$Discription = "";
$Title = "";
$errorMessage = "";
$successMessage = "";

// echo $Discription;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Discription = $_POST["Discription"];
    // echo $Discription;
    $Title = $_POST["Title"];


    do {
        if (empty($Discription) || empty($Title)) {
            // $errorMessage = "Both Field are Required";
            echo"<script>alert('Both Field Required')</script>";
            break;
        }

        //query
        $sql = "INSERT INTO Post (Title , Discription) VALUES ('$Title','$Discription')";
        $result = $connection->query($sql);
        // echo var_dump($result);


        echo "Registration Successful";

        $Discription = "";
        $Title = "";

        $successMessage = "Successs";

        header("location: main.php");
        exit;
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Blog</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style3.css">

</head>

<body>
    <div class="container">
        <?php
        if (!empty($errorMessage)) {
           echo "<script>alert('Something went wrong')<script>";
        }
        ?>
        <h2>NEW BLOG</h2>
        <form method="POST" action="create.php">
            <label for="Title">Blog Title</label><br>
            <input type="text" name="Title"><br>
            <label for="Title">Blog Discription</label><br>
            <textarea type="text" name="Discription" cols="70" rows="20" ;></textarea><br>
           <?php
            // if (!empty($successMessage)) {
            //     echo "All Good";
            // }
            // ?>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>