jQuery(function($){

    'use strict';

    var LAX = window.LAX || {};

    /* Gallery
    ---------------------------------------------------------------------------------------------------- */
    LAX.gallery = function(){

        var $gallery = $('.la-gallery');
        var $galleryNav = $gallery.children('.la-gallery-nav-container');
        var $galleryPagi = $gallery.children('.la-gallery-pagi-container')

        var prev_btn = "<a class='disabled'><i class='prev-btn'></i></a>";
        var next_btn = "<a><i class='next-btn'></i></a>";

        var page = "<i class='disc'></i>";

        $galleryNav.append('<nav class="la-gallery-nav-container-nav">' + prev_btn + next_btn + '</nav>');
        $galleryPagi.append('<div class="la-gallery-nav-container-pagi">' + page + page + '</div>');

    }

    /* Hit'n Run
    ---------------------------------------------------------------------------------------------------- */
    $(function() {
        LAX.gallery();
    });

})