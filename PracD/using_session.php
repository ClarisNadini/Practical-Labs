
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Use of sessions</title>
</head>

<body>
<h3>Use of session</h3>
     <?php
     // Starting the session
     session_start(); //Always starts and isnt repeated

        // Store Session Data : Initializing Session with value of PHP Variable
        if (isset($_GET["submit"])) {
            $_SESSION['first_name_session']= $_GET['first_name']; 
            $_SESSION['last_name_session']= $_GET['last_name'];  
            }       ?>

        <!--Accepting input from the user, Results show on the same page-->
        <form action="using_session.php" method="get">
            First Name :  <input type="text" id="first_name" name="first_name" placeholder="First Name" required
                value="<?php echo (isset($_SESSION['first_name_session'])) ? $_SESSION['first_name_session'] : '';?>">
             <br> <br>
            Last Name :  <input type="text" id="last_name" name="last_name" placeholder="Last Name" required
                value="<?php echo (isset($_SESSION['last_name_session'])) ? $_SESSION['last_name_session'] : '';?>">
            <br> <br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <!--Printing results on same page-->
        <?php
            if (isset($_GET["submit"])) {
                echo $_GET['first_name'] . " " . $_GET['last_name'];
            } ?>
            
 <br> <br>
     <?php
     if (isset($_POST["submit"])) {
            $_SESSION['email_session']= $_POST['email'];  
            }       ?>
    <!--Results show on a different page-->
    <form action="results_page.php" method="post">
        Email :  <input type="text" name="email" id="email" required
            value="<?php echo (isset($_SESSION['email_session'])) ? $_SESSION['email_session'] : '';?>">
        <br> <br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>
