var text = ["Welcome", "Hi", "Sup dude"];
var counter = 0;
var elem = document.getElementById("changeText");
var inst = setInterval(change, 1000);

function change() {
  elem.innerHTML = text[counter];
  counter++;
  if (counter >= text.length) {
    counter = 0;
    // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
  }
}



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