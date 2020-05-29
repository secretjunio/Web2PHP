function testValidate() {
    if (document.getElementById("name").value == "") {
        document.getElementById("err").innerHTML = "Name is not null";
        document.getElementById("err").style.color = "red";
        document.getElementById("err").style.display = "block";
        document.getElementById("name").focus();
        return false;
    }
    if (document.getElementById("acc").value == "") {
        document.getElementById("err").innerHTML = "Account is not null";
        document.getElementById("err").style.color = "red";
        document.getElementById("err").style.display = "block";
        document.getElementById("acc").focus();
        return false;
    }
    if (document.getElementById("pass").value == "") {
        document.getElementById("err").innerHTML = "Password is not null";
        document.getElementById("err").style.color = "red";
        document.getElementById("err").style.display = "block";
        document.getElementById("pass").focus();
        return false;
    }
    if (document.getElementById("email").value == "") {
        document.getElementById("err").innerHTML = "Email is not null ";
        document.getElementById("err").style.color = "red";
        document.getElementById("err").style.display = "block";
        document.getElementById("email").focus();
        return false;
    }
    var num = Number(document.getElementById("phone").value);
    if (isNaN(num)) {
        document.getElementById("err").innerHTML = "must be number";
        document.getElementById("err").style.color = "red";
        document.getElementById("err").style.display = "block";
        document.getElementById("phone").focus();
        return false;
    }
    document.getElementById("err").innerHTML = "";
    document.getElementById("err").style.display = "none";
    
    return true;

}