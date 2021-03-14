/*$(recuperation).click(function (e) {
  const nom = $("#nom").val();
  const prenom = $("prenom").val();
  const email = $("email").val();
  const password = $("password").val();
  const password_hash = $("password").val();
});*/

$(document).ready(function () {
  $("#submitConnect").click(function () {
    var mail = $("#emailConnect").val();
    var password = $("#passwordConnect").val();
    //alert(password);

    $.ajax({
      url: "traitement.php", // on donne l'URL du fichier de traitement
      type: "post", // la requête est de type POST
      data: { mail: mail, password: password }, // et on envoie nos données
      success: function (response) {
        response = response.replace(/\s/g, ""); //enleve les espaces
        //console.log(response);
        alert(response);

        if (response === "connect") {
          window.location.href = "index.php";
        } else {
          $("#emailConnect").empty();
          $("#passwordConnect").empty();
        }
      },
    });
  });
});
