const container = document.getElementById('container');
const text = document.getElementById("text");

const totalTime = 7500;
const breatheTime = (totalTime / 5) * 2;
const holdTime = totalTime / 5;

console.log(breatheTime, holdTime);

breathe();

function breathe() {
  text.innerText = "!BREATHE IN!";
  container.className = "container grow";

  setTimeout(() => {
    text.innerText = 'HOLD';

    setTimeout(() => {
      text.innerText = '*breathe out*';
      container.className = 'container shrink';
    }, holdTime);
  }, breatheTime);
}

setInterval(breathe, totalTime);
