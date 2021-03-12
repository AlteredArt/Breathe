/*--------------------------------
 Words
 ------------------------------ */
// const totalTime = 7500;
// const breatheTime = (totalTime / 5) * 2;
// const holdTime = totalTime / 4;
let words = document.getElementById('word');

// $(document).ready(function () {
//   setInterval(function () {
//     words.innerHTML = "we";
//   }, 1000);

//   setTimeout(function () {
//     setInterval(function () {
//       words.innerHTML = "won";
//     }, 2000);
//     setTimeout(function () {
//       setInterval(function () {
//         words.innerHTML = "right";
//       }, 2000);
//     }, 500);
//   }, 500);

// });

var a = 0;
setInterval(function () {
  if (a == 0) {
    one();
    a++;
  }
}, 2500);

setInterval(function () {
  two();
  a = 0;
}, 5000);

function one() { console.log('hello'); }
function two() { console.log('now'); }

// function breathe() {
//   words.innerText = "!BREATHE IN!";
//   setTimeout(() => {
//     words.innerText = 'HOLD';
//     setTimeout(() => {
//       words.innerText = '*breathe out*';
//     }, holdTime);
//   }, breatheTime);


//   setInterval(breathe, totalTime);
// }
// breathe();
// let word = document.getElementById('word');
// function breathe() {
//   //	let c = 0;
//   //	let phrases = ['help', 'me', 'please'];
//   word.innerHTML = "BREATHE IN!";
//   setTimeout(() => {
//     word.innerHTML = '~Hold~';

//     setTimeout(() => {
//       word.innerText = "breathe out";
//     }, holdTime)
//   }, breatheTime);
//   breathe();
//   setInterval(breathe, totalTime);
// }
// breathe();


// $(function () {
//   let words = document.getElementById('word');
//   setInterval(function () {
//     words.innerHTML = "win"
//     setTimeout(function () {
//       words.innerHTML = "cool"
//       setTimeout(function () {
//         words.innerHTML = "breathe out!"
//       }, 3000);
//     }, 3000);
//   }, 6000);
// });
// breathe();



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
/*--------------------------------
 Words END
 ------------------------------ */

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
const title = document.getElementById('title');
const cover = document.getElementById('cover');

// Song titles
const songs = ['focus', 'relax', 'sleep', 'minuet', 'machine'];

// Keep track of song
let songIndex = 2;

// Initially load song details into DOM
loadSong(songs[songIndex]);

// Update song details
function loadSong(song) {
  title.innerText = song;
  audio.src = `music/${song}.mp3`;
  cover.src = `images/${song}.jpg`;
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
/*--------------------------------
 Music END
 ------------------------------ */
