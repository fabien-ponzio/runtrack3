// ON SELECTIONNE LE BOUTON EN CONSOLE.LOG
// let button = document.getElementById("button"); 
// // on sélectionne la balise qui a l'ID button.
// console.log(button); 
button.addEventListener('click', citation); 
function citation(params) {
    let citation = document.getElementById("citation"); 
    console.log(citation.innerHTML); 
}

mydiv1.innerHTML = mydiv2.innerHTML; 
mydiv1.innerHTML = temp