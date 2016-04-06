<?php
    require_once("includes/connection.php");

    $sql=mysqli_query($con, "UPDATE `Users` SET `username`='blabla' WHERE `idUser` = 1;");
    if ($sql) {
        echo "good";
    }
