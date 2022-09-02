// Manage password copy paste
let btnCopy = document.getElementById("btnCopy");
let passwordToCopy = document.getElementById('passwordToCopy');

btnCopy.addEventListener("click", () => {
    passwordToCopy.select();
    document.execCommand('copy');
    btnCopy.innerText = 'Copié';
});



// let cardToHide = document.getElementById('cardToHide');

// function showActive() {
//     // console.log('btn actif');
//     cardToHide.classList.add('hide');
// }

// function showInactive() {
//     // console.log('btn inactif');
//     cardToHide.classList.remove('hide');
// }

