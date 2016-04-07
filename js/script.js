function valid(form) {
    var username = form.username.value;
    var email = form.email.value;
    var name = form.name.value;
    var sername = form.sername.value;
    var password = form.password.value;
    var repassword = form.repassword.value;

    var username_pattern = /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/;
    var adr_pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var name_pattern = /^[іїєа-яА-ЯёЁa-zA-Z]+$/;
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
        alert("Passwords isn't equal");
}