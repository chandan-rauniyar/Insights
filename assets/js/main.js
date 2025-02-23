//  Don't make any change in this code wrt by Chandan Kumar Gupta 
function openPopup(id) {
    document.getElementById(id).style.display = 'block';
}

function closePopup(id) {
    document.getElementById(id).style.display = 'none';
}

function switchPopup(closeId, openId) {
closePopup(closeId);
openPopup(openId);
}

function togglePassword(event) {
    let passwordInput = event.target.previousElementSibling;  
    let eyeIcon = event.target;  

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.textContent = "visibility";  
    } else {
        passwordInput.type = "password";
        eyeIcon.textContent = "visibility_off";  
    }
}
//  End Here Login and sign Frontend Logic

// You car write here 