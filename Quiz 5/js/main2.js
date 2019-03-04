
$(document).ready(function(){


    $('.scroll').click(function(e){

        e.preventDefault();

        $('html,body').animate({

            scrollTop: $(this.hash).offset().top

        }, 2000);
        

    });

// scrollreveal

/*
const sr = ScrollReveal();

sr.reveal('.floatleft',{
//run conditions here
origin:'bottom',
//or right or left or top
distance:'100px',
scale: '0.5',
// delay:'1000',
duration:'200',
})
sr.reveal('.floatright', {
origin:'right',
distance:'800px',
scale: '0.5',
delay:'1000',
duration:'1000',
// reset when scroll back
reset: true;
})

*/

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
sr.reveal('.box', {

});



//lightbox

baguetteBox.run('.gallery');

});