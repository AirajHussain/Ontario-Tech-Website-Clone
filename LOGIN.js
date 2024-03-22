function validate()
{

var username=document.forms["myform"]["username"].value;
var password=document.forms["myform"]["password"].value;
if(username=="username" && password=="password")
{
alert("Login Successful")
  window.location.href="indexAdmin.html";

}

{
  alert("login failed");
  

}


}
