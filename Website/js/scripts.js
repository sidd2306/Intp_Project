var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

function validateForm()
{
if(email_validation())
{
if(pwd_validation())
{
}
}
return false;
}

function email_validation()
{
var email = document.getElementById('id');    
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))               //for email
{
        alert("You have entered an invalid email address!");
        document.myForm.id.focus();
        return false;
}
return true;
}
function pwd_validation()
{
var str = document.getElementById('pwd').value; 
if(!str.match(/[a-z]/g) && str.match(/[A-Z]/g) && str.match(/[0-9]/g) && str.match(/[^a-zA-Z\d]/g) && str.length >= 8) // for password validation 
{
        alert("Enter valid password with 1 upper case, 1 lower case, 1 digit, 1 special & minimum 8 char!"); 
        document.myForm.pwd.focus(); 
        return false;
}
return true;
}

