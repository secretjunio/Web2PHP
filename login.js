
function checkValidate() {
    if (document.getElementById("acc").value == "") {
        document.getElementById("err").innerHTML = "account not null!";
        document.getElementById("err").style.color = "red";
        document.getElementById("acc").focus();
        return false;
    }
    if (document.getElementById("pass").value == "") {
        document.getElementById("err").innerHTML = "password not null!";
        document.getElementById("err").style.color = "red";
        document.getElementById("pass").focus();
        return false;
    }
    document.getElementById("err").innerHTML = "";
    return true;
}


