// <!-- console.warn // console.error -->

function jourtravaille(date) {
  //jourtravaille prends en parametre date
  let travailoupas = "jour travaillé";

  const joursferies = [
    // nouveaux objets date regroupés dans un tableau jours fériés
    new Date(2020, 0, 1),
    new Date(2020, 4, 4),
    new Date(2020, 4, 1),
    new Date(2020, 4, 8),
    new Date(2020, 4, 13),
    new Date(2020, 4, 24),
    new Date(2020, 4, 24),
    new Date(2020, 6, 14),
    new Date(2020, 7, 15),
    new Date(2020, 10, 1),
    new Date(2020, 10, 11),
    new Date(2020, 11, 25),
  ];

  // date.format("{Month:2}-{Date:2}-{FullYear}"); // mm-dd-yyyy

  if (date.getDay() == 0 || date.getDay() == 6) {
    // method getDay appliquée à date via "."
    //dimanche = 0, samedi = 6
    travailoupas = "weekend";
  }

  for (i = 0; i < joursferies.length; i++) {
    //boucle for qui va inspecter les éléments i du tableau joursferies à laquelle on applique la methode getTime
    if (date.getTime() == joursferies[i].getTime()) {
      travailoupas = "joursferies";
    }
  }
  return travailoupas;
}

// on receuil les mois dans un tableau de variable "mois"
var mois = [
  "janvier",
  "fevrier",
  "mars",
  "avril",
  "mai",
  "juin",
  "juillet",
  "août",
  "septembre",
  "octobre",
  "novembre",
  "décembre",
];

// on établie une nouvelle variable date 1 = nouvel objet  date 
var date1 = new Date(2020, 0, 1);
// on concatène avec des + dans le console.log
console.log(
  "Non, le " +
    date1.getDate() +
    "/" +
    mois[date1.getMonth()] +
    " est un " +
    jourtravaille(date1)
);

var date2 = new Date(2020, 7, 23);
console.log(
  "Non, le " +
    date2.getDate() +
    "/" +
    mois[date2.getMonth()] +
    " est un " +
    jourtravaille(date2)
);

var date3 = new Date(2020, 4, 1);
console.log(
  "Non, le " +
    date3.getDate() +
    "/" +
    mois[date3.getMonth()] +
    " est un " +
    jourtravaille(date3)
);

var date4 = new Date(2020, 8, 9);
console.log(
  "Oui, le " +
    date4.getDate() +
    "/" +
    mois[date4.getMonth()] +
    " est un " +
    jourtravaille(date4)
);
