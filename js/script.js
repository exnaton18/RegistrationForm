function valid(form) {
    var username   = form.username.value,
        email      = form.email.value,
        name       = form.name.value,
        sername    = form.sername.value,
        password   = form.password.value,
        repassword = form.repassword.value;

    var username_pattern = /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/;
    var adr_pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var name_pattern = /^[іїєа-яА-ЯёЁa-zA-Z]+$/;
    var password_pattern = /^[a-zA-Z0-9]+$/;

    // var check = true;
    // if (username != undefined && email != undefined && name != undefined && sername != undefined && )
    if (username_pattern.test(username) == false) return false;
    
    if (adr_pattern.test(email) == false) {
        // alert("Email isn't correct");
        // check = check * false;
        return false;
    }
    if (name_pattern.test(name) == false || name_pattern.test(sername) == false){
        // alert("Ful name isn't correct");
        // check = check * false;
        return false;
    }
    if (password_pattern.test(password) == false) {
        // alert("Password isn't correct");
        // check = check * false;
        return false;
    }
    if (repassword != password) {
        // alert("Passwords isn't equal");
        // check = check * false;
        return false;
    }
    
    return true;
}