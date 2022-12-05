let lNameInput = document.getElementById("marque");
let upmarque = document.getElementById("nommarque");
let upmodel = document.getElementById("nommodel");
let lName = document.getElementById("model");
let n = document.getElementById("nom");
let m = document.getElementById("nompiece");
var letters = /^[A-Za-z]+$+" "/;

function nameValidation() {
    if (lNameInput.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;
        return false;
    }
    if (!lNameInput.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    /*  return true;
 }
 
 function namemodel() { */
    if (lName.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomErr").innerHTML = lNameError;

        return false;
    }
    document.getElementById("nomErr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}
function marque() {
    if (upmarque.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;

        return false;
    }
    if (!upmarque.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    /*  return true;
 }
 function model() { */
    if (upmodel.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomErr").innerHTML = lNameError;

        return false;
    }
    document.getElementById("nomErr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

function piece() {
    if (n.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;

        return false;
    }
    if (!n.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

function uppiece() {
    if (m.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr").innerHTML = lNameError;

        return false;
    }
    if (!m.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}