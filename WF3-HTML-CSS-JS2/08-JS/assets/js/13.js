/* ------------------------------------------
        La Manipulation des contenus 
--------------------------------------------*/

function l(e) {
    console.log(e);
}

// -- Je souhaite récuperer mon lien 
var google = document.getElementById('google');
l(google);

// -- je souhaite accéder aux informations de ce lien ... par exemple

    // -- A : le lien vers lequel pointe la balise 
    l("Le lien vers lequel pointe ma balise : ");
    l(google.href);

    // -- B : L'ID de la balise : 
    l("L'ID de la balise : ");
    l(google.id);

    // -- C : La Classe de la balise : 
    l("La classe de la balise : ");
    l(google.className);

    // -- D : Le texte de la balise : 
    l("Le texte de la balise : ");
    l(google.textContent);

    // -- Maintenant , je souhaite modifier le contenu de mon lien ! 
    // -- Comme une variable classique, je vais venir affecter une nouvelle valeur 
    google.textContent = "Mon Lien Vers Google ! "; 

    

/* -----------------------------------------
       Ajouter Un Element Dans Ma Page
--------------------------------------------*/

// -- Nous allons utiliser méthodes :

    // -- La fonction document.createElement() va permettre de générer un nouvel élèment dans le DOM 
    // -- Que je pourrais modifier ensuite 

    // -- Ps : Ce nouvel élèment est placé en mémoire 

// -- La définition de l"élèment : 
    var span = document.createElement('span');

// -- Si je souhaite lui donner un ID 
    span.id = "MonSpan";

// -- Si je souhaite lui attribuer du contenu ... 
span.textContent = "Mon beau texte en JS ! "; 

// -- La fonction appendChild() va permettre de rajouter un enfant à un element DOM 
google.appendChild(span);




/* -------------------------------
            EXERCICE
En partant du travail déjà réalisé sur la page.
Créez directement dans la page une balise <h1></h1> ayant comme contenu : "Titre de mon Article".

Dans cette balise, vous créerez un lien vers une url de votre choix.

BONUS : Ce lien sera de couleur Rouge et non souligné.
-------------------------------- */



    // -- Création de la balise h1ar h1 
    var h1 = document.createElement('h1');
    
    
    // -- Création de la balise a 
    var a = document.createElement('a');

    // je vais donner un titre a mon lien 

    a.textContent = "Titre de mon Article"; 

    // -- Je veux donner un lien à mon lien 
    a.href = "#";

    // -- appendChild()

        // -- Je met le lien (a) dans mon h1 ;
        h1.appendChild(a) ; 

        // -- Je mets mon h1 dans ma page , dans mon body 
        document.body.appendChild(h1);

        // Bonus 

    // -- Lien en Rouge 
    a.style.color = "red"; 
    // -- Lien non-Surligné 
    a.style.textDecoration = "none ";





















    // var h1 = document.createElement('h1');
    // h1.textContent          = "Titre de mon Article "; 
    // span.className          = "Titre";
    // h1.style.color          = "red";
    // h1.style.textDecoration = "none";
    // h1.style.textTransform  = "uppercase";
    // google.appendChild(h1);

    // var lien = document.createElement('a')
    // a.href   = "www.lipsum.fr"
    // h1.appendChild(lien);
        


    
