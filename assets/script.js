let reservation = document.querySelector("#reservation");
let options = document.querySelector("#options");
let coordonnees = document.querySelector("#coordonnees");
options.classList.add("hidden");
coordonnees.classList.add("hidden");


setInterval(function () {
    
    let pass1jourDate = document.getElementById("pass1jourDate");
    pass1jourDate.classList.add("hidden");

    let pass2joursDate = document.getElementById("pass2joursDate");
    pass2joursDate.classList.add("hidden");

    let passTarifReduit = document.getElementById("passTarifReduit");
    passTarifReduit.classList.add("hidden");

    let passTarifNormal = document.getElementById("passTarifNormal");

    let tarifReduit = document.getElementById("tarifReduit").checked;

    if (tarifReduit == true) {
      passTarifNormal.classList.add("hidden");
      passTarifReduit.classList.remove("hidden");
    } 
    if (tarifReduit == false) {
      passTarifNormal.classList.remove("hidden");
      passTarifReduit.classList.add("hidden");
    } 
  }, 1); 

function suivant() {
  let nombrePlaces = document.getElementById("NombrePlaces").value;
  let jour1 = document.getElementById("choixJour1").checked;
  let jour2 = document.getElementById("choixJour2").checked;
  let jour3 = document.getElementById("choixJour3").checked;
  let jour12 = document.getElementById("choixJour12").checked;
  let jour23 = document.getElementById("choixJour23").checked;
  let jours3 = document.getElementById("pass3jours").checked;
  let jours3Reduits = document.getElementById("pass3joursreduit").checked;
  if (nombrePlaces == "0" || jour1 == false && jour2 == false && jour3 == false && jour12 == false && jour23 == false && jours3 == false && jours3Reduits == false) {
    alert("Veuillez remplir tous les champs obligatoires");
  } else {
    reservation.classList.add("hidden");
    options.classList.remove("hidden");
  }
}

function suivant2() {
  let enfantsOui = document.getElementById("enfantsOui").checked;
  let enfantsNon = document.getElementById("enfantsNon").checked;
  if (enfantsOui == false && enfantsNon == false) {
    alert("Veuillez remplir tous les champs obligatoires");
  } else {
  options.classList.add("hidden");
  coordonnees.classList.remove("hidden");
  }
}
