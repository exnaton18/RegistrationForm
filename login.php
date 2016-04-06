<?php
    include("includes/header.php");
?>
<header>
    <a href='login.php?lang=ru'>Russian</a>
    <a href='login.php?lang=en'>English</a>
    <a href='login.php?lang=ua'>Ukraine</a>
</header>
<div class="mainBlock">
    <div id="blockTitle"><h2><?=TITLE_BLOCK_SIGNIN?></h2></div>
    <div class="blockField">
        <form action="">
            <label for="username"><?=LABEL_USERNAME?></label><br>
            <input class="field" type="text" id="username"/><br>
            <label for="password"><?=LABEL_PASSWORD?></label><br>
            <input class="field" type="password" id="password"/><br>
        </form>
    </div>
    
    <p class="regText"><?=P_AUTH_TEXT?><br><a href="registration.php?lang=<?=$_GET['lang']?>"><?=A_AUTH_TEXT?></a></p>
<!--    <input type="button" class="button" value=--><?//=AUTH_BUTTON_VALUE?><!-->
    <button class="button" onclick="valid(document.getElementById('form'))"><?=AUTH_BUTTON_VALUE?></button>
</div>
<?php
    include("includes/footer.php");
?>