//-------------------------------------AJAX

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
        $("#ats1").append('<li class="list-group-item"><img width=100px; src="./img/' + gryzoPaverstasIJSON.foto1 + '"></li>',
         '<li class="list-group-item">ID: ' + gryzoPaverstasIJSON.id + '</li>', '<li class="list-group-item">Pavadinimas: ' 
         + gryzoPaverstasIJSON.pavadinimas + '</li>', '<li class="list-group-item">Kaina: ' + gryzoPaverstasIJSON.kaina + ' &euro;</li>', 
         '<li class="list-group-item">Vnt: ' + gryzoPaverstasIJSON.kiekis + '</li>', '<li class="list-group-item">Pozicija: ' 
         + gryzoPaverstasIJSON.pozicija + '</li>', '<li class="list-group-item">' + gryzoPaverstasIJSON.aprasymas + '</li>');
      },
      error: function(e) {
        $("#ats1").append( "Request failed: " + e );
        console.log("NESUVEIKE!@@@");
      }
    });
}

function getUzsakymusFromDb() {
  var uzsakymoID = $('#list-uzsakymai option:selected').val();
  $("#ats2").empty();

  $.ajax({
    url: "./model/get.uzsakymas.php",    
    type: "POST",
    data: {nr: uzsakymoID}, 
    success: function(gryzo){
      console.log("lyg suveike");
      console.log(gryzo);
      gryzoPaverstasIJSON = JSON.parse(gryzo);
      $("#ats2").append('<li class="list-group-item">Užsakymo ID: ' + gryzoPaverstasIJSON.id + '</li>', '<li class="list-group-item">Adresas: ' 
      + gryzoPaverstasIJSON.adresas + '</li>', '<li class="list-group-item">Miestas: ' + gryzoPaverstasIJSON.miestas + '</li>', 
      '<li class="list-group-item">Pašto kodas: ' + gryzoPaverstasIJSON.pastokod + '</li>', '<li class="list-group-item">Bendra suma: ' 
      + gryzoPaverstasIJSON.totkaina + '</li>', '<li class="list-group-item">Užsakymo data: ' + gryzoPaverstasIJSON.data + '</li>', 
      '<li class="list-group-item">Užsakovo ID: ' + gryzoPaverstasIJSON.uzsakov_id + '</li>', '<li class="list-group-item">Prekės ID: ' 
      + gryzoPaverstasIJSON.prekes_id + '</li>', '<li class="list-group-item">Prekės vienetai: ' + gryzoPaverstasIJSON.vnt + '</li>',
      );
    },
    error: function(e) {
      $("#ats2").append( "Request failed: " + e );
      console.log("NESUVEIKE!@@@");
    }
  });
}

function getUzsakovusFromDb() {
  var uzsakovoID = $('#list-uzsakovai option:selected').val();
  $("#ats3").empty();

  $.ajax({
    url: "./model/get.uzsakovus.php",    
    type: "POST",
    data: {nr: uzsakovoID}, 
    success: function(gryzo){
      console.log("lyg suveike");
      console.log(gryzo);
      gryzoPaverstasIJSON = JSON.parse(gryzo);
      $("#ats3").append('<li class="list-group-item">Užsakovo ID: ' + gryzoPaverstasIJSON.uzsakov_id + '</li>', '<li class="list-group-item">Vardas: ' 
      + gryzoPaverstasIJSON.vardas + '</li>', '<li class="list-group-item">Pavardė: ' + gryzoPaverstasIJSON.pavard + '</li>', 
      '<li class="list-group-item">El. paštas: ' + gryzoPaverstasIJSON.emailas + '</li>', '<li class="list-group-item">Tel: ' 
      + gryzoPaverstasIJSON.tel + '</li>', '<li class="list-group-item">Adresas: ' + gryzoPaverstasIJSON.adresas + '</li>', 
      '<li class="list-group-item">Miestas: ' + gryzoPaverstasIJSON.miestas + '</li>', '<li class="list-group-item">Pašto kodas: ' 
      + gryzoPaverstasIJSON.pastkod + '</li>', '<li class="list-group-item">Užsakymo ID: ' + gryzoPaverstasIJSON.id + '</li>',
      );
    },
    error: function(e) {
      $("#ats3").append( "Request failed: " + e );
      console.log("NESUVEIKE!@@@");
    }
  });
}

//--------------------------------------COOKIES


function addCookie() {
  let prekesID = document.querySelector('.sausainiam').getAttribute('name');
  document.cookie = prekesID + "=id"; 
}

function delCookie() {
  let cookieId = document.querySelector('.istrint-preke').getAttribute('name');
  document.cookie = cookieId + "=i; expires=Thu, 01 Jan 1970 00:00:01 GMT"; 
}

//--------------------------------------CART

//apskaiciuoja eiluciu bendra suma
function krepselioBendraSuma() {
  let krepseliokonteineris = document.getElementsByClassName('krepselio-konteineris')[0];
  let eilutes = krepseliokonteineris.getElementsByClassName('krepselio-eilute');
  let bendraPrekiuSuma = 0; 
  for (let i = 0; i < eilutes.length; i++) {
      let eilute = eilutes[i];
      let prekesKaina = eilute.getElementsByClassName('kaina')[0];
      let prekesKiekis = eilute.getElementsByClassName('kiekis')[0];
      let kaina = parseFloat(prekesKaina.innerText); //pavercia i skaiciu
      let kiekis = prekesKiekis.value; // paima ivedimo laukelio skaiciu
      bendraPrekiuSuma += (kaina * kiekis);
  }
  bendraPrekiuSuma = Math.round(bendraPrekiuSuma * 100) / 100; //suapvalina bendra prekiu suma
  document.getElementsByClassName('bendra-suma')[0].innerText = bendraPrekiuSuma; //paima span elementa ir iraso reiksme i ji
}

let kiekioLaukelis = document.getElementsByClassName('kiekis');
for (let i = 0; i < kiekioLaukelis.length; i++) {
    let ivestaVerte = kiekioLaukelis[i];
    ivestaVerte.addEventListener('change', kiekioKeitimas); //pakeitus reiksme, paleidzia funkcija, kuri ja patikrina
}  

//patikrina ivedimo laukeli
function kiekioKeitimas(event) {
  let verte = event.target;
  if (isNaN(verte.value) || verte.value <= 0) { //patikrina ar skaicius/ne 0
      verte.value = 1; //defaultina ivedimo lauka i 1
  }
  krepselioBendraSuma(); //perskaiciuoja
}

