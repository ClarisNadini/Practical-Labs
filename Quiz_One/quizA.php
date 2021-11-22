<!DOCTYPE html>
<html>

<head>
    <title>Ashesi</title>
    <meta charset="utf-8" />
    <style>
        main {
            margin: 170px;
            padding: 25px;
        }

        #submit {
            padding: 20px;
        }
    </style>

</head>

<body>
    <main id="main-content">
        <form action="quizA.php" method="get">

            <br />
            <fieldset>
                <legend><strong>Users</strong></legend>
                <select name="dropdown">
                    <option name="users" value="AA" selected class="users">Doris</option>
                    <option name="users" value="A" class="users">Kwame</option>
                    <option name="users" value="B" class="users">Ama</option>
                    <option name="users" value="C" class="users">William</option>
                    <option name="users" value="D" class="users">Grace</option>
                </select>
            </fieldset>
            <br>
            <fieldset>
                <legend><strong>Preference</strong></legend>
                <input type="checkbox" name="football" value="on" class="fevs"> Football
                <input type="checkbox" name="banku" value="on" class="fevs"> Banku
                <input type="checkbox" name="rice" value="on" class="fevs"> Rice
                <input type="checkbox" name="waakye" value="on" class="fevs"> Waaakye
                <input type="checkbox" name="driving" value="on" class="fevs"> Driving
            </fieldset>


            <br />
            <div id="submit">
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>

        <?php

        $resultsA = ('.users');
        $resultsB = ('.fevs');

        if (isset($_GET["submit"])) {
            echo $_GET['resultsA'] . " " . $_GET['resultsB'];
        }

        ?>


    </main>
</body>

</html>