<?php
    include("includes/header.php");
?>
<div class="mainBlock">
    <div id="blockTitle"><h2>Registration</h2></div>
    <div class="blockField">
        <label for="username">Username</label><br>
        <input class="field" type="text" id="username"/><br>
        <label for="email">E-mail</label><br>
        <input class="field" type="text" id="email"/><br>
        <label for="fulName">Ful name</label><br>
        <input class="field" type="text" id="fulName"/><br>
        <label for="password">Password</label><br>
        <input class="field" type="text" id="password"/><br>
        <label for="confirm">Confirm password</label><br>
        <input class="field" type="text" id="confirm"/><br>
    </div>
    <p class="regText">Уже зарегистрированы?<br><a href="login.php">Введите имя пользователя</a></p>
    <input type="button" class="button" value="ok" />
</div>
<?php
    include("includes/footer.php");
?>