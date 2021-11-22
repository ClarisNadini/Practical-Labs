<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FirstPage</title>
    <style>
        input[type='text'] {
            padding: 10px;
            font-size: 1.2em;
        }

        input[type='submit'] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.5em;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!--Accepting input from the user and sending it using post method (stateless handling - user input remains in text box)-->
    <!--Results show on the same page-->
    <form action="" onsubmit="validate()">
        <input type="text" id="phone-number" placeholder="phone number" /> <br>
        <input type="text" id="postal-code" placeholder="postal code" /><br>
        <input type="submit" />
    </form>



    <!--Printing results on same page-->
    <?php
    if (isset($_GET["submit"])) {
        echo $_GET['first_name'] . " " . $_GET['phone_number'];
    } ?>



    <!-- THIS IS SUPPOSED TO BE ON THE JAVASCRIPT FILE FOR REGEX
    Date
        /^\d{2}\/\d{2}\/\d{4}$/ This simple regular expression just checks for 2 digits / 2 digits / 4 digits date format
    If you want more complex, tight validation for mm/dd/yyyy format, here is the format
        /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/ source

    URL A URL of the format http(s)://website/page can be validated with this regular expression:
        https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*) source

    Any Alpha Numeric String If you want to allow only alphanumeric characters, use this regular expression:
        /^[a-zA-Z0-9]*$/

    Decimal Numbers For decimal numbers with one decimal point, the regular expression is:
        /^[0-9]+\.?[0-9]*$/
    -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript_regex_example.js"></script>


</body>

</html>