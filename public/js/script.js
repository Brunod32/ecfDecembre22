// Manage password copy paste
let btnCopy = document.getElementById("btnCopy");
let passwordToCopy = document.getElementById('passwordToCopy');
let btnNewPass = document.getElementById('btnNewPass');

btnCopy.addEventListener("click", () => {
    passwordToCopy.select();
    navigator.clipboard.writeText(passwordToCopy.value);
    btnCopy.innerText = 'Copié';
});

btnNewPass.addEventListener("click", () => {
    location.reload();
});