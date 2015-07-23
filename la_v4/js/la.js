jQuery(function($){

    'use strict';

    var LAX = window.LAX || {};

    /* Gallery
    ---------------------------------------------------------------------------------------------------- */
    LAX.gallery = function(){

        var $gallery = $('.la-gallery');

        var prev_btn = "<a><i class='prev-btn' data-dir='prev'></i></a>";
        var next_btn = "<a><i class='next-btn' data-dir='next'></i></a>";
        var page = "<i class='disc'></i>";

        var $galleryPagi;
        var $galleryNav;

        var $galleryFigure;
        var $galleryImages;

        $.each($gallery, function(i, gallery){

            $gallery = $(gallery);

            $galleryFigure = $gallery.find('figure');
            $galleryImages = $galleryFigure.children('img');

            $galleryNav = $gallery.children('.la-gallery-container-nav');
            $galleryPagi = $gallery.children('.la-gallery-container-pagination');

            var $current;

            /*
                UI
            */
            $galleryNav.append('<nav class="la-gallery-nav">' + prev_btn + next_btn + '</nav>');
            $galleryPagi.append('<div class="la-gallery-nav">' + paginate($galleryImages.length, page) + '</div>');

            /*
                Init
            */
            $galleryImages.not(":first").hide();
            $current = $galleryImages.first();

            /*
                Interaction
            */
            $gallery.on('click', $galleryPagi.children('a'), function(e){

                $current.hide();

                if ($(e.target).data('dir') == "prev") {

                    if ( $current.prev("img").length > 0) {
                        $current = $current.prev('img');
                    } else {
                        $current = $galleryImages.last();
                    }

                } else if ($(e.target).data('dir') == "next"){

                    if ( $current.next("img").length > 0) {
                        $current = $current.next('img');
                    } else {
                        $galleryImages.first();
                    }

                }

                $current.show();
            })

        })


        /*
            AutoAdvance
        */
        //
        // var timeOut = null;
        //
        // var autoAdvance = function(){
        //     $('.next-btn').trigger('click',[true]);
        //     timeOut = setTimeout(autoAdvance,5000);
        // }
        //
        // $('.next-btn').click(function(e,simulated){
        //     if(!simulated){
        //         clearTimeout(timeOut);
        //         timeOut = setTimeout(autoAdvance,5000);
        //     }
        // });
        //
        // setTimeout(autoAdvance,5000);

        /*
            Repeats some string by the amount
        */
        function paginate(amount, content){
            var pages = "";
            for (var i = 0; i < amount; i++) pages += content;
            return pages;
        }

    }

    /* Hit'n Run
    ---------------------------------------------------------------------------------------------------- */
    $(function() {
        LAX.gallery();
    });

})