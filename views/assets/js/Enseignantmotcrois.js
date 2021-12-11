let words=new Array(76);//initialize the array
let indice=new Array(16);
const crosswordGrid=document.getElementsByClassName("words");//get all inputs from the crosswords grid
const crosswordInd=document.getElementsByClassName("indice"); // get all inputs from corsswords indice
const valider=document.getElementById("valider");
let form=new FormData(); //get the valider button
function checkEmptyString(array){ //need to check if al inputs are there
    for(var i=0;i<array.length;i++)
    {
        if(array[i] === ""){
            return true;
        }
    }
    return false;
}


function getWords(){
    
    //console.log(crosswordGrid);
    for(let element of crosswordGrid){ // loop through the html collection containing input
        words[element.id-1]=element.value;
        
    }
    let k=0;
    for(let element1 of crosswordInd){
         // loop through the html collection containing input
        
        indice[k]=element1.value;
        k++;  
    }
    if(checkEmptyString(words) || checkEmptyString(indice)){
        alert("veuillez remplir tout les champs");
        return;
    }
    else {
    for(let j=0;j<words.length;j++) {
        if(j<16)
        {form.append(j+1,words[j]);
        form.append(j+1+"i",indice[j]);}
        else {
            form.append(j+1,words[j]);
        }
        }
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            alert(this.response);
        }
        xhttp.open("POST","../../assets/js/getMotCross.php")
        xhttp.send(form);
    }
}
console.log("empty?",checkEmptyString(indice));
console.log("form?",form);
valider.addEventListener('click',getWords);




