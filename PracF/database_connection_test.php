
<?php

require __DIR__ . "./database_credentials.php";

//Connection creation ($ not used because they are constant variables)
$Conn = new mysqli(DBservername, DBusername, DBpassword, DBname);

//Check connection
    if ($Conn->connect_error) {
        die ("Connection failed: " . $Conn->connect_error);
        echo "Connection failed";
    }
    else {
        echo "Connection successful";
    }
    $Conn -> close();
?>
