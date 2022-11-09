var deleteUserID;

jQuery(document).ready(function($){
    //open popup
    $('.cd-popup-trigger').on('click', function(event){
        event.preventDefault();
        $('.cd-popup').addClass('is-visible');
    });

    //close popup
    $('.cd-popup').on('click', function(event){
        if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function(event){
        if(event.which=='27'){
            $('.cd-popup').removeClass('is-visible');
        }
    });



    $('.header-profile').on('click','a', function(event){
        event.preventDefault();
        if($('.header-profile').find('.log-out-wrap').hasClass('opened-logout')){
            $('.header-profile').find('.log-out-wrap').removeClass('opened-logout');
        }else{
            $('.header-profile').find('.log-out-wrap').addClass('opened-logout');

        }

        return false;
    });


    // contact form animations
    // $('#contact').click(function() {
    //     $('#contactForm').fadeToggle();
    // })


        $('.clickable').click(function () {
            $(this).next('.sub-skills-table').toggle();
        });

        $('.res-main-cont').mouseover(function () {
            $('#downladContainerOverlay').show();
        }).mouseleave(function () {
            $('#downladContainerOverlay').hide();
        });

});

/*$('#contactForm').on('submit', function(e){
    e.preventDefault();
    //validacija

    //if success fade toggle
    $('#contactForm').fadeToggle();
    $('#sure').modal('show');

});*/

$('#sure_form').on('submit', function(e){
    e.preventDefault();
    console.log(e);
})

function zoom_image(img_url, template){
    $('.display-image').find('img').attr('src', img_url);
    $('.display-image').find('.display-form a').data('template', template);
    $('.display-image').css('display', 'table');
}
function zoom_image_hide(){
    $('.display-image').css('display', 'none');
}
function change_template(element){
    var template = $(element).data('template');
    $('.display-image').css('display', 'none');
    $('#template').modal('hide');
    $('#changerTemplate').modal('show');
}
