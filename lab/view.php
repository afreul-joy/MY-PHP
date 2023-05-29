<?php
    echo $_COOKIE["username"];

    echo "<br/>";

    session_start();
    echo$_SESSION['username'];
    ?>