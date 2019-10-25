function getPrekFromDb() {
    var prekesID = $('#list-prekes option:selected').val();
    $("#ats1").empty();

    $.ajax({
      url: "./model/get.preke.php",    
      type: "POST",
      data: {nr: prekesID}, 
      success: function(gryzo){
        console.log("lyg suveike");
        gryzoPaverstasIJSON = JSON.parse(gryzo);
        $("#ats1").append(gryzoPaverstasIJSON.id, gryzoPaverstasIJSON.pavadinimas, gryzoPaverstasIJSON.kaina, gryzoPaverstasIJSON.kiekis, gryzoPaverstasIJSON.pozicija);
      },
      error: function(e) {
        $("#ats1").append( "Request failed: " + e );
        console.log("NESUVEIKE!@@@");
      }
    });
}
