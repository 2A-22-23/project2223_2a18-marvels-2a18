let lNameInput = document.getElementById("nomServ");
var letters = /^[A-Za-z]+$/;

function nameValidation() {
    alert("test")
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

    return true;
}
let lName = document.getElementById("nameDep");

function namemodel() {
    if (lName.value.length < 3) {
        lNameError = " Le nom doit compter au minimum 3 caractères.";
        document.getElementById("nomErr").innerHTML = lNameError;

        return false;
    }
    if (!lName.value.match(letters)) {
        lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lNameValid2 = false;
        document.getElementById("nomErr").innerHTML = lNameError2;
        return false;
    }
    document.getElementById("nomErr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}