
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FirstPage</title>
</head>

<body>
    <!--Accepting input from the user and sending it using post method (stateless handling - user input remains in text box)-->
    <!--Results show on the same page-->
    <form action="my_form.php" method="get">
        First Name :  <input type="text" id="first_name" name="first_name" placeholder="First Name"
            <?php echo (isset($_GET['first_name'])) ? $_GET['first_name'] : '';?>">
         <br> <br>
        Last Name :  <input type="text" id="last_name" name="last_name" placeholder="Last Name" pattern=[A-Z\sa-z]{3,15} required
            <?php echo (isset($_GET['last_name'])) ? $_GET['last_name'] : '';?>">
        <br> <br>
        <input type="submit" value="Submit" name="submit">
    </form>

        <!--Printing results on same page-->
         <?php
            if (isset($_GET["submit"])) {
                echo $_GET['first_name'] . " " . $_GET['last_name'];
            } ?>
            
 <br> <br>

    <!--Results show on a different page-->
    <form action="results_page.php" method="post">
        Email :  <input type="text" name="email" id="email" required
            <?php echo (isset($_POST['email'])) ? $_POST['email'] : '';?>">
        <br> <br>
        <input type="submit" name="submit">
    </form>

</body>
</html>
