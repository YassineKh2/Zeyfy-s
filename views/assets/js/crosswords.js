var ajax= new XMLHttpRequest();
var method="GET";
var url="../../assets/js/getCross.php";
var asynchronous =true;

    let cross=[];
    ajax.onreadystatechange = function()
    {
    
       if(this.readyState == 4 && this.status == 200)
       {
        //   alert(this.responseText);
         cross = JSON.parse(this.responseText);
    
    
       
       }
    }
    ajax.open(method,url,false);
    ajax.send();
 






const crosswords = [
    {
        word:cross[0].lettre + cross[1].lettre+cross[2].lettre ,
        ids: [
            1, 2, 3
        ]
    },
    {
        word: cross[2].lettre + cross[3].lettre+cross[4].lettre,
        ids: [
            3, 4, 5
        ]
    },
    {
        word: cross[5].lettre + cross[6].lettre+cross[7].lettre+cross[8].lettre + cross[9].lettre+cross[10].lettre+cross[11].lettre + cross[4].lettre+cross[12].lettre+cross[13].lettre + cross[14].lettre+cross[15].lettre+cross[16].lettre,
        ids: [
            6, 7, 8, 9, 10, 11, 12, 5, 13, 14, 15, 16, 17
        ]
    },
    {
        word: cross[17].lettre + cross[18].lettre+cross[19].lettre+cross[16].lettre + cross[20].lettre,
        ids: [
            18, 19, 20, 17, 21
        ]
    },
    {
        word: cross[14].lettre + cross[21].lettre+cross[22].lettre,
        ids: [
          15,  22, 23
        ]
    },
    {
        word: cross[11].lettre + cross[23].lettre+cross[24].lettre,
        ids: [
          12,  24, 25
        ]
    },
    {
        word: cross[9].lettre + cross[25].lettre,
        ids: [
          9, 26
        ]
    },
    {
        word: cross[6].lettre + cross[26].lettre+cross[27].lettre+cross[28].lettre + cross[29].lettre,
        ids: [
          7, 27, 28, 29, 30
        ]
    },
    {
        word: cross[29].lettre + cross[30].lettre+cross[31].lettre+cross[32].lettre + cross[33].lettre+cross[34].lettre+cross[35].lettre + cross[36].lettre + cross[37].lettre + cross[38].lettre+cross[39].lettre+cross[40].lettre + cross[41].lettre+cross[42].lettre ,
        ids: [
          30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43
        ]
    },
    {
        word:cross[43].lettre + cross[41].lettre,
        ids: [
          44, 42
        ]
    },
    {
        word: cross[34].lettre + cross[44].lettre,
        ids: [
          35, 45
        ]
    },
    {
        word: cross[36].lettre + cross[45].lettre +cross[46].lettre,
        ids: [
          37, 46, 47
        ]
    },
    {
        word:  cross[42].lettre + cross[47].lettre+cross[48].lettre+cross[49].lettre + cross[50].lettre+cross[51].lettre+cross[52].lettre + cross[53].lettre + cross[54].lettre + cross[55].lettre,
        ids: [
          43, 48, 49, 50, 51, 52, 53, 54, 55, 56
        ]
    },
    {
        word:  cross[56].lettre + cross[57].lettre+cross[58].lettre+cross[59].lettre + cross[60].lettre+cross[61].lettre+cross[62].lettre + cross[63].lettre ,
        ids: [
          57, 58, 59, 60, 61, 62, 63, 64
        ]
    },
    {
        word:  cross[64].lettre + cross[58].lettre+cross[65].lettre+cross[66].lettre + cross[67].lettre+cross[68].lettre+cross[51].lettre,
        ids: [
          65, 59, 66, 67, 68, 69, 52
        ]
    },
    {
        word:  cross[69].lettre + cross[54].lettre+cross[70].lettre+cross[71].lettre + cross[72].lettre+cross[73].lettre+cross[74].lettre + cross[74].lettre,
        ids: [
          70, 55, 71 ,72, 73, 74, 75, 76
        ]
    },
]


const validateCrosswords = () => {
    // para cada crossword criada
    let correctWords = []
    for (let crosswordsObj of crosswords) {
        let word = crosswordsObj['word']
        let ids = crosswordsObj['ids']
        let wordMustBe = joinWords(ids)
        if (wordMustBe != word) {
            invalidateInputs(ids)
        } else {
            correctWords.push(wordMustBe)
            validateInputs(ids)
        }
    }

    showCorrectWords(correctWords)
}

const joinWords = (ids) => {
    let tempWord = ''
    for (let id of ids) {
        tempWord += document.getElementById(id).value.toUpperCase();
    }
    return tempWord;
}

const invalidateInputs = (ids) => {
    for (let id of ids) {
        document.getElementById(id).style = "border: 1px solid red"
    }
}

const validateInputs = (ids) => {
    for (let id of ids) {
        document.getElementById(id).style = "border: 1px solid green"
    }
}

const showCorrectWords = (words) => {
    for (let word of words) {
        let html = document.getElementById("correctWords").innerHTML.toString();
        if (!html.includes(word)) {
            document.getElementById("correctWords").innerHTML += `<span>${word}</span><br>`
        }
    }
}

const resetCrosswords = () => {
    document.getElementById("correctWords").innerHTML = ""
    for (let word of crosswords) {
        let ids = word['ids']
        for (let id of ids) {
            document.getElementById(id).value = ""
            document.getElementById(id).style = "border-width: 2px; border-style: inset; border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133)); border-image: initial;"
        }
    }
}

function dica01() {
   
    alert (cross["0"].Indice)
}

function dica02() {
    alert (cross["1"].Indice)
}

function dica03() {
    alert (cross["2"].Indice)
}

function dica04() {
    alert (cross["3"].Indice)
}

function dica05() {
    alert (cross["4"].Indice)
}

function dica06() {
    alert (cross["5"].Indice)
}

function dica07() {
    alert (cross["6"].Indice)
}

function dica08() {
    alert (cross["7"].Indice)
}

function dica09() {
    alert (cross["8"].Indice)
}

function dica10() {
    alert (cross["9"].Indice)
}

function dica11() {
    alert (cross["10"].Indice)
}

function dica12() {
    alert (cross["11"].Indice)
}
function dica13() {
    alert (cross["12"].Indice)
}

function dica14() {
    alert (cross["13"].Indice)
}

function dica15() {
    alert (cross["14"].Indice)
}

function dica16() {
    alert (cross["15"].Indice)
}