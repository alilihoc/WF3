// -- Déclarer un tableau numérique 

var TabPrenom = ["Hugo","Romain","Clement","Joffrey","Emilie","Antoine","Axel","Etiene","Rodolphe","Max"]
console.log(TabPrenom);

console.log(TabPrenom.length);
console.log(TabPrenom[8]);
console.log(TabPrenom[2]);
console.log(TabPrenom[4]);

// -- Pour récuperer une valeur dans un tableau , j'utilise son indice !



var i = 2;
console.log(TabPrenom[i]);

for ( i=0 ; i<TabPrenom.length ; i++ ){
    console.log('Indice ' + i + ' : ' + TabPrenom[i])
}

// -- Voyons comment procéder avec des objets :
var contact = {
    // -- indice ---> Valeur ;
        prenom : 'Hugo' ,
        nom    : 'Liegeard' ,
        Tel    : '07.50.49.67.20'
    }

    console.log(contact);
    console.log('prenom : ' + contact.prenom);
    console.log('nom : '    + contact.nom);
    console.log('Tel : '    + contact.Tel);


// -- Tableau Etudiant 

var toE = [
    {
        nom    : 'Antoine',
        prenom : 'Barrois',
        classe : '2nd'
    },
    {
        nom    : 'Axel',
        prenom : 'Letellier',
        classe : 'Terminale'
    },
    {
        nom    : 'Hocine',
        prenom : 'Alili',
        classe : '2nd'
    }
]

console.log(toE);

var NbrEtudiants = toE.length;
console.log("Le nombre d'etudiants est : " + NbrEtudiants );
document.write('<ul>')
for ( i=0 ; i < NbrEtudiants ; i ++ ) {
    let Etudiants = toE[i] ;

    document.write('<li>' + Etudiants.prenom + ' ' + Etudiants.nom + ' ' + Etudiants.classe +'</li>');
}
document.write('</ul>')
