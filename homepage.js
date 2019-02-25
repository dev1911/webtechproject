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
var slider=document.getElementById("pyRange");

// slider.oninput=loadPoly;
window.onload = loadPolyFirst;

function loadPoly(){

var numberOfSides =parseInt(pyRange.value),
    size = 225,
    Xcenter = 275,
    Ycenter = 275;
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d"); 
ctx.clearRect(0,0,c.width,c.height);
ctx.beginPath();
ctx.arc(Xcenter,Ycenter,size,0,2*Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.moveTo (Xcenter +  size * Math.cos(0), Ycenter +  size *  Math.sin(0));          
 
for (var i = 1; i <= numberOfSides;i += 1) {
    ctx.lineTo (Xcenter + size * Math.cos(i * 2 * Math.PI / numberOfSides), Ycenter + size * Math.sin(i * 2 * Math.PI / numberOfSides));
}
var side=Math.sqrt(Math.pow((size * Math.cos(2 * Math.PI / numberOfSides))-(size * Math.cos(0)),2)+Math.pow(size * Math.sin(2 * Math.PI / numberOfSides)-(size * Math.sin(0)),2)); 
ctx.strokeStyle = "#000000";
ctx.lineWidth = 1;
ctx.stroke();
cal_pi(numberOfSides,size,side);

}
function loadPolyFirst(){

var numberOfSides =3,
    size = 225,
    Xcenter = 275,
    Ycenter = 275;
pyRange.value=4;
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d"); 
ctx.clearRect(0,0,c.width,c.height);
ctx.beginPath();
ctx.arc(Xcenter,Ycenter,size,0,2*Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.moveTo (Xcenter +  size * Math.cos(0), Ycenter +  size *  Math.sin(0));          
 
for (var i = 1; i <= numberOfSides;i += 1) {
    ctx.lineTo (Xcenter + size * Math.cos(i * 2 * Math.PI / numberOfSides), Ycenter + size * Math.sin(i * 2 * Math.PI / numberOfSides));
}
var side=Math.sqrt(Math.pow((size * Math.cos(2 * Math.PI / numberOfSides))-(size * Math.cos(0)),2)+Math.pow(size * Math.sin(2 * Math.PI / numberOfSides)-(size * Math.sin(0)),2)); 
ctx.strokeStyle = "#000000";
ctx.lineWidth = 1;
ctx.stroke();
cal_pi(numberOfSides,size,side);

}
function cal_pi(n,size,side){
	var area_poly=(n*side*side)/(4*(Math.tan(1*Math.PI/n)));
	var pi=area_poly/(size*size);
	pi=pi.toFixed(40);
	var set=document.getElementById("pi_val");
	var setSides=document.getElementById("side_val");
	var setarea=document.getElementById("area_val");
	set.innerHTML=pi;
	setSides.innerHTML=n;
	setarea.innerHTML=area_poly.toFixed(3);

}
