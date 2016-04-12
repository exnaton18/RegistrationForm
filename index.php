<?php include_once ("includes/header.php");?>
<header>
    <a href='registration.php?lang=ru'>Russian</a>
    <a href='registration.php?lang=en'>English</a>
    <a href='registration.php?lang=ua'>Ukraine</a>
</header>
<div id="mainProfileBlock">
    <div class="profile" id="avatarProfileBlock">
        <img src="img/girl-look-up-blue-eyes-red-lips-white-dress-1680x1050.jpg" alt="img">
    </div>
    <div class="profile" id="baseProfileBlock">
        <label for="username"><?=LABEL_USERNAME?>:</label>
        <?php ?>
    </div>
    <div class="profile" id="othersProfileBlock">

    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php include_once ("includes/footer.php");?>



