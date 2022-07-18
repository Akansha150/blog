<?php
    if(isset($_GET["id"])){
    $id=$_GET["id"];
    echo $id;
    $connection = new mysqli("localhost", "admin", "admin","Blog");
    $sql="DELETE FROM Post WHERE ID=$id";
    $connection->query($sql);
    
    header('Location: main.php');
    }

    
   
   
?>