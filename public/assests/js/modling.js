/*Displaying and hiding modals "Sign in Modal" and " Sign up modal"*/
const showloginModal = modal => {
    document.getElementById("login-modal-container").style.display = "block";
}
const hideloginModal = hide => {
    document.getElementById("login-modal-container").style.display = "none";

}
const showSigninModal = modal => {
    document.getElementById("login-modal-container").style.display = "none";
    document.getElementById("signin-modal-container").style.display = "block";
}
const hidesigninModal = hide => {
    document.getElementById("signin-modal-container").style.display = "none";
    document.getElementById("login-modal-container").style.display = "none";

}
const showloginModalAgain = showLogin => {
    document.getElementById("signin-modal-container").style.display = "none";
    document.getElementById("login-modal-container").style.display = "block";
}