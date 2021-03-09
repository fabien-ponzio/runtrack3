// <!-- console.warn // console.error -->
fizzbuzz();
function fizzbuzz() {
//   valeur de départ / condition d'arrêt / incrémentation
// boucle for qui inspecte notre boucle
for (i = 1; i <= 151; i++) {
  // enchainement des conditions qui transformeront nos chiffres en chaines de caractères
  if (i % 3 == 0 && i % 5 == 0) {
    console.log("FizzBuzz"); 
  }
    else if (i % 3 == 0) {
    console.log("Fizz"); 
  }
    else if (i % 5 == 0) {
      console.log("Buzz"); 
    }
    else{
      console.log(i);
    }
  }
}
