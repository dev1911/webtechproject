var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("tut_navi").style.top = "0";
  } else {
    document.getElementById("tut_navi").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}