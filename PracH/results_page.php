
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


$Conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SecPage</title>
</head>

<body>
  <!--Printing results on different page (this is an info extracted from the using_session file-->
 Welcome, your email address is:
 <?php
      echo $_POST['email'];
    ?> 

</body>

</html>