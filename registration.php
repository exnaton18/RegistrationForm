<?php include("includes/header.php");?>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <header>
        <a href='registration.php?lang=ru'><?=LINK_RUSSIAN?></a>
        <a href='registration.php?lang=en'><?=LINK_ENGLISH?></a>
        <a href='registration.php?lang=ua'><?=LINK_UKRAINIAN?></a>
    </header>
<div class="mainBlock">
    <div id="blockTitle"><h2><?=TITLE_BLOCK_SIGNUP?></h2></div>
    <form action="check.php" method="GET" id="form" enctype="multipart/form-data">
        <div class="blockField">
            <label for="username"><?=LABEL_USERNAME?></label><br>
            <input class="field" type="text" id="username" name="username" placeholder="example123">
            <label for="email"><?=LABEL_EMAIL?></label><br>
            <input class="field" type="text" id="email" name="email" placeholder="example@gmail.com"><br>
            <label><?=LABEL_FULLNAME?></label><br>
            <input class="field" type="text" id="name" name="name" style="width: 46%;" placeholder=<?=PLACEHOLDER_NAME;?>>
            <input class="field" type="text" id="sername" name="sername" style=" width: 46%;" placeholder=<?=PLACEHOLDER_SURNAME?>><br>
            <label for="password"><?=LABEL_PASSWORD?></label><br>
            <input class="field" type="password" id="password" name="password" placeholder=<?=PLACEHOLDER_PASSWORD?>><br>
            <label for="repassword"><?=LABEL_REPASSWORD?></label><br>
            <input class="field" type="password" id="repassword" name="repassword" placeholder=<?=PLACEHOLDER_REPASSWORD?>><br>
            <label><?=LABEL_UPLOAD?></label><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            <label>Проверчный код</label><br>
            <img src = "captcha.php" style="margin-left: 1%"/><br>
            <input class="field" type = "text" name = "kapcha" style="width: 175px"/>
        </div>
        <p class="regText"><?=P_REG_TEXT?><br><a href="login.php?lang=<?=$_GET['lang']?>"><?=A_REG_TEXT?></a></p>
        <button class="button" onclick="return valid(document.getElementById('form'))"><?=REG_BUTTON_VALUE?></button>
    </form>
</div>
<?php include("includes/footer.php");?>