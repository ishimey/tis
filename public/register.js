window.username= document.getElementById('username');
const userRegex= /^[a-zA-Z0-9_]{3,15}$/;

username.addEventListener('input', function(e){
    if(!userRegex.test(e.target.value)) {
        username.classList.add('error');
    }
    else {
        username.style.border = '2px solid green';
    }
});