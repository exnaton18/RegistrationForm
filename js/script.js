function valid(form) {
    var username   = form.username.value,
        email      = form.email.value,
        name       = form.name.value,
        sername    = form.sername.value,
        password   = form.password.value,
        repassword = form.repassword.value;

    var exUsername = /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/;
    var exEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var exName = /^[іїєа-яА-ЯёЁa-zA-Z]+$/;
    var exPassword = /^[a-zA-Z0-9]+$/;

    if (exUsername.test(username) == false) {
        message("username", "Username isn't correct");
        return false;
    }

    if (exEmail.test(email) == false) {
        message("email", "Email isn't correct");
        return false;
    }

    if (exName.test(name) == false) {
        message("name", "Name isn't correct");
        return false;
    }

    if (exName.test(sername) == false) {
        message("sername", "Surname isn't correct");
        return false;
    }

    if (exPassword.test(password) == false) {
        message("password", "Password isn't correct");
        return false;
    }

    if (repassword != password) {
        message("repassword", "Passwords isn't equal");
        return false;
    }
}

function message(id, message) {
    alert(message);
    document.getElementById(id).className = 'error';
    document.getElementById(id).onfocus = function () {
        if (this.className == 'error') {
            this.className = "field";
            error.innerHTML = "";
        }
    };
}