// Manage password copy paste
let btnCopy = document.getElementById("btnCopy");
let passwordToCopy = document.getElementById('passwordToCopy');
let btnNewPass = document.getElementById('btnNewPass');

function btnGeneratePass() {
    passwordToCopy.select();
    navigator.clipboard.writeText(passwordToCopy.value);
    btnCopy.innerText = 'Copié';
};
// ? permet s'éviter l'erreur "Cannot read Property 'addEventListener' of null"
// btnNewPass?.addEventListener("click", () => {
//     location.reload();
// });
window.onload = () => {
    btnNewPass.addEventListener("click", () => {
        location.reload();
    });
}

// function getPartners() {
//     const headers = new Headers();
//     headers.append('Content-Type', 'application/ld+json');

//     const init = {
//         method: 'GET',
//         headers: headers
//     }

//     const urlRequetePartner = 'https://127.0.0.1:8000/api/partners';
//     fetch(urlRequetePartner, init)
//         .then((response) => {
//             if (response.ok) {
//                 // return response.json();
//                 console.log(response.json());
//             } else {
//                 console.error("Erreur réponse: " + response.status);
//             }
//         })
//         .then((response) => {
//             let myHtml = '';

//             response?.forEach(element => {
//                 myHtml += getCard(element.name, element.address, element.email);
//             });
//         })
//         .catch((error) => {
//             alert(error);
//         });
// }

// function getCard(name, address, email) {
//     let myHtml = `
// <div>
//     <div class="card h-100">
//         <div class="card-body">
//             <h5 class="card-title">${name}</h5>
//             <p class="card-text">
//             ${address}
//             </p>
//             <p class="card-text">
//             ${email}
//             </p>
//         </div>
//     </div>
// </div>
// `;

//     return myHtml;
// }

// document.addEventListener('DOMContentLoaded', function () {
//     getPartners();
// });


// Btn to show actives partners or structures
function showActive() {
    let cardToHide = document.getElementsByClassName("cardToHide");

    for (i = 0; i < cardToHide.length; i++) {
        if (cardToHide[i].classList.contains("active")){
            cardToHide[i].style.display= "block";
        }
        else {
            cardToHide[i].style.display= "none";
        }
    }
}

// Btn to show unactives partners or structures
function showUnactive() {
    let cardToHide = document.getElementsByClassName("cardToHide");

    for (i = 0; i < cardToHide.length; i++) {
        if (cardToHide[i].classList.contains("active")){
            cardToHide[i].style.display= "none";
        }
        else {
            cardToHide[i].style.display= "block";
        }
    }
}

// Btn to show all partners or structures
function showAll() {
    let cardToHide = document.getElementsByClassName("cardToHide");

    for (i = 0; i < cardToHide.length; i++) {
        cardToHide[i].style.display= "block";
    }
}