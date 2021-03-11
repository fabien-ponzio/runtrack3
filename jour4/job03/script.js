$("#filtrer").click(function order() {
  const id_pok = $("#id").val();
  const type_pok = $("#type option:selected").val();
  const name_pok = $("#nom").val();
  console.log(type_pok);
  $.ajax({
    type: "GET",
    url: "pokemon.json",
    data: "data",
    dataType: "json",
  }).done(function (result) {
    // BOUCLEEEEEEE
    for (let i = 0; result.length; i++) {
      if (id_pok == "") {
        // 2TRI PAR TYPE
        if (type_pok == result[i].type[0]) {
          $("#sorted").append(result[i].id);
          $("#sorted").append(result[i].name.french);
          $("#sorted").append(result[i].name.english);
          $("#sorted").append(result[i].name.japanse);
          $("#sorted").append(result[i].name.chinese);
          $("#sorted").append(result[i].type);
        }
      }
      if (id_pok == "") {
          
        if (!type_pok === true) {
            
          if (name_pok == result[i].name.french) {
            $("#sorted").append(result[i].id);
            $("#sorted").append(result[i].name.french);
            $("#sorted").append(result[i].name.english);
            $("#sorted").append(result[i].name.japanse);
            $("#sorted").append(result[i].name.chinese);
            $("#sorted").append(result[i].type);
          }
        }
      }

      if (!type_pok === true) {
        // 1TRIER VIA ID
        if (id_pok == result[i].id) {
          console.log(result[i]);
          console.log(result[i].name);

          $("#sorted").append(result[i].id);

          $("#sorted").append(result[i].name.french);
          $("#sorted").append(result[i].name.english);
          $("#sorted").append(result[i].name.japanse);
          $("#sorted").append(result[i].name.chinese);

          $("#sorted").append(result[i].type);
        }
      }
    }
  });
});
