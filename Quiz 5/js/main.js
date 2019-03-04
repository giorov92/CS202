
$(document).ready(function(){


    // Smooth Scroll

    $('.scroll').click(function(e){

        e.preventDefault();

        $('html,body').animate({

            scrollTop: $(this.hash).offset().top

        }, 2000);
        

    });

    
    //scrollReveal

    const sr = ScrollReveal({
        origin:'bottom',
        distance:'100px',
    
        duration:'1000',
    // reset when scroll back
        reset: true
    
    });
    
    sr.reveal('.floatleft', {
    
    });
    sr.reveal('.floatright', {

    });

    //lightbox

    baguetteBox.run('.gallery', {
        animation: 'fadeIn'
    });

});