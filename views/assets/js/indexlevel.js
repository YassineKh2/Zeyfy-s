let level=0;
const button1 = document.getElementById('b1');
const button2= document.getElementById('b2');
const button3 = document.getElementById('b3');
const button4= document.getElementById('b4');
const button5= document.getElementById('b5');
var navLinks = document.querySelector("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}
//var btnShow = document.getElementById('showDive');
//var btnHide = document.getElementById('hideDive');

//btnShow.addEventListener('click', showDiv);
//btnHide.addEventListener('click', hideDiv);

function DisEn(button1,button2,button3,button4,button5,level)
{
    
    if(level==0)
    {
        document.addEventListener("DOMContentLoaded", function(event) {
            
        button1.disabled = false;
        button2.disabled = true;
        button3.disabled = true;
        button4.disabled = true;
        button5.disabled = true;          
    });
}
if(level==1)
{
    document.addEventListener("DOMContentLoaded", function(event){
    button1.disabled = true;
    button2.disabled = false;
    button3.disabled = true;
    button4.disabled = true;
    button5.disabled = true;
    });
}
else if(level==2)
{
    document.addEventListener("DOMContentLoaded", function(event){
    button1.disabled = true;
    button2.disabled = true;
    button3.disabled = false;
    button4.disabled = true;
    button5.disabled = true;
    });
}
else if(level==3)
{
    document.addEventListener("DOMContentLoaded", function(event){
    button1.disabled = true;
    button2.disabled = true;
    button3.disabled = true;
    button4.disabled = false;
    button5.disabled = true;
    });
}
else if(level==4)
{
    document.addEventListener("DOMContentLoaded", function(event){
    button1.disabled = true;
    button2.disabled = true;
    button3.disabled = true;
    button4.disabled = true;
    button5.disabled = false;
    });
}
else if(level==5)
{
    document.addEventListener("DOMContentLoaded", function(event){
    button1.disabled = false;    
    button2.disabled = false;    
    button3.disabled = false;    
    button4.disabled = false;    
    button5.disabled = false;
    });
}


}

console.log(button1);
DisEn(button1,  button2,button3,button4,button5,level);