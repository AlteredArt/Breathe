/*--------------------------------------------------------------
>>> HAMBURGER MOBILE MENU JS
--------------------------------------------------------------*/

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav_menu");
const navLink = document.querySelectorAll(".nav_link");


hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}


navLink.forEach(n => n.addEventListener("click", closeMenu));


function closeMenu() {
hamburger.classList.remove("active");
navMenu.classList.remove('active');
}

/*--------------------------------------------------------------
>>> HAMBURGER MOBILE MENU JS - END
--------------------------------------------------------------*/





function mountaintop() {document.getElementById("background").style.backgroundImage = "url('./assets/images/mountain-top.webp')";}
function redshift() {document.getElementById("background").style.backgroundImage = "url('./assets/images/xred-shift.webp')";}
function templetree() {document.getElementById("background").style.backgroundImage = "url('./assets/images/temple-tree.webp')";}
function temple() {document.getElementById("background").style.backgroundImage = "url('./assets/images/temple.webp')";}
function wormhole() {document.getElementById("background").style.backgroundImage = "url('./assets/images/wormhole.webp')";}




// MUSIC
/*--------------------------------
Music
------------------------------ */
const musicContainer = document.getElementById('music-container');
const playBtn = document.getElementById('play');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const audio = document.getElementById('audio');
const progress = document.getElementById('progress');
const progressContainer = document.getElementById('progress-container');
const title = document.getElementById('music-title');
const cover = document.getElementById('music-cover');

// Song titles
const songs = ['Show Reel', 'Ambient Piano', 'Emotional Piano', 'Far From Home', 'First Focus', 'Just Relax', 'Relax', 'Relaxing Light', 'Reorder', 'Sleep', 'Spirit Blossom', 'Summer Sun'];

// Keep track of song
let songIndex = 0;

// Initially load song details into DOM
loadSong(songs[songIndex]);

function loadSong(song) {
  title.innerText = song;
  audio.src = `./music/${song}.mp3`;
  cover.src = `./images/${song}.webp`;
}

// Play song
function playSong() {
  musicContainer.classList.add('play');
  playBtn.querySelector('i.fas').classList.remove('fa-play');
  playBtn.querySelector('i.fas').classList.add('fa-pause');
  audio.play();
}

// Pause song
function pauseSong() {
  musicContainer.classList.remove('play');
  playBtn.querySelector('i.fas').classList.add('fa-play');
  playBtn.querySelector('i.fas').classList.remove('fa-pause');

  audio.pause();
}

// Previous song
function prevSong() {
  songIndex--;

  if (songIndex < 0) { songIndex = songs.length - 1; }

  loadSong(songs[songIndex]);
  playSong();
}

// Next song
function nextSong() {
  songIndex++;

  if (songIndex > songs.length - 1) {
    songIndex = 0;
  }

  loadSong(songs[songIndex]);
  playSong();
}

// Update progress bar
function updateProgress(e) {
  const {
    duration,
    currentTime
  } = e.srcElement;
  const progressPercent = (currentTime / duration) * 100;
  progress.style.width = `${progressPercent}%`;
}

// Set progress bar
function setProgress(e) {
  const width = this.clientWidth;
  const clickX = e.offsetX;
  const duration = audio.duration;

  audio.currentTime = (clickX / width) * duration;
}

// Event listeners
playBtn.addEventListener('click', () => {
  const isPlaying = musicContainer.classList.contains('play');

  if (isPlaying) {
    pauseSong();
  } else {
    playSong();
  }
});

// Change song
prevBtn.addEventListener('click', prevSong);
nextBtn.addEventListener('click', nextSong);

// Time/song update
audio.addEventListener('timeupdate', updateProgress);

// Click on progress bar
progressContainer.addEventListener('click', setProgress);

// Song ends
audio.addEventListener('ended', nextSong);
// MUSIC










const QUOTES = [
  {
      id: 1,
      quote: "We are shaped by our thoughts; we become what we think. When the mind is pure, joy follows like a shadow that never leaves",
      author: "~Buddah~" 
  },
  {
      id: 2,
      quote: "Tension is who you think you should be. Relaxation is who you are.",
      author: "~Ude Ibiam Ufiem~" 
  },
  {
      id: 3,
      quote: "To resist change, to try to cling to life, is therefore like holding your breath, if you persist you kill yourself.",
      author: "~Alan Watts~" 
  },
  {
      id: 4,
      quote: "Relax and take a deep breath. No one else knows what they’re doing either.",
      author: "~Ricky Gervais~" 
  },
  {
      id: 5,
      quote: "Your mind will answer most questions if you learn to relax and wait for the answer.",
      author: "~William Burroughs~" 
  }
]



var counter = 0;
var word = document.getElementById("quote-text");
var maker = document.getElementById("quote-author");
var inst = setInterval(revolvingQuotes, 12000);


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

var biboText = ["breathe IN", "breathe out"];
var biboCounter = 0;
var biboWord = document.getElementById("word");
// var wc = document.getElementById('word-container');
var biboColor = document.getElementsByClassName("word-container");
var biboInst = setInterval(change, 4000);

function change() {
  // biboColor.style = 'red';
biboWord.innerHTML = biboText[biboCounter];
//   wc.style.background = '#122788';



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