/* ----------------------------------------------------------------------------
                            LE DOM

        Le Dom est une interface de développenment en Js pour HTML.
        Grace au DOM , je vais être en mesure d'accéder / modifier html
    
        Chaque page chargée dans mon navigateur à un objet document 

------------------------------------------------------------------------------*/

// -- Comment puis-je faire pour récuperer les differentes informations de ma page html ?

// -- document.getElementById    Avec son ID  

let bonjour = document.getElementById("bonjour");
console.log(bonjour);

// -- document.getElementsByClassName >>--->> Liste Html à partir de leur classe 
 
var contenu  = document.getElementsByClassName("contenu");
console.log(contenu);

// -- Me renvoi : un tableau javascript avec mes elements HTML >>-->> CollectionHTML

// document.getElementsByTagName par Nom de Balise 

var span = document.getElementsByTagName('span');
console.log(span);

