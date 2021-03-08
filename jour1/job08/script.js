// <!-- console.warn // console.error -->
function premier(nombre) {
  //un nombre est premier quand il est divisible par 1 ou par lui-même
  for (let i = 2; i < nombre-1; i++) {
    if (nombre % i == 0 ) {
      return false; 
    }    
  }
  return true;
}
function Sommesnombrepremiers(nombre1, nombre2) {
  if (premier(nombre1) && premier(nombre2)) {
    return nombre1 + nombre2;  
  }
  else{return false} 
}

console.log(Sommesnombrepremiers(22,14));
console.log(Sommesnombrepremiers(17,14)); 
console.log(Sommesnombrepremiers(17,19)); 