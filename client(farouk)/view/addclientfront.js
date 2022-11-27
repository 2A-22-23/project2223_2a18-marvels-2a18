let lNameInput = document.getElementById("nom");
let form = document.getElementById("myForm");
var letters = /^[A-Za-z]+$/;

function nameValidation() {
 /*  form.addEventListener('submit', (e) => { */
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
 /*  }); */
}
let lName = document.getElementById("prenom");

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