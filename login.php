<?php
    include("includes/header.php");
?>
<div class="mainBlock">
    <div id="blockTitle"><h2>Authorisation</h2></div>
    <div class="blockField">
        <form action="">
            <label for="username">Username</label><br>
            <input class="field" type="text" id="username"/><br>
            <label for="password">Password</label><br>
            <input class="field" type="text" id="password"/><br>
        </form>
    </div>
    
    <p class="regText">Ещё не зарегистрированы?<br><a href="registration.php">Перейти на форму регистрации.</a></p>
    <input type="button" class="button" value="ok" />
</div>
<?php
    include("includes/footer.php");
?>