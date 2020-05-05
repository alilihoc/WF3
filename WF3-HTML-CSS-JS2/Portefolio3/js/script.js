$(function(){$

    // -- Services

    El = $('#services .white-divider')    ;
    El2 = $('#services .wlittle-divider').first()  ;  
    El3 = $('#services .mwlittle-divider')  ;  
    El4 = $('#services .pwlittle-divider')  ;  
    El5 = $('#services .col-lg-12')  ;  
    El6 = $('#services .container:nth-child(2)')  ;  
    El.css('top','261px').hide()
    El2.css('top','275px').hide();
    El3.css('top','288px').hide();
    El4.css('top','300px').hide();
    El5.css('top','330px').hide();
    El6.css('top','550px').hide();

    $('#services').mouseenter(function(){
        El.fadeIn(300).animate({top:'61px'},300);
        El2.delay().fadeIn(300).animate({top:'75px'},300);
        El3.delay().fadeIn(350).animate({top:'88px'},300);
        El4.delay().fadeIn(380).animate({top:'100px'},300);
        El5.delay().fadeIn(390).animate({top:'130px'},300);
        El6.delay().fadeIn(400).animate({top:'350px'},750);
        console.log(El4)
    });

    $('#bservices').click(function(){
        El.fadeIn().animate({top:'61px'},300);
        El2.delay(50).fadeIn(300).animate({top:'75px'},300);
        El3.delay(90).fadeIn(350).animate({top:'88px'},300);
        El4.delay(130).fadeIn(380).animate({top:'100px'},300);
        El5.delay(150).fadeIn(390).animate({top:'130px'},300);
        El6.delay(160).fadeIn(400).animate({top:'350px'},750);
        console.log(El4)
    });

    $('#bskills').click(function(){
        function timer(p,n) {
            n=Math.min(n,p.attr("aria-valuenow"));
            p.css("width", n + "%")
            if(n < p.attr("aria-valuenow")) {
                setTimeout(function() {
                    timer(p, n + 10);
                }, 200);
            }
        }
        $(".progress-bar").each(function(i,pb){
            timer($(pb),0); 
        });
    });

    // -- Progress-bar
    function timer(p,n) {
        n=Math.min(n,p.attr("aria-valuenow"));
        p.css("width", n + "%")
        if(n < p.attr("aria-valuenow")) {
            setTimeout(function() {
                timer(p, n + 10);
            }, 200);
        }
    }
    $(".progress-bar").each(function(i,pb){
        timer($(pb),0); 
    });

    // -- Contact
        
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();
        
        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                    
                if(json.isSuccess) 
                {
                    console.log('ok')
                    $('#contact-form').append("<p class='has-success text-align'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");
                    $('#contact-form')[0].reset();
                }
                else
                {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#message + .comments').html(json.messageError);
                    
                }                
            }
        });
    
    });

    const a = document.querySelector('#social-link');
    const morphTimeline = new TimelineMax({ 
      repeat:-1,
      repeatDelay:1
    }); 
    
    morphTimeline
      .to('#facebook', 2, {morphSVG: {shape: '#twitter'}})
      .call(link, ['twitter'])
      .to('#facebook', 2, {morphSVG: {shape: '#instagram'}}, '+=1')
      .call(link, ['instagram'])
      .to('#facebook', 2, {morphSVG: {shape: '#linkedin'}}, '+=1')
      .call(link, ['linkedin'])
      .to('#facebook', 2, {morphSVG: {shape: '#soundcloud'}}, '+=1')
      .call(link, ['soundcloud'])
      .to('#facebook', 2, {morphSVG: {shape: '#facebook'}}, '+=1')
      .call(link, ['facebook']);
    
    function link(social) {
       switch (social) {
            case 'twitter':
            a.href = 'https://twitter.com/_samrose3_'
            break;
            case 'instagram':
            a.href = 'https://instagram.com/_samrose3_/'
            break;
            case 'soundcloud':
            a.href = 'https://soundcloud.com/samrose14'
            break;
            default:
            a.href = 'https://facebook.com/samrose.me';
        }
    }


});