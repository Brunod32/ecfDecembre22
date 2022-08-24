let activePartnerBtn = document.getElementById('activePartner');
let unActivePartnerBtn = document.getElementById('unActivePartner');
let partnerCard = document.getElementById('partnerCard');

activePartnerBtn.addEventListener('click', (event) => { 
    partnerCard.classList.add('hide')  
})