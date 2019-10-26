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
        $("#ats1").append(gryzoPaverstasIJSON.id, gryzoPaverstasIJSON.pavadinimas, gryzoPaverstasIJSON.kaina, gryzoPaverstasIJSON.kiekis, gryzoPaverstasIJSON.pozicija);
      },
      error: function(e) {
        $("#ats1").append( "Request failed: " + e );
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

function krepselioBendraSuma() {
  // var cartItemContainer = document.getElementsByClassName('cart-items')[0]
  let eilutes = document.querySelectorAll('.krepselio-eilute');
  let bendraPrekiuSuma = 0; 
  for (let i = 0; i < eilutes.length; i++) {
      let eilute = eilutes[i];
      let prekesKaina = eilute.querySelector('.kaina');
      let prekesKiekis = eilute.querySelector('.kiekis');
      // let kaina = parseFloat(priceElement.innerText.replace('$', ''))
      // let quantity = quantityElement.value
      bendraPrekiuSuma += (prekesKaina * prekesKiekis);
  }
  bendraPrekiuSuma = Math.round(bendraPrekiuSuma * 100) / 100;
  document.querySelector('.bendra-suma').innerText = bendraPrekiuSuma;
}

let kiekioLaukelis = document.querySelector('.kiekis');

for (let i = 0; i < kiekioLaukelis.length; i++) {
    let ivestaVerte = kiekioLaukelis[i];
    ivestaVerte.addEventListener('change', kiekioKeitimas);

function kiekioKeitimas(event) {
  let verte = event.target;
  if (isNaN(verte.value) || verte.value <= 0) {
      verte.value = 1;
  }
  krepselioBendraSuma();
}

}

// function listCookies() {
//   var theCookies = document.cookie.split(';');
//   var aString = '';
//   for (var i = 1 ; i <= theCookies.length; i++) {
//       aString += i + ' ' + theCookies[i-1] + "\n";
//   }
//   return aString;
// }



// function listCookies() {
//   var theCookies = document.cookie.split(';');
//   var aString = '';
//   for (var i = 1 ; i <= theCookies.length; i++) {
//       aString += i + ' ' + theCookies[i-1] + "\n";
//   }
//   return aString;
// }