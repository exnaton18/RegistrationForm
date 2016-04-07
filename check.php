<?php
    $username_pattern = '/^[a-z0-9_-]{3,16}$/';
    $email_pattern = '/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/';
    $name_pattern = '/^[іїєа-яА-ЯёЁa-zA-Z]/';
    $password_pattern = '/^[a-z0-9_-]{3,16}$/';
    if (isset($_GET['username']) && !empty($_GET['username'])){
        if (!preg_match($username_pattern, $_GET['username']))
            echo "username isn't correct";
        else echo "username is correct <br />";
    }
    if (isset($_GET['email']) && !empty($_GET['email'])){
        if (!preg_match($email_pattern, $_GET['email']))
            echo "email isn't correct <br />";
        else echo "email is correct <br />";
    }
    if ((isset($_GET['name']) && !empty($_GET['name']) || ((isset($_GET['sername'])) && (!empty($_GET['sername']))))){
        if (!preg_match($name_pattern, $_GET['email']) || !preg_match($name_pattern, $_GET['sername']))
            echo "full name isn't correct <br />";
        else echo "full name is correct <br />";
    }
    if (isset($_GET['password']) && !empty($_GET['password'])){
        if (!preg_match($password_pattern, $_GET['password']))
            echo "password isn't correct <br />";
        else echo "password is correct <br />";
    }
    if (isset($_GET['repassword']) && !empty($_GET['repassword'])){
        if ($_GET['repassword'] != $_GET['password'])
            echo "passwords aren't equal <br />";
        else echo "passwords are equal <br />";
    }



