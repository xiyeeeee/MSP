function toggle(id){

    var selected = id;
    if (selected == "view_enquiries"){
        document.getElementById(selected).style.display = "block";
        document.getElementById("change_password").style.display = "none";
        document.getElementById("manage_users").style.display = "none";
    } else if (selected == "change_password"){
        document.getElementById("view_enquiries").style.display = "none";
        document.getElementById(selected).style.display = "block";
        document.getElementById("manage_users").style.display = "none";
    } else if (selected == "manage_users"){
        document.getElementById("view_enquiries").style.display = "none";
        document.getElementById("change_password").style.display = "none";
        document.getElementById(selected).style.display = "block";
    }
}
