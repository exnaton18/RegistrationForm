<?php
    session_start();
    include("includes/header.php");
    if(isset($_SESSION["session_username"]) && !empty($_SESSION["session_username"]))
        header("Location: index.php?lang={$_GET['lang']}");
    if(!empty($_GET['username']) && !empty($_GET['password'])) {
        $username = htmlspecialchars($_GET['username']);
        $password = htmlspecialchars($_GET['password']);
        $query = mysqli_query($con, "SELECT username, password FROM Users WHERE username='" . $username . "' AND password='" . $password . "'");
        while ($row = mysqli_fetch_array($query)) {
            $dbUsername = $row['username'];
            $dbPassword = $row['password'];
        }
        if ($username == $dbUsername && $password == $dbPassword) {
            $_SESSION['session_username'] = $username;
            header("Location: index.php?lang={$_GET['lang']}");
        }
    }
?>
<header>
    <a href='login.php?lang=ru'><?=LINK_RUSSIAN?></a>
    <a href='login.php?lang=en'><?=LINK_ENGLISH?></a>
    <a href='login.php?lang=ua'><?=LINK_UKRAINIAN?></a>
</header>
<div class="mainBlock">
    <div id="blockTitle"><h2><?=TITLE_BLOCK_SIGNIN?></h2></div>
        <form action="login.php?lang=<?=$_GET['lang']?>" method="get">
            <div class="blockField">
                <label for="username"><?=LABEL_USERNAME?></label><br>
                <input class="field" type="text" id="username" name="username" placeholder="example123"><br>
                <label for="password"><?=LABEL_PASSWORD?></label><br>
                <input class="field" type="password" id="password" name="password" placeholder=<?=PLACEHOLDER_PASSWORD?>><br>
            </div>
            <p class="regText"><?=P_AUTH_TEXT?><br><a href="registration.php?lang=<?=$_GET['lang']?>"><?=A_AUTH_TEXT?></a></p>
            <input type="submit" class="button" value=<?=AUTH_BUTTON_VALUE?>>
        </form>
</div>
<?php include("includes/footer.php");?>