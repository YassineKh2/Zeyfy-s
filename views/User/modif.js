let button = document.querySelector("#yes");
alert("kekw");
button.addEventListener('click', (e) => {
    e.preventDefault();
    let errorMdp = document.getElementById("errorMdp");
    errorMdp.style.color="red";
    let errorMdp2 = document.getElementById("errorMdp2");
    errorMdp2.style.color="red";

    a
let mdp=document.getElementById("password1").value;
let mdp2=document.getElementById("password2").value;
if(mdp.length<=8)
errorMdp.innerHTML="Votre mot de passe doit contenire au moin 8 characters";
else if (mdp.search(/[0-9]/)==-1)
errorMdp.innerHTML="Votre mot de passe doit contenire au moin un nombre";    
else if (mdp.search(/[A-Z]/)==-1)
errorMdp.innerHTML="Votre mot de passe doit contenire au moin une lettre maj";    
else if (mdp.search(/[a-z]/)==-1)
errorMdp.innerHTML="Votre mot de passe doit contenire au moin une lettre min";    
else 
errorMdp.innerHTML="";    
if(mdp!=mdp2)
errorMdp2.innerHTML="Votre mot de passe n'est pas le meme";  
else 
errorMdp2.innerHTML="";  


if((errorMdp.innerHTML==="")&&(errorMdp2.innerHTML===""))
document.getElementById("form").submit();


}
)
let button = document.querySelector("#no");
button.addEventListener('click', (e) => {
window.location.href='profiledash.php';
})