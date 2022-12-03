let lNameInput = document.getElementById("nom");
let form = document.getElementById("myForm");
var letters = /^[A-Za-z]+$/;

function nameValidation() {

    if (lNameInput.value.length < 3) {
        lNameError = " Le nom doit compter au moins 3 caractères.";
        document.getElementById("nomEr1").innerHTML = lNameError;

        return false;
    }
    if (!lNameInput.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr1").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr1").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
 
}
let lName = document.getElementById("prenom");

function prenomValidation() {
    if (lName.value.length < 3) {
        lNameError = " Le prenom doit compter au minimum 3 caractères.";
        document.getElementById("nomEr2").innerHTML = lNameError;

        return false;
    }
    if (!lName.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomEr2").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomEr2").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}