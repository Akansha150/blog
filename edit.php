<link rel="stylesheet" href="css/style3.css">
<?php

$id = $_GET['id'];
//echo $id;

//Create Connection
$conn = new mysqli("localhost", "admin", "admin", "Blog");

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "</br> </br>";


$sql = "SELECT * FROM Post WHERE ID='$id'";
$result = $conn->query($sql);


echo "<div class='container'>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>

        <form id="form4" action="edit2.php" method="post">
            <h2>Editing Post</h2><br><br>

            <input value="<?php echo $row['ID'] ?>" name="id" type="hidden"><br><br>

            <label for="post_name"><b>Post Name:</b></label> <br>
            <input value="<?php echo $row['Title'] ?>" name="Title"><br><br>

            <label for="post_description"> <b>Post Description:</b></label> <br>
            <textarea name="Discription" cols="70" rows="20"><?php echo $row['Discription'] ?></textarea><br><br>
            <?php echo '<br><button >Update</button>';
            echo '</div>'; ?>

    <?php

    }
}
    ?>


        </form>