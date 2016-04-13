<?php
    if ($_GET["lang"]) {
        include_once("language/language." . $_GET["lang"] . ".php");
    } else {
        include_once ("language/language.ru.php");
    }
    include_once ("includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=TITLE_PAGE?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

