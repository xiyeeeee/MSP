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
//Store individual product page into sessionStorage
function storeTraining(tName) {
    var options = ["Target Market Segmentation Workshop", "User Persona Segmentation Workshop", "Product Positioning Segmentation Workshop", "Product Innovation Co-Creation Workshop", "Service Experience Co-Creation Workshop", "Brand Storytelling Co-Creation Workshop", "Consumer Insight Brainstorm Workshop", "Product Demand Brainstorm Workshop", "Marketing Creative Brainstorm Workshop", "Team Collaboration Activation Workshop", "Team Culture Activation Workshop", "Team Decision-Making Activation Workshop"];

    options.forEach(array);

    function array(value) {
        if (value == tName) {
            sessionStorage.trainingIndex = options.indexOf(value);
        }
    }
}

//Fill the subject field with the value of product
function storeSub() {
    document.getElementById("product").selectedIndex = sessionStorage.productIndex;

    var product = document.getElementById("product").value;

    sessionStorage.subject = product;
    document.getElementById("subject").value = sessionStorage.subject;
}

//Storing first optgroup into array

function productlist1() {
    var select = document.getElementById("product");

    var options = ["Target Market Segmentation Workshop", "User Persona Segmentation Workshop", "Product Positioning Segmentation Workshop", "Product Innovation Co-Creation Workshop", "Service Experience Co-Creation Workshop", "Brand Storytelling Co-Creation Workshop", "Consumer Insight Brainstorm Workshop", "Product Demand Brainstorm Workshop", "Marketing Creative Brainstorm Workshop", "Team Collaboration Activation Workshop", "Team Culture Activation Workshop", "Team Decision-Making Activation Workshop"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

//change the value of the session storage according to the new product selected by user

function change() {
    var product = document.getElementById("product").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = sessionStorage.product;
}
function storeitem(item_id) {
    sessionStorage.setItem("item_id", item_id);
    window.location.replace("enquiry.html");
}
function displayitem() {
    document.getElementById("sbj").value = "RE: Enquiry on " + sessionStorage.getItem("item_id");
}


function initialise() {
    var formElement = document.getElementById("enquiryform");
    displayitem()
}


window.onload = initialise;
