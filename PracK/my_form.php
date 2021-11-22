<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FirstPage</title>
</head>

<body>
    <form action="my_form.php" method="post">
        Email : <input type="text" name="email" id="email" required <?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
        <br> <br>
        <input type="submit" name="add" value="Add">
        <input type="submit" name="update" value="Update">

    </form>
</body>

</html>




<?php
error_reporting(0);
//Using database connection file
require __DIR__ . "./database_credentials.php";

//Connection creation ($ not used because they are constant variables)
$Conn = new mysqli(DBservername, DBusername, DBpassword, DBname);

//Check connection
if ($Conn->connect_error) {
    die("Connection failed: " . $Conn->connect_error);
    echo "Connection failed";
} else {
    echo "Connection successful " . "<br>";
}


//Adding the value to the table
$forminput = $_POST['email'];
$sql = "INSERT INTO practical_lab_table (Search_team)
      VALUES ('$forminput')";


if ($Conn->query($sql) === TRUE) {
    echo "New record added successfuly: ";
    echo $forminput . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $Conn->error;
}


//Search for the results
$sql = "SELECT Lab_id, Search_team FROM practical_lab_table";
$results = $Conn->query($sql);


//Fetch for the results from database
if ($results->num_rows > 0) {
    //output data for each row
    while ($row = $results->fetch_assoc()) {
        echo "Lab_id: " . $row["Lab_id"] . " & Search Term: " . $row["Search_team"] . "<br>";
    }
} else {
    echo "No results found, sorry";
}

//Update contant in a table
$sql = "UPDATE practical_lab_table SET Search_team='wanjalamokami@gmail.com' WHERE Lab_id=2";
if ($Conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $Conn->error;
}

$Conn->close();

?>