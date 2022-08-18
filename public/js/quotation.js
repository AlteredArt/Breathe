console.log("This has loaded.");


const QUOTES = [
    {
        id: 1,
        quote: "To resist change, to try to cling to life, is therefore like holding your breath, if you persist you kill yourself.",
        author: "~Alan Watts~" 
    },
    {
        id: 2,
        quote: "Tension is who you think you should be. Relaxation is who you are.",
        author: "~Ude Ibiam Ufiem~" 
    },
    {
        id: 3,
        quote: "Your mind will answer most questions if you learn to relax and wait for the answer.",
        author: "~William Burroughs~" 
    },
    {
        id: 4,
        quote: "Almost everything will work again if you unplug it for a few minutes...Including you.",
        author: "~Anne Lamott~" 
    },
    {
        id: 5,
        quote: "When someone tells me to 'just relax,' I wonder why they don’t hand me a book?",
        author: "~Richelle E. Goodrich~" 
    },
    {
        id: 6,
        quote: "Relax and take a deep breath. No one else knows what they’re doing either.",
        author: "~Ricky Gervais~" 
    },
    {
        id: 7,
        quote: "We are shaped by our thoughts; we become what we think. When the mind is pure, joy follows like a shadow that never leaves",
        author: "~Buddah~" 
    }
]



var counter = 0;
var word = document.getElementById("quote-text");
var maker = document.getElementById("quote-author");
var inst = setInterval(revolvingQuotes, 8000);


function revolvingQuotes () {
    word.innerHTML = QUOTES[counter].quote;
    maker.innerHTML = QUOTES[counter].author;
    counter++;
    if (counter >= QUOTES.length) {
      counter = 0;
      // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
    }
}

revolvingQuotes();



/*--------------------------------
Words
------------------------------ */

var biboText = ["BREATHE IN", "breathe out"];
var biboCounter = 0;
var biboWord = document.getElementById("word");
var biboColor = document.getElementsByClassName("word-container");
var biboInst = setInterval(change, 4500);

function change() {
  biboWord.style.fontSize = '2.75rem';
    // biboColor.style = 'red';
  biboWord.innerHTML = biboText[biboCounter];

  biboCounter++;
  if (biboCounter >= biboText.length) {
    biboCounter = 0;
    // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
  }
}
change();



/*--------------------------------
 Words END
 ------------------------------ */