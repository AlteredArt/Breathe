console.log("This has loaded.");


const QUOTES = [
    {
        id: 1,
        quote: "Breathing is only the begging!",
        author: "Test" 
    },
    {
        id: 2,
        quote: "Breatcxvxvhing is only the begging!",
        author: "Test2" 
    },
    {
        id: 3,
        quote: "Breathing is onsdvly the begging!",
        author: "Test" 
    },
    {
        id: 4,
        quote: "Breathing is only the ddcdscsbegging!",
        author: "Test" 
    },
    {
        id: 5,
        quote: "Breathing is only the begging!",
        author: "Test" 
    },
    {
        id: 6,
        quote: "Breathing is only the begging!",
        author: "Test" 
    },
    {
        id: 7,
        quote: "Breathing is only the begging!",
        author: "Test" 
    }
]

document.getElementById("quote-author").innerHTML= QUOTES[2].author;

document.getElementById("quote-text").innerHTML= QUOTES[2].quote;

function revolvingQuotes () {
 
}

revolvingQuotes();


/*--------------------------------
 Words
 ------------------------------ */

 // const totalTime = 7500;
// const breatheTime = (totalTime / 5) * 2;
// const holdTime = totalTime / 4;
// let words = document.getElementById('word');



// $(function () {
//   let count = 0;
//   let wordsArray = ["BREATHE IN!", "-Hold-", "breathe out"];
//   setInterval(function () {
//     count++;
//     $("#word").fadeOut(500, function () {
//       $(this).text(wordsArray[count % wordsArray.length]).fadeIn(500);
//     });
//   }, 3000, 2000, 1000);
// });


//2000, 100, 2000


// var text = ["Welcome", "Hi", "Sup dude"];
// var counter = 0;
// var elem = document.getElementById("changeText");
// var inst = setInterval(change, 3000);

// function change() {
//   elem.innerHTML = text[counter];
//   counter++;
//   if (counter >= text.length) {
//     counter = 0;
//   }
// }

/*--------------------------------
 Words END
 ------------------------------ */
