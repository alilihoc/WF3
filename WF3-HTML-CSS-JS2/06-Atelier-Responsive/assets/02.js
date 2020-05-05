$(function(){
    // -- Afficher le loginform
    $('#loginform').hide();
    $('#logbut').click(function(){
        $('#loginform').fadeToggle();
    });

    var membres = [
        {pseudo:'Hugo',age:26,email:'wf3@hl-media.fr',mdp:'wf3'},
        {pseudo:'Rodrigue',age:56,email:'rodrigue@hl-media.fr',mdp:'roro'},
        {pseudo:'James',age:78,email:'james@hl-media.fr',mdp:'james8862'},
        {pseudo:'Emilio',age:18,email:'milio@hl-media.fr',mdp:'milioDu62'}
      ]

    // -- Récupération de différents éléments
    var form        = $('#loginform');
    var pseudo      = $('#pseudo');
    var mdp         = $('#mdp');
    var submit      = $('#submit');

   form.submit(function(e){
        // -- Arreter la redirection HTML5
        e.preventDefault();

        $('#loginform p').remove();

        // -- Booleen
        isPseudoinA = false
       
        for(let i = 0 ; i < membres.length ; i++){

            if(pseudo.val() == membres[i].pseudo){
                isPseudoinA = true;

                console.log(pseudo.val());
                if(mdp.val() == membres[i].mdp){
                    $('#logbut').replaceWith(`<a>Vous êtes connectés</a>`)
                    $(this).hide();
                } else {
                    $(`<p class ='alert-danger'> Votre Mdp ne correspond pas<p>`).appendTo(form)
                }
                break;
            }

        } // -- {}for
        if(!isPseudoinA){
            $(`<p class ='alert-danger'> Attention <br> Votre  pseudo est introuvable<p>`).appendTo(form)
        }
    }); // -- {}submit
});