

function Openfrom() {
    document.getElementById("Réserver").classList.add("fixed", "top-28", "bg-white", "left-[50%]", "-translate-x-2/4");
    document.getElementById("Réserver").classList.remove("hidden");
   document.getElementById("continer").style.filter="blur(6px)"
}

// require("../script/main.js");


let New_Clients = document.getElementById("nwe_usaer")
let yesterday_Clients = document.getElementById("yesterday_Clients")



// 


// 
let users = document.getElementById("users_dash");
let dashboard_table = document.getElementById("dashboard_table");
let users_table = document.getElementById("users_table");
let dashboard = document.getElementById("dashboard");
let ajoute_card = document.getElementById("ajoute_card");




function users_dash() {

    users_table.classList.toggle("hidden");

    // dashboard_table.style.display = "none";
    // ajoute_card.style.display = "none";
    // mood = false



}

dashboard.onclick = function () {
    dashboard_table.style.display = "block";
    ajoute_card.style.display = "none";
    mood = true
    

}


function ajouteCards() {
    ajoute_card.style.display = "block";
    dashboard_table.style.display = "none";
    users_table.style.display = "none";
}



