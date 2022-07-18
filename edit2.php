<?php
    $Title = $_POST['Title'];
    $Discription = $_POST['Discription'];
    $id = $_POST['id'];
    if (empty($Discription) || empty($Title)) {
        // $errorMessage = "Both Field are Required";
        echo"<script>alert('Both Field Required')</script>";
        exit;
    }
    
    $connection = new mysqli("localhost", "admin", "admin","Blog");
    $sql = "UPDATE Post SET Title = '$Title', Discription = '$Discription' WHERE ID ='$id' ";
    echo var_dump($sql);

    if($connection->query($sql) === TRUE){
        header('Location: main.php');
    }else{
        echo $connection->error;
    }
