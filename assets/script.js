let reservation = document.querySelector("#reservation");
let options = document.querySelector("#options");
let coordonnees = document.querySelector("#coordonnees");
options.classList.add("hidden");
coordonnees.classList.add("hidden");


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
  options.classList.add("hidden");
  coordonnees.classList.remove("hidden");
}
