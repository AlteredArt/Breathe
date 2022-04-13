{/* <a onclick="topFunction()" id="backToTop" title="Go to top"><i class="fa fa-arrow-circle-up"></i></a> */}


// BACK TO TOP BUTTON
var backToTop = document.getElementById("backToTop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
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
// BACK TO TOP BUTTON