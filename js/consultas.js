$(function() {
    // Magic!
    $(".menu-menu-de-footer-container ul").addClass("list-inline"); // $(".menu-menu-de-footer-container ul li").addClass("list-group-item");

    $("img.img-equipo").mouseenter(function() {
        $(this).css('display','none'); $(this).next().css('display','block');
    } );
    $("img.img-equipo-hover").mouseleave(function() {
        $(this).css('display','none'); $(this).prev().css('display','block');
    } );
    $(".equipo-content p").addClass("small");                              

} );
