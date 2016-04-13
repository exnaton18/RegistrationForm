<?php
    include_once ("includes/connection.php");
    session_start();
    if (validation()) {
        if ($_GET['fileToUpload']) $img = $_FILES["fileToUpload"]["name"];
        else $img = "profile.jpg";
        $fullName = $_GET['name']." ".$_GET['sername'];
        $query = mysqli_query($con, "INSERT INTO `Users_DB`.`Users` (`username`, 
                                                                     `email`, 
                                                                     `fullName`,
                                                                     `password`, 
                                                                     `avatar`) 
                                                             VALUES ('".$_GET['username']."',
                                                                     '".$_GET['email']."', 
                                                                     '".$fullName."',
                                                                     '".$_GET['password']."',
                                                                     '".$img."');");
        header("location: login.php");
    } else header("location: registration.php");

function validation () {
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

        if($_GET['kapcha'] != $_SESSION['rand_code'])
            return false;
        return true;
    }

    function upload_image () {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if(isset($_GET["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


