<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FirstPage</title>
</head>

<body>

    <!--Results show on a different page-->
    <form action="results_page.php" method="post">
        Email : <input type="text" name="email" id="email" required <?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
        <br> <br>
        <input type="submit" name="add" value="Add">
    </form>


</body>

</html>