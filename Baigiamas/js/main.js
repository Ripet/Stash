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
      gryzoPaverstasIJSON = JSON.parse(gryzo);
      
    for(var i = 0; i < gryzoPaverstasIJSON.data.length; i++) {
      $("#ats2").append('<li class="list-group-item">Užsakymo ID: ' + gryzoPaverstasIJSON.data[i]['id'] + '</li>', '<li class="list-group-item">Adresas: ' 
      + gryzoPaverstasIJSON.data[i]['adresas'] + '</li>', '<li class="list-group-item">Miestas: ' + gryzoPaverstasIJSON.data[i]['miestas'] + '</li>', 
      '<li class="list-group-item">Pašto kodas: ' + gryzoPaverstasIJSON.data[i]['pastokod'] + '</li>', '<li class="list-group-item">Bendra suma: ' 
      + gryzoPaverstasIJSON.data[i]['totkaina'] + '</li>', '<li class="list-group-item">Užsakymo data: ' + gryzoPaverstasIJSON.data[i]['data'] + '</li>', 
      '<li class="list-group-item">Užsakovo ID: ' + gryzoPaverstasIJSON.data[i]['uzsakov_id'] + '</li>', '<li class="list-group-item">Prekės ID: ' 
      + gryzoPaverstasIJSON.data[i]['prekes_id'] + '</li>', '<li class="list-group-item">Prekės vienetai: ' + gryzoPaverstasIJSON.data[i]['vnt'] + '</li>');
    }
  
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
      + gryzoPaverstasIJSON.pastkod + '</li>', '<li class="list-group-item">Užsakymo ID: ' + gryzoPaverstasIJSON.id + '</li>');
    },
    error: function(e) {
      $("#ats3").append( "Request failed: " + e );
      console.log("NESUVEIKE!@@@");
    }
  });
}

function getZinutesFromDb() {
  var zinutesID = $('#list-zinutes option:selected').val();
  $("#ats4").empty();

  $.ajax({
    url: "./model/get.zinute.php",    
    type: "POST",
    data: {nr: zinutesID}, 
    success: function(gryzo){
      console.log("lyg suveike");
      console.log(gryzo);
      gryzoPaverstasIJSON = JSON.parse(gryzo);
      $("#ats4").append('<li class="list-group-item">Žinutės ID: ' + gryzoPaverstasIJSON.id + '</li>', '<li class="list-group-item">Vardas: ' 
      + gryzoPaverstasIJSON.vardas + '</li>', '<li class="list-group-item">El. paštas: ' + gryzoPaverstasIJSON.email + '</li>', 
      '<li class="list-group-item">Data: ' + gryzoPaverstasIJSON.data + '</li>', '<li class="list-group-item">Žinutė: ' 
      + gryzoPaverstasIJSON.zinute);
    },
    error: function(e) {
      $("#ats4").append( "Request failed: " + e );
      console.log("NESUVEIKE!@@@");
    }
  });
}

function getDarbuotojusDb() {
  var darbuotojoID = $('#list-darbuotojai option:selected').val();
  $("#ats5").empty();

  $.ajax({
    url: "./model/get.darbuotoja.php",    
    type: "POST",
    data: {nr: darbuotojoID}, 
    success: function(gryzo){
      console.log("lyg suveike");
      console.log(gryzo);
      gryzoPaverstasIJSON = JSON.parse(gryzo);
      $("#ats5").append('<li class="list-group-item"><img width=100px; src="./' + gryzoPaverstasIJSON.nuotrauka + '"></li>', '<li class="list-group-item">Darbuotojo ID: ' 
      + gryzoPaverstasIJSON.id + '</li>', '<li class="list-group-item">Vardas: ' + gryzoPaverstasIJSON.vardas + '</li>', '<li class="list-group-item">Pavarde: ' 
      + gryzoPaverstasIJSON.pavarde + '</li>', '<li class="list-group-item">Aprašymas: ' + gryzoPaverstasIJSON.aprasymas + '</li>');
    },
    error: function(e) {
      $("#ats5").append( "Request failed: " + e );
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
  document.cookie = cookieId + "=id; expires=Thu, 01 Jan 1970 00:00:01 GMT";
}

function deleteAllCookies() {
  let cookieId = document.cookie.split(';');

  for(let i = 0; i < cookieId.length; i++) {
    document.cookie = cookieId[i] + "; expires=Thu, 01 Jan 1970 00:00:01 GMT";
  }
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
  document.getElementsByClassName('bendra-suma')[0].value = bendraPrekiuSuma; //paima span elementa ir iraso reiksme i ji
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

