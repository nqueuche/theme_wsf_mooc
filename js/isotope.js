jQuery(function ($) {

    var filters = {};

    $(window).load(function(){
        $('.grid').isotope({
            // options
            itemSelector: '.item',
            layoutMode: 'masonry'
        });
    });


    $('.filters').on( 'click', '.item', function() {
        var $this = $(this);
        // get group key
        var $buttonGroup = $this.parents('.filters');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        // set filter for group
        filters[ filterGroup ] = $this.attr('data-filter');
        // combine filters
        var filterValue = concatValues( filters );
        $('.grid').isotope({ filter: filterValue, containerStyle: null });
    });

// flatten object by concatting values
    function concatValues( obj ) {
        var value = '';
        for ( var prop in obj ) {
            value += obj[ prop ];
        }
        return value;
    }

    $('.filters').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );

        $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.design_selected').removeClass('design_selected');
            $buttonGroup.find('.selected').removeClass('selected');
            $buttonGroup.find('.me_selected').removeClass('me_selected');
            $buttonGroup.find('.marketing_selected').removeClass('marketing_selected');
            $buttonGroup.find('.tech_selected').removeClass('tech_selected');
            if ($(this).data("filter") === '.design') {
                $( this ).addClass('design_selected'); }
            if ($(this).data("filter") === '.me') {
                $( this ).addClass('me_selected'); }
            if ($(this).data("filter") === '.marketing') {
                $( this ).addClass('marketing_selected'); }
            if ($(this).data("filter") === '.tech') {
                $( this ).addClass('tech_selected'); }
            else {

                $( this ).addClass('selected'); }

        });
    });






    $('.menu__hook').on('click', function() {

        $('.menu__details').toggleClass('hidden');

    });




});

//Start Youtube API
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var youtubeReady = false;

//Variable for the dynamically created youtube players
var players= new Array();
var isPlaying = false;
function onYouTubeIframeAPIReady(){
    //The id of the iframe and is the same as the videoId
    jQuery(".youtube-video").each(function(i, obj)  {
        players[obj.id] = new YT.Player(obj.id, {
            videoId: obj.id,
            playerVars: {
                controls: 2,
                rel:0,
                autohide:1,
                showinfo: 0 ,
                modestbranding: 1,
                wmode: "transparent",
                html5: 1
            },
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    });
    youtubeReady = true;
}


function onPlayerStateChange(event) {
    var target_control =  jQuery(event.target.getIframe()).parent().parent().parent().find(".controls");

    var target_caption = jQuery(event.target.getIframe()).parent().find(".carousel-caption");
    switch(event.data){
        case -1:
            jQuery(target_control).fadeIn(500);
            jQuery(target_control).children().unbind('click');
            break
        case 0:
            jQuery(target_control).fadeIn(500);
            jQuery(target_control).children().unbind('click');
            break;
        case 1:
            jQuery(target_control).children().click(function () {return false;});
            jQuery(target_caption).fadeOut(500);
            jQuery(target_control).fadeOut(500);
            break;
        case 2:
            jQuery(target_control).fadeIn(500);
            jQuery(target_control).children().unbind('click');
            break;
        case 3:
            jQuery(target_control).children().click(function () {return false;});
            jQuery(target_caption).fadeOut(500);
            jQuery(target_control).fadeOut(500);
            break;
        case 5:
            jQuery(target_control).children().click(function () {return false;});
            jQuery(target_caption).fadeOut(500);
            jQuery(target_control).fadeOut(500);
            break;
        default:
            break;
    }
};

jQuery(window).bind('load', function(){
    jQuery(".carousel-caption").fadeIn(500);
    jQuery(".controls").fadeIn(500);
});

jQuery('.carousel').bind('slid.bs.carousel', function (event) {
    jQuery(".controls").fadeIn(500);
});


