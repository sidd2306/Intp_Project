var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
function validateForm()
{
if(document.myForm2.id.value == "")               //for email
{
        alert("Please enter an email address!");
        document.myForm2.id.focus();
        return false;
}
if(document.myForm2.pwd.value == "")// for password validation 
{
        alert("Please enter a password!"); 
        document.myForm2.pwd.focus(); 
        return false;
}  
}

