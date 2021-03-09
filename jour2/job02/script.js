// on récupère dans des variables les élements en fonctions de leurs ID 
let button = document.getElementById("button");
let citation = document.getElementById("citation");
let readCitation = 1;

function showhide() {
    // on récupère l'intérieur de la balise article de citation via la méthode .innerHTML
    if (readCitation ==1) {
        citation.innerHTML = "L'important n'est pas la chute mais l'atterrissage";
        readCitation = 0; 
    }
    else{
        citation.innerHTML = ""; 
        readCitation = 1;
    }
}

button.addEventListener("click", showhide);
