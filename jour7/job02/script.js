function changeJumbo() {
    let phrases = [
        "Wake Up. Time To Die.",  
        "'More Human Than Human' Is Our Motto.", 
        "Do You Like Our Owl?", 
        "Painful To Live In Fear, Isn't It?", 
        "I'm Not In The Business. I Am The Business."
    ]
    document.getElementById("textJumbo1").innerHTML =  phrases[Math.floor(Math.random() * (phrases.length))];
    // return phrases[index];
}

function changeContent() {
    let content = [
        "jui le jack miel, t une bière chode", 
        "é sa c bien vrer", 
        "oe la misse"
    ]
    document.getElementById("textJumbo1").innerHTML =  content[Math.floor(Math.random() * (content.length))];

}