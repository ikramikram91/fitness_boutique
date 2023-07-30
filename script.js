
function Login(){
var done=0;
var username=document.login.username.value;
var password=document.login.password.value;

if (username=="user1" && password=="user1") {
window.location="user1.html";
}

if (username=="user2" && password=="user2") {
window.location="user2.html";
}

if (username=="user3" && password=="user3") {
window.location="user3.html";
}

if (username=="user4" && password=="user4") {
window.location="user4.html";
}

if (username=="vous" && password=="vous") { 
// Vous pouvez réservez une page pour vous même(options, etc.)
window.location="vous.html";
}
}
