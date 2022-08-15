/*--------------------------------------------------------------
>>> THEME SWITCH JS
--------------------------------------------------------------*/

// THEME SWITCH
const toggleSwitch = document.querySelector('.theme_switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {document.documentElement.setAttribute('data-theme', 'dark');}
    else {document.documentElement.setAttribute('data-theme', 'light');}    
}

toggleSwitch.addEventListener('change', switchTheme, false);


// REMEMBER THEME PREFERENCE
function switchTheme(e) {
  if (e.target.checked) {
      document.documentElement.setAttribute('data-theme', 'dark');
      localStorage.setItem('theme', 'dark'); //add this
  }
  else {
      document.documentElement.setAttribute('data-theme', 'light');
      localStorage.setItem('theme', 'light'); //add this
  }    
}

// LOCAL STORAGE
const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
    if (currentTheme === 'dark') {toggleSwitch.checked = true;}
}

/*--------------------------------------------------------------
>>> THEME SWITCH JS - END
--------------------------------------------------------------*/