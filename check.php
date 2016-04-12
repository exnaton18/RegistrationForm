<?php
    include_once ("includes/connection.php");
    function validation (){
        $username_pattern = '/^[a-z0-9_-]{3,16}$/';
        $email_pattern = '/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/';
        $name_pattern = '/^[іїєа-яА-ЯёЁa-zA-Z]/';
        $password_pattern = '/^[a-z0-9_-]{3,16}$/';

        if (isset($_GET['username']) && !empty($_GET['username'])){
            if (!preg_match($username_pattern, $_GET['username']))
            return false;
        }

        if (isset($_GET['email']) && !empty($_GET['email'])){
            if (!preg_match($email_pattern, $_GET['email']))
                return false;
        }

        if ((isset($_GET['name']) && !empty($_GET['name']) || ((isset($_GET['sername'])) && (!empty($_GET['sername']))))){
            if (!preg_match($name_pattern, $_GET['email']) || !preg_match($name_pattern, $_GET['sername']))
                return false;
        }

        if (isset($_GET['password']) && !empty($_GET['password'])){
            if (!preg_match($password_pattern, $_GET['password']))
                return false;
        }

        if (isset($_GET['repassword']) && !empty($_GET['repassword'])){
            if ($_GET['repassword'] != $_GET['password'])
                return false;
        }
        return true;
    }

    if (validation()) {
        $full_name = $_GET['name']." ".$_GET['sername'];
        $sql = mysqli_query($con, "UPDATE `Users_DB`.`Users` SET `username`='".$_GET['username']."',
                                                           `email` = '".$_GET['email']."',
                                                           `fulUsersName`='".$full_name."', 
                                                           `password`='".$_GET['password']."' 
                                                           WHERE `idUser`='1';");
        if ($sql) {
            echo "<script>alert('Данные успешно добавлены в таблицу.')</script>";
        } else {
            echo "<script>alert('Произошла ошибка.')</script>";
        }
    }