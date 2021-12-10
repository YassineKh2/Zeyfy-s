let words=new Array(76);//initialize the array
const crosswordGrid=document.getElementsByClassName("words");//get all inputs from the crosswords grid
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
    for(let element of crosswordGrid) { // loop through the html collection containing input
        words[element.id-1]=element.value;
        
    }
    if(checkEmptyString(words)){
        alert("veuillez remplir tout les champs");
        return;
    }
    else {
    for(let j=0;j<words.length;j++) {
        form.append(j+1,words[j]);
        }
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            alert(this.response);
        }
        xhttp.open("POST","../../assets/js/getMotCross.php")
        xhttp.send(form);
    }
}
console.log("empty?",checkEmptyString(words));
console.log("form?",form);
valider.addEventListener('click',getWords);




