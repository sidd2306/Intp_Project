function validateForm()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var email = document.getElementById('id');
if(email.value.match(mailformat))
{
document.myForm.id.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.myForm.id.focus();
return false;
}
}