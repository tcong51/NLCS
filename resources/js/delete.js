function deleteTree() {
    var ok = false;
    var result = confirm("Do you want to continue?")
    if (result) {
        ok = true;
        alert("Deleted");
    } else {
        alert("Đã hủy!");
    }
    return ok;
}
