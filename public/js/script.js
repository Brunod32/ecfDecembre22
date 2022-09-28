// Manage password copy paste
let btnCopy = document.getElementById("btnCopy");
let passwordToCopy = document.getElementById('passwordToCopy');
let btnNewPass = document.getElementById('btnNewPass');

const btnGeneratePass = () => {
    passwordToCopy.select();
    navigator.clipboard.writeText(passwordToCopy.value);
    btnCopy.innerText = 'Copié';
};
// ? permet s'éviter l'erreur "Cannot read Property 'addEventListener' of null"
btnNewPass?.addEventListener("click", () => {
    location.reload();
});

// Dynamic search for partner
const partnerCardTemplate = document.querySelector("[data-partner-template]");
const partnerCardContainer = document.querySelector("[data-partner-cards-container]");
const searchInput = document.querySelector("[data-search]");

let partners = [];

searchInput?.addEventListener("input", (el) => {
    const value = el.target.value.toLowerCase();
    partners.forEach(partner => {
        const isVisible = partner.name.toLowerCase().includes(value)
        partner.element.classList.toggle("hide", !isVisible)
    })
})

fetch('https://127.0.0.1:8000/api/partners')
    .then(res => res.json())
    .then(data => { return data["hydra:member"]})
    .then(dataPartner => {
        partners = dataPartner.map(partner => {
            const card = partnerCardTemplate.content.cloneNode(true).children[0];
            const header = card.querySelector("[data-header]");
            const body = card.querySelector("[data-body]");
            const footer = card.querySelector("[data-footer]");
            header.textContent = partner.name;
            body.textContent = partner.email;
            // Add link to the partner page details
            let baliseA = document.createElement('a');
            let link = document.createTextNode('Consulter');
            baliseA.append(link);
            baliseA.classList.add("linkCardSearch");
            baliseA.href = "https://127.0.0.1:8000/admin/partner/" + partner.id + "/edit";
            footer.appendChild(baliseA);
            partnerCardContainer.append(card);

            return { name: partner.name, email: partner.email, element: card }
        })
    })    

// Dynamic search for structure
const structureCardTemplate = document.querySelector("[data-structure-template]");
const structureCardContainer = document.querySelector("[data-structure-cards-container]");

let structures = [];

searchInput?.addEventListener("input", (el) => {
    const value = el.target.value.toLowerCase();
    structures.forEach(structure => {
        const isVisible = structure.name.toLowerCase().includes(value)
        structure.element.classList.toggle("hide", !isVisible)
    })
})

fetch('https://127.0.0.1:8000/api/structures')
    .then(res => res.json())
    .then(data => { return data["hydra:member"]})
    .then(dataStructure => {
        structures = dataStructure.map(structure => {
            const card = structureCardTemplate.content.cloneNode(true).children[0];
            const header = card.querySelector("[data-header]");
            const body = card.querySelector("[data-body]");
            const footer = card.querySelector("[data-footer]");
            header.textContent = structure.name;
            body.textContent = structure.email;
            // Add link to the structure page details
            let baliseA = document.createElement('a');
            let link = document.createTextNode('Consulter');
            baliseA.append(link);
            baliseA.classList.add("linkCardSearch");
            baliseA.href = "https://127.0.0.1:8000/admin/structure/" + structure.id + "/edit";
            footer.appendChild(baliseA);
            structureCardContainer.append(card);
            return { name: structure.name, email: structure.email, element: card }
        })
    })    

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