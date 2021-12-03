let level;
var button1 = document.getElementById('b1');
var button2= document.getElementById('b2');
var button3 = document.getElementById('b3');
var button4= document.getElementById('b4');
var button5= document.getElementById('b5');
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
    
            
        button1.disabled = false;
        button2.disabled = true;
        button3.disabled = true;
        button4.disabled = true;
        button5.disabled = true;          
    
}
else if(level==1)
{
    
    button1.disabled = true;
    button2.disabled = false;
    button3.disabled = true;
    button4.disabled = true;
    button5.disabled = true;
    
}
else if(level==2)
{
    
    button1.disabled = true;
    button2.disabled = true;
    button3.disabled = false;
    button4.disabled = true;
    button5.disabled = true;
   
}
else if(level==3)
{
    
    button1.disabled = true;
    button2.disabled = true;
    button3.disabled = true;
    button4.disabled = false;
    button5.disabled = true;
   
}
else if(level==4)
{
    
    button1.disabled = true;
    button2.disabled = true;
    button3.disabled = true;
    button4.disabled = true;
    button5.disabled = false;
   
}
else if(level==5)
{
    
    button1.disabled = false;    
    button2.disabled = false;    
    button3.disabled = false;    
    button4.disabled = false;    
    button5.disabled = false;
   
}


}

console.log(button1);
