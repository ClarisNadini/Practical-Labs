<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FirstPage</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="my_form_javascript.js"></script>
</head>


<body>
    <!--Results show on the same page-->
    <form action="" onsubmit="validate()" method="get">
        Phone Number : <input type="text" id="phone-number" name="phone-number" placeholder="Phone Number" required <?php echo (isset($_GET['phone-number'])) ? $_GET['phone-number'] : ''; ?>>
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <br>

    <!--Printing results on same page-->
    <?php
    if (isset($_GET["submit"])) {
        echo $_GET['phone-number'];
    } ?>

    <!--Your phone number is:
You were calling it outside the if function, plese dont repeat that. Alternatively...-->




</body>

</html>