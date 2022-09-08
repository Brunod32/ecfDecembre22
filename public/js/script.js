// Manage password copy paste
let btnCopy = document.getElementById("btnCopy");
let passwordToCopy = document.getElementById('passwordToCopy');
let btnNewPass = document.getElementById('btnNewPass');
// btnCopy.addEventListener("click", () => {
//     passwordToCopy.select();
//     navigator.clipboard.writeText(passwordToCopy.value);
//     btnCopy.innerText = 'Copié';
// });
function btnGeneratePass() {
    passwordToCopy.select();
    navigator.clipboard.writeText(passwordToCopy.value);
    btnCopy.innerText = 'Copié';
};

btnNewPass.addEventListener("click", () => {
    location.reload();
});

// // Appel Ajax
// function statusPartner() {
//     let active = document.getElementsByClassName('check');
//     let unactive = document.getElementsByClassName('uncheck');
//     let cardToHide = document.getElementById('cardToHide');
//     let arrayCard = [cardToHide];

//     const xhr = new XMLHttpRequest();
//     const url = 'https://127.0.0.1:8000/admin/partner/';
//     xhr.open('GET', url);

//     xhr.addEventListener('readystatechange', function () {
//         if (xhr.readyState === 4) {
//             if (xhr.status === 200) {
//                 //On gère le retour de notre appel Ajax
//                 console.log("Response = " + xhr.response);
                
                
//                 // if (active) {
//                 //     cardToHide.classList.add('hide')
//                 // }

//                 arrayCard.forEach(() => {
//                     cardToHide.classList.add('hide');
//                 });
//                 // for (let i = 0; i < arrayCard.length; i++) {
//                 //     if (active) {
//                 //         console.log(arrayCard.length);
//                 //         cardToHide.classList.add('hide');
//                 //     }
//                 // }
               
//             } else if (xhr.status === 404) {
//                 alert("Impossible de se connecter à l'url de la requête ajax")
//             } else {
//                 alert("Une erreur est survenue");
//             }
//         };
//     });


//     xhr.send();
// }