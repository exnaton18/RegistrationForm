<?php
    session_start();
    if (!isset($_SESSION['session_username'])) {
        header('Location: login.php');
    } else {
        include_once ("includes/header.php");
?>
<header>
    <a class="profileSigh" href="index.php"><?=$_SESSION['session_username']?></a>
    <a href="logout.php" id="exit">exit</a>
    <a href='index.php?lang=ru'><?=LINK_RUSSIAN?></a>
    <a href='index.php?lang=en'><?=LINK_ENGLISH?></a>
    <a href='index.php?lang=ua'><?=LINK_UKRAINIAN?></a>
</header>
<?php
    $query_string = "SELECT username, email, fullName, avatar FROM Users where username = \"" . $_SESSION['session_username'] . "\"";
    $query = mysqli_query($con, $query_string);
    $result = mysqli_fetch_array($query);
?>
<div id="mainProfileBlock">
    <div style="background: url(<?=$result['avatar']?>) center; background-size:cover;" class="profile" id="avatarProfileBlock">
    </div>
    <div class="profile" id="baseProfileBlock">
        <label for="username"><?=LABEL_USERNAME?>:</label><br>
        <p><?php echo $result['username'];?></p>
        <label for="email"><?=LABEL_EMAIL?>:</label><br>
        <p><?php echo $result['email'];?></p>
        <label for="fullName"><?=LABEL_FULLNAME?>:</label><br>
        <p><?php echo $result['fullName'];?></p>
    </div>
    <div class="profile" id="othersProfileBlock">

    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php
        include_once ("includes/footer.php");
    }
?>



