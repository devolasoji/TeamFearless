// validating login 
const validate = () => {
let username = document.getElementById("email").value;
let password = document.getElementById("password").value;
if ( username == "username" && password == "password"){
alert ("Login successfully");
window.location = "index.html"; 
}
else{
alert("Your details are not correct, crosscheck and try again");
return false;
}
}

