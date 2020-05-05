$(function() {
    
        // -- Tableau de Membres
        var membres = [
          {'pseudo':'Hugo','age':26,'email':'wf3@hl-media.fr','mdp':'wf3'},
          {'pseudo':'Rodrigue','age':56,'email':'rodrigue@hl-media.fr','mdp':'roro'},
          {'pseudo':'James','age':78,'email':'james@hl-media.fr','mdp':'james8862'},
          {'pseudo':'Emilio','age':18,'email':'milio@hl-media.fr','mdp':'milioDu62'}
        ];
    
        // -- Initialisation des Variables...
        nombreDeMembres = membres.length;
    
        // -- Récupération de différents éléments
        var form        = $('#registerForm');
        var bienvenue   = $('#Bienvenue');
        var pseudo      = $('#pseudo');
        var age         = $('#age');
        var email       = $('#email');
        var mdp         = $('#mdp');
        var submit      = $('#submit');
        var pseudoError = $('.pseudoError');
        var ageError    = $('.ageError');
        
        // -- ETAPE 1 & 3
        pseudo.on('input', function(e) {
    
            // -- A. Parcourir mon tableau de membre
            for(let i = 0 ; i < nombreDeMembres ; i++) {
    
                // -- B. Si la saisie d'un pseudoen cours par mon utilisateur correspond à un pseudo dans mon tableau de membre, alors ma condition s'applique.
                if(pseudo.val() === membres[i].pseudo) {
                    // -- C. J'ai trouvé une correspondance, je vais un message d'alerte.
                    // -- J'affiche une erreur
                    pseudoError.fadeIn();
                    // -- Je vide le titre bienvenue
                    bienvenue.text('');
    
                    // -- Je désactive le bouton
                    submit.attr('disabled', true);
    
                    // -- Je stop la boucle
                    break;
    
                } else {
                    // -- On cache le pseudo et réative le bouton
                    pseudoError.fadeOut();
                    submit.removeAttr('disabled');
                    // -- On affiche le pseudo en guise de bienvenue
                    bienvenue.text(pseudo.val());
                }
    
            }
    
        }); // {}pseudo input
    
        // -- ETAPE 2
        age.on('change', function(e) {
    
            if(age.val() <= 17) {
                ageError.fadeIn();
                submit.attr('disabled', true);
            } else {
                ageError.fadeOut();
                submit.removeAttr('disabled');
            }
    
        });
    
        // -- ETAPE 4A
    
        form.on('submit', function(event) {
    
            console.log("form fired !");
    
            // -- Arrête de la propagation du submit
            event.preventDefault();
    
            // -- Création d'un Objet Contact
            let contact = {
                pseudo      : pseudo.val(),
                age         : age.val(),
                email       : email.val(),
                mdp         : mdp.val()
            }
    
            // -- Ajout du Contact dans le tableau
            membres.push(contact);
            nombreDeMembres = membres.length;
    
            // -- Réinitialisation du Formulaire
            this.reset();
    
            // -- Affichage de ma liste
            executeList(contact);
        });
    
        // -- ETAPE 4B
    
            // -- Affichage de ma liste de membre
            function executeList(contact) {
                $(`
                    <p>
                        Merci ${contact.pseudo} !
                        <br><br><strong>Tu es maintenant inscrit Bravo...</strong>                    
                        <br><br><u>Voici la liste de nos membres :</u>
                    </p>
                `).appendTo($('body'));
    
                // -- Générer la liste des membres
                var ul = $('<ul>');
                for(let i = 0 ; i < nombreDeMembres ; i++) {
    
                    $(`
                        <li>
                            ${membres[i].pseudo} : ${membres[i].age}
                        </li>
                    `).appendTo(ul);
                }
    
                ul.appendTo($('body'));
            }
    
    });