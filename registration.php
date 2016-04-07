<?php
    include("includes/header.php");
?>
    <header>
        <a href='registration.php?lang=ru'>Russian</a>
        <a href='registration.php?lang=en'>English</a>
        <a href='registration.php?lang=ua'>Ukraine</a>
    </header>

    <!--suppress ALL -->
    <script type="text/javascript" src="js/script.js"></script>

<div class="mainBlock">
    <div id="blockTitle"><h2><?=TITLE_BLOCK_SIGNUP?></h2></div>
    <form action="check.php" method="get" id="form" >
        <div class="blockField">
            <label for="username"><?=LABEL_USERNAME?></label><br>
            <input class="field" type="text" id="username" name="username" placeholder="example123"><br>
            <label for="email"><?=LABEL_EMAIL?></label><br>
            <input class="field" type="text" id="email" name="email" placeholder="example@gmail.com"><br>
            <label><?=LABEL_FULLNAME?></label><br>
            <input class="field" type="text" id="name" name="name" style="width: 49%;" placeholder="<?=PLACEHOLDER_NAME;?>">
            <input class="field" type="text" id="sername" name="sername" style="width: 48%;" placeholder=<?=PLACEHOLDER_SURNAME?>><br>
            <label for="password"><?=LABEL_PASSWORD?></label><br>
            <input class="field" type="password" id="password" name="password" placeholder=<?=PLACEHOLDER_PASSWORD?>><br>
            <label for="repassword"><?=LABEL_REPASSWORD?></label><br>
            <input class="field" type="password" id="repassword" name="repassword" placeholder=<?=PLACEHOLDER_REPASSWORD?>><br>
        </div>
        <p class="regText"><?=P_REG_TEXT?><br><a href="login.php?lang=<?=$_GET['lang']?>"><?=A_REG_TEXT?></a></p>
        <button class="button" onclick="return valid(document.getElementById('form'))"><?=REG_BUTTON_VALUE?></button>
    </form>
</div>
<?php
    include("includes/footer.php");
?>