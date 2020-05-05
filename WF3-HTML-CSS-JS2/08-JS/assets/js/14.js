/* ---------------------------------------------------------------------
                     Les Evenements


    // -- Les evenements vont me permettre de déclencher une fonction 
    cad : une série d'instructions suite a une action de mon utilisateur 

    OBJ : Etre en mesure de capturer ces evenements , 
    a fin d'executer une fonction 


    Les evenements  : MOUSE (Souris)

        Click       : aau clic sur un element 
        mouseenter  : hover 
        mouseleave  : la souris sort de cette zone 


    Les evenements  : KEYBOARD (clavier)

        keydown     : Une touche du clavier est enfoncé 
        keyup       : Une touche a ete relaché 

    les evenments   : window (fenetre)

        scroll      : Defilement de la fenetre 
        resize      : Redimensionnement de la fenetre 
        
    Les evenements  : FORM (formulaires)

        change      : Pour les evenements <input>, <select> et <textarea>
        submit      : à l'envoi (soumission) d'un formulaire 

    Les evenements  : DOCUMENT 
        DOMContentLoaded : Executé lorsque le document est completement 
        chargé sans attendre le css et les images 



-----------------------------------------------------------------------------*/



/* ---------------------------------------------------------------------------
                 Les ECOUTEURS D'EVENEMENTS
                 
    Pour attacher un évènement à un élément, ou autrement dit,
pour déclarer un écouteur d'évènement qui se chargera de 
lancer une action, c'est une fonction pour un évènement
donné, je vais utiliser la syntaxe suivante :

------------------------*/

var p = document.getElementById('MonParagraphe');
console.log(p);

// -- Je souhaite que mon paragraphe soit rouge au clic de la souris

    // -- 1 : Je défini une fonction chargée d'executer cette action
    function changeColorToRed() {
        p.style.color = "red";
    }

    // -- 2 : Je déclare un écouteur qui se chargera d'appeler la fonction au déclenchement de l'évènement (click)
    p.addEventListener('click', changeColorToRed);





/* -----------------------------------------------------------------
                 EXERCICE PRATIQUE
Js ---> champs "imput" type text avec ID unique 
---> Alerte de la saisie de l'utilisateur 

-----------------------------------------*/

// -- Correction -- 



var input = document.createElement('input'); 

// -- Création de l'attribut 
input.setAttribute('input','text') ;
input.setAttribute('placeholder','Saisissez un contenu') ;

// -- Attribution d'un ID 
input.id = 'monInput';

// -- Ajout de l'element dans la page 
document.body.appendChild(input); 

// ----------------------------
function voirLaSaisieDeMonInput(){
    alert(input.value);
}

input.addEventListener('change', voirLaSaisieDeMonInput)