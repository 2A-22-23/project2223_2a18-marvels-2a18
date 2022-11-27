
const nom = document.getElementById('nom')
const prenom = document.getElementById('prenom')
const email = document.getElementById('email')
const mdp = document.getElementById('mdp')
const telephone = document.getElementById('telephone')
const form = document.getElementById('form')
/* const errorElement = document.getElementById('error') */

form.addEventListener('submit', (e) => {
e.preventDefault();
validateInputs();

});
const setError =( element , message ) => {
    const inputControl =element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innertext =message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
const setSuccess =element => {
    const inputControl =element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innertext ='';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

}


const validateInputs = () => {
const nomValue=nom.value.trim();
const prennomValue=prenom.value.trim();
const emailValue=email.value.trim();
const mdpValue=mdp.value.trim();
const telephoneValue=telephone.value.trim();
if(nomValue==='')
{
setError(nom, 'Username is required');

}else{setSuccess(nom);
}
if(prenomValue==='')
{
setError(prenom, 'Email is required');

}else{setSuccess(prenom);
}

};


















/* form.addEventListener('submit', (e) => {
  let messages = []
  if (nom.value === '' || nom.value == null) {
    messages.push('nom is required')
  
  }

  if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
}) */
