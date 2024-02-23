let reservation = document.querySelector("#reservation");
let options = document.querySelector("#options");
let coordonnees = document.querySelector("#coordonnees");
options.classList.add("hidden");
coordonnees.classList.add("hidden");


function suivant() {
  let NombrePlaces = document.getElementById("NombrePlaces").value;
  if (NombrePlaces == "0") {
    alert("Veuillez remplir tous les champs obligatoires");
  } else {
    reservation.classList.add("hidden");
    options.classList.remove("hidden");
  }
  console.log(NombrePlaces);
}

function suivant2() {
  options.classList.add("hidden");
  coordonnees.classList.remove("hidden");
}
