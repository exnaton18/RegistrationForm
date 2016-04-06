<?php
    include("includes/header.php");
?>
    <header>
        <a href='registration.php?lang=ru'>Russian</a>
        <a href='registration.php?lang=en'>English</a>
        <a href='registration.php?lang=ua'>Ukraine</a>
    </header>

    <!--suppress ALL -->
    <script type="text/javascript">
        function valid(form) {
            var username = form.username.value;
            var email = form.email.value;
            var name = form.name.value;
            var sername = form.sername.value;
            var password = form.password.value;
            var repassword = form.repassword.value;

            var username_pattern = /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/;
            var adr_pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var name_pattern = /^[а-яА-ЯёЁa-zA-Z]+$/;
            var password_pattern = /^[a-zA-Z0-9]+$/;

            if (username_pattern.test(username) == false)
                alert("Username isn't correct");
            if (adr_pattern.test(email) == false)
                alert("Email isn't correct");
            if (name_pattern.test(name) == false || name_pattern.test(sername) == false)
                alert("Ful name isn't correct");
            if (password_pattern.test(password) == false)
                alert("Password isn't correct");
            if (repassword != password)
                alert("Passwords isn't equel");
        }
    </script>

<div class="mainBlock">
    <div id="blockTitle"><h2><?=TITLE_BLOCK_SIGNUP?></h2></div>
    <form action="" id="form">
        <div class="blockField">
            <label for="username"><?=LABEL_USERNAME?></label><br>
            <input class="field" type="text" id="username" name="username" placeholder="example123"><br>
            <label for="email"><?=LABEL_EMAIL?></label><br>
            <input class="field" type="text" id="email" name="email" placeholder="example@gmail.com"><br>
            <label for="fulName"><?=LABEL_FULLNAME?></label><br>
            <input class="field" type="text" id="name" name="name" style="width: 49%;" placeholder="<?=PLACEHOLDER_NAME;?>">
            <input class="field" type="text" id="sername" name="sername" style="width: 48%;" placeholder=<?=PLACEHOLDER_SURNAME?>><br>
            <label for="password"><?=LABEL_PASSWORD?></label><br>
            <input class="field" type="password" id="password" name="password" placeholder=<?=PLACEHOLDER_PASSWORD?>><br>
            <label for="repassword"><?=LABEL_REPASSWORD?></label><br>
            <input class="field" type="password" id="repassword" name="repassword" placeholder=<?=PLACEHOLDER_REPASSWORD?>><br>
        </div>
        <p class="regText"><?=P_REG_TEXT?><br><a href="login.php?lang=<?=$_GET['lang']?>"><?=A_REG_TEXT?></a></p>
        <button class="button" onclick="valid(document.getElementById('form'))"><?=REG_BUTTON_VALUE?></button>
    </form>
</div>
<?php
    include("includes/footer.php");
?>