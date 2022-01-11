
function sigup() {
    var key = document.getElementById("contentEdit").value;
    var ok = true;
    if (key == "") {
        alert("Vui lòng điền từ khóa !");
        ok = false;
    } else if (key == null) {
        alert("Vui lòng điền từ khóa !");
        ok = false;
    }
    return ok;
}

function notices() {
    var ok =false;
    // var check = sigup();
    var result = confirm("Are you sure?")
    if (result & sigup()) {
        ok=true;
        alert("You updated!");
    }
    else{
        alert("You not updated! ");
        // window.location.reload();
    }
    return ok;
}
