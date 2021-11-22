
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ThirdPage</title>
</head>

<body>
<form action="print_belowform.php" method="post">
        Name :  <input type="text" id="namey" name="namey" placeholder="Name"
            <?php echo (isset($_POST['namey'])) ? $_POST['namey'] : '';?>">
         <br> <br>
        Email :  <input type="text" id="email" name="email" placeholder="Email" required
            <?php echo (isset($_POST['email'])) ? $_POST['email'] : '';?>">
        <br> <br>
         Subject :  <input type="text" id="subject" name="subject" placeholder="Subject" required
            <?php echo (isset($_POST['subject'])) ? $_POST['subject'] : '';?>">
        <br> <br>
         Message :  <input type="text" id="message" name="message" placeholder="Message" required
            <?php echo (isset($_POST['messsage'])) ? $_POST['message'] : '';?>">
        <br> <br>

        <input type="submit" value="Submit" name="submit">
    </form>

<br> <br>

<?php
    if (isset($_POST["submit"])) {
      echo $_POST['namey']." ".$_POST['email']." ".$_POST['subject']." ".$_POST['message'];
    } 
?>

</body>
</html>





