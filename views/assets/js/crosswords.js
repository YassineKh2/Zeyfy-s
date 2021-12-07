

const crosswords = [
    {
        word: "CPU",
        ids: [
            1, 2, 3
        ]
    },
    {
        word: "ULA",
        ids: [
            3, 4, 5
        ]
    },
    {
        word: "REGISTRADORES",
        ids: [
            6, 7, 8, 9, 10, 11, 12, 5, 13, 14, 15, 16, 17
        ]
    },
    {
        word: "FLASH",
        ids: [
            18, 19, 20, 17, 21
        ]
    },
    {
        word: "ROM",
        ids: [
          15,  22, 23
        ]
    },
    {
        word: "RAM",
        ids: [
          12,  24, 25
        ]
    },
    {
        word: "I5",
        ids: [
          9, 26
        ]
    },
    {
        word: "EPROM",
        ids: [
          7, 27, 28, 29, 30
        ]
    },
    {
        word: "MEMORIADEMASSA",
        ids: [
          30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43
        ]
    },
    {
        word: "CS",
        ids: [
          44, 42
        ]
    },
    {
        word: "I7",
        ids: [
          35, 45
        ]
    },
    {
        word: "DMA",
        ids: [
          37, 46, 47
        ]
    },
    {
        word: "ADDRESSBUS",
        ids: [
          43, 48, 49, 50, 51, 52, 53, 54, 55, 56
        ]
    },
    {
        word: "QUADCORE",
        ids: [
          57, 58, 59, 60, 61, 62, 63, 64
        ]
    },
    {
        word: "DATABUS",
        ids: [
          65, 59, 66, 67, 68, 69, 52
        ]
    },
    {
        word: "DUALCORE",
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
    alert (" ")
}

function dica02() {
    alert ("")
}

function dica03() {
    alert ("")
}

function dica04() {
    alert (" ")
}

function dica05() {
    alert ("")
}

function dica06() {
    alert ("")
}

function dica07() {
    alert (" ")
}

function dica08() {
    alert (" ")
}

function dica09() {
    alert ("")
}

function dica10() {
    alert (" ")
}

function dica11() {
    alert ("")
}

function dica12() {
    alert ("")
}
function dica13() {
    alert ("")
}

function dica14() {
    alert ("")
}

function dica15() {
    alert ("")
}

function dica16() {
    alert (" ")
}