/*
 I. Créer un Tableau 3D "PremierTrimestre" contenant la moyenne d'un étudiant pour plusieurs matières.

    Nous auront donc pour un étudiant, sa moyenne à plusieurs matières.
    
    Par exemple : Hugo LIEGEARD : [ Francais : 12, Math : 19, Physique 4], ... etc
    
    **** Vous allez créez au minimum 5 étudiants ****

II. Afficher sur la page (à l'aide de document.write) pour chaque étudiant, la liste (ul et li) de sa moyenne à chaque matière, puis sa moyenne générale. 
*/

var PremierTrimestre = [
    {
        nom       :   "LIEGEARD",
        prenom    :   "Hugo",
        moyenne   :   {
                            francais : 4,
                            math     : 8,
                            physique : 18
                        }
    },
    {
        nom       :   "MANAS",
        prenom    :   "Tanguy",
        moyenne   :   {
                            francais : 6,
                            math     : 15,
                            physique : 9,
                            physique  : 15.5
                        }
    },
    {
        nom       :   "ARAUJO",
        prenom    :   "Thiago",
        moyenne   :   {
                            francais : 10,
                            math     : 15,
                            physique : 16
                        }
    }
];


// -- Petite fonction de raccourci (LesFlemards.js)

function w(t) {
    document.write(t);
}

function l(e) {
    console.log(e);
}

l(PremierTrimestre);
w('<ol>');
// -- Je souhaite afficher la liste de mes étudiants 
for (let i = 0 ; i < PremierTrimestre.length ; i++ ){
    // -- On récupere l'Objet Etudiant de l'itération  
    let Etudiant = PremierTrimestre[i];

    // -- Aperçu dans la console 
    l(Etudiant);

    var NombreDeMatiere = 0 ; var SommeDesNotes = 0 ;
    // -- Afficher le nom et prenom de chaque etudiant 
    w('<li>');
        w(Etudiant.prenom + " " + Etudiant.nom);
        // -- Afficher la moyenne des étudiants aux differentes matieres 
        w('<ul>')
            for(let matiere in Etudiant.moyenne) {
                l(matiere);
                l(Etudiant.moyenne[matiere]);
                
                NombreDeMatiere++ ;
                SommeDesNotes += Etudiant.moyenne[matiere]

                w('<li>');
                    w(matiere + " : " + Etudiant.moyenne[matiere]);
                w('</li>')
            
            }  // -- Fin de la boucle matiere 
            w('<li>');
                w("<strong>Moyenne Generale : </strong>" + 
                (SommeDesNotes / NombreDeMatiere).toFixed(2) );
            w('</li>');

        w('</ul>');
    w('</li>');
}
w('</ol>');

















// document.write("<ul>");

// for( i=0 ; i <= PremierTrimestre.length ; i++ ) {
// document.write("<li>" + PremierTrimestre[i].prenom + "</li>");
// }

// var j=0 ; 
// while(j<10) {
//     document.write("<li>" + PremierTrimestre[j].moyenne + "</li>");
//     j++;
// }

// document.write("<ul>");








