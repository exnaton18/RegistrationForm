<?php
    if ($_GET["lang"]) {
        include_once("language/language." . $_GET["lang"] . ".php");
    } else {
        include_once ("language/language.ru.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=TITLE_PAGE?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>

