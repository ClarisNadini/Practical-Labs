
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Image Page</title>
</head>

<body>
    <form action="my_form.php" method="post" enctype="multipart/form-data">
        Image : <input type="file" name="image" id="image">
        <br><br>
        <input type="submit" name="upload" value="upload">
        <br><br>
    </form>
</body>

</html>



<?php
//Using database connection file
require __DIR__ . "./database_credentials.php";

//Connection creation ($ not used because they are constant variables)
$Conn = new mysqli(DBservername, DBusername, DBpassword, DBname);

//Check connection
if ($Conn->connect_error) {
    die("Connection failed: " . $Conn->connect_error);
    echo "Connection failed";
} else {
    echo "Connection successful " . "<br><br>";
}

//Adding the value to the table
if (isset($_POST['upload'])) {
    $fileupload = $_FILES['image']['name'];
    $fileuploadTMP = $_FILES['image']['tmp_name'];

    //This is the folder where images will be saved.
    $folder = "images/";  

    move_uploaded_file($fileuploadTMP, $folder . $fileupload);
    //Insert image details into `practical_upload_table` table
    $sql = "INSERT INTO `practical_upload_table`(`User_image`)
        VALUES ('$fileupload')";
    $qry = mysqli_query($Conn, $sql);

    if ($qry) {
        echo "<br />Uploaded" . "<br>";
        
    }
}

//Search and fetch for the results
$select = " SELECT * FROM `practical_upload_table` ";
$query = mysqli_query($Conn, $select);
    while ($row = mysqli_fetch_array($query)) {
        $image = $row['User_image'];
        //Display image from the database
        echo '<img src="images/' . $image . '" height="150" width="150" >';
    }

//Close connection
if (mysqli_close($Conn)) {
    echo "<br>" ."<br />Connection closed, thanks.";
    }
?>
