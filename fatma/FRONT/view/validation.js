let lNameInput = document.getElementById("Sujet");
var letters = /^[A-Za-z]+$/;

function nameValidation()
{
    var a;
    var message;
     //document.querySelector("#info").innerHTML=document.querySelector("#fname").value;
    a=innerHTML=document.querySelector("#Sujet").value;
    document.querySelector("#info").innerHTML=a;

    if(a.match(/[0-9]/g))
      {message="<p style= 'color:red'> Faux!</p>";}
      var_dump(a);
      else
      {
        message="<p style= 'color:green'> Vrai!</p>";}


    if(message)
      {
        // e.preventDefault();
         document.getElementById("message").innerHTML=message;
         return false;
      }

}