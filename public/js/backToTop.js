/*--------------------------------------------------------------
>>> BACK TO TOP jS
--------------------------------------------------------------*/

var backToTop = document.getElementById("backToTop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  backToTop.style.display = 'none';
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/*--------------------------------------------------------------
>>> BACK TO TOP JS - END
--------------------------------------------------------------*/