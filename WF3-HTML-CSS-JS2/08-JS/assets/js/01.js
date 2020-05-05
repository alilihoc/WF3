// alert("Wow ! Tu es sur ma page !");

// Deux slash pour faire un commentaire uniligne

/* Ici je peu faire un commentaire 
sur plusieurs lignes ... */

// -- 1 : Déclarer une variable 
var Prenom;

// -- 2 : Affecter une valeur
Prenom="Hocine";

// -- Afficher la valeur de ma Variable dans la console
console.log(Prenom);

/* -----------------------------
|    LES TYPES DE VARIABLES    |
------------------------------ */ 

// -- Ici , "Typeof" me permet dde connaitre le type de ma variable
console.log(typeof Prenom);

// -- Déclraration et Affectation d'une valeur a une variable;
var age = 40;

// -- Afficher dans la console
console.log(age);

// -- vérifier son type 
console.log(typeof age);

    /* ----------------------------------------------------------------
                LA PORTEE DES VARIABLES 

        Les variables déclarées directement a la racine du fichier
        sont appelées variables "globales" .

        Elles sont disponible dans l'ensemble de votre document , 
        y compris dans les fonctoins/boucles que nous verront plus tard.

        La portée des variables globales s'arretent au fichier 
        Si je change de page , la variable n'existe plus !

        Les variables déclarées a l'intérieur d'une fonction sont 
        appelées variables "locales".

        Elles sont disponible uniquement a l'intérieur de celle ci !

    -----------------------------------------------------------------*/
    
// -- Les variables FLOAT 

var uneDecimale = -2.984;
console.log(uneDecimale);
console.log(typeof uneDecimale);

// -- Les Booléens (VRAI / FAUX)

var unBooleen = false // -- true
console.log(unBooleen);
console.log(typeof unBooleen);

    /* -----------------------------------------------------------
                    Les Constantes 

        La déclaratoin CONST permet de créer une constante 
        uniquement accessible en lecture.

        Sa valeur ne pourra pas être modifiée par des 
        affectation ultérieures.

        Une constante ne peut être déclarée a nouveau .

        Généralement par convention , les constantes sont 
        en MAJUSCULE.

    -------------------------------------------------------------*/

const HOST    = "localhost";
const USER    = "root";
const PASSWORD= "mysql";

    /* -------------------------------------------------------------
                    La Minute Info

        Au fur et a mesure que l'on affecte ou réaffecte des 
        valeurs a une varible , celle-ci prend la nouvelle 
        valeur et le nouveau type ! 

        En Javascipt (ECMA 6 Script) , les varibles sont 
        auto-typées.

        pour convertir une variable de type NUMBER en STRING
        et l'inverse je peux utiliser les fonctions natives en JS ; 
        
    ----------------------------------------------------------------*/   
    
console.log("---");

var unNombre = "24";
console.log(unNombre);
console.log(typeof unNombre);

    /* La fonction ParseInt() pour retourner un Entier à 
       partir d'une chaine de caractere. */
unNombre = parseInt(unNombre);
console.log(unNombre);
console.log(typeof unNombre);

// -- je ré-affecte une valeur a ma variable 
unNombre = "12.55";
console.log(unNombre);
console.log(typeof unNombre);

    /* La fonction parseFloat permet de retourner a un Float 
         à partir d'une chainee de caractère . */ 
unNombre = parseFloat(unNombre);
console.log(unNombre);
console.log(typeof unNombre);
console.log("---")
// -- Conversion d'un Nombre en String avec toString()
var unNombreQuiDevientString= 10 ;
console.log( unNombreQuiDevientString.toString() );
console.log( unNombreQuiDevientString );
console.log( typeof unNombreQuiDevientString);



       
    

    









