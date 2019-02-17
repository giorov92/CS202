$(document).ready(function () {

    //run your code
    //alert('Welcome User')

    //selector element(p,ul, h1), id, class, multiple, css or jQuery

    //syntax
    // $('selector').hide();
    // $('p').hide(hide;)

    //id
    // $('#para1').hide();

    //class
    // $('.heading2').hide();

    //multiple
    // $('p, h1, .heading').hide();

    // $('#list li:list').hide();

    //events - click dblclick, keydown, load, mouseover, hover(mouseleave & mousehover),

    $('.btn').click(function () {

        $('.para2').hide();
    })

    $('.btn2').click(function () {

        $('.para2').show();
    })

    $('.btn3').click(function () {

        $('.para2').toggle();
    })

    //2 millisecond fade toggle
    $('.btn4').click(function () {

        $('#para1').fadeToggle(2000);
    })

    $('.box').mouseover(function () {
        // $('.box').animate({'top':'300px', 'opacity':'0.5'}, 2000);
        $(this).animate({ 'top': '300px' }, 2000)
    })

    $('.box').mouseout(function () {
        $(this).animate({ 'top': '0' }, 2000)
    })
});