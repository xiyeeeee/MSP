/* Transfer between */
function autofill(product){
    var name = product.split(' ');
    var locationString = 'request.php?'
    var i;
    for (i = 0; i < name.length; i++){
        locationString += name[i] + "%20";
    }
    locationString = locationString.slice(0, -3);
    location.href = locationString;
}

var enquire = location.search;
enquire = enquire.substring(1);
enquire = enquire.split("%20");
enquire = enquire.join(" ")
document.getElementById("products").value = enquire;
document.getElementById("subject").value = "RE: Enquire on " + enquire

/* Transfer within */
var selection;
selection = document.getElementById("products");
selection.addEventListener("change", subjectTitle);

function subjectTitle(){
    var subjectstring;
    subjectstring = "RE: Enquire on " + selection.value;
    document.getElementById("subject").value = subjectstring;
}
