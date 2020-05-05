/* -------------------------------------
        LA CONCATENATION 
--------------------------------------*/

var debutDePhrase    = "Aujourd'hui ";
var dateDuJour       = new Date();
var suiteDePhrase    =", sont présents : ";
var nbreDeStagiaires = 21 ;
var finDePhrase      = " stagiaires.<br>";

// -- Nous souhaitons maintenant , grâce 
   // a la concaténation tout afficher !!

document.write(debutDePhrase + dateDuJour.getDate() + "/" + 
(dateDuJour.getMonth()+1) + "/" + dateDuJour.getFullYear() + 
suiteDePhrase + nbreDeStagiaires + finDePhrase);

// -- Exercice : Concaténer ces elements :

var ph1 = "Je m'appelle ";
var ph2 = "Hocine et j'ai ";
var age = 24;
var ph3 = " ans !<br>"
 
document.write ( ph1 + ph2 + age + ph3 );




