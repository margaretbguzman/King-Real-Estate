<html>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $correctpass = 123;
            if ($pass == $correctpass) {
                echo "<h1>Welcome $user.</h1>";
            } else {
                echo "<h1>Incorrect Password</h1>";
            }
        ?>
    </body>
</html>