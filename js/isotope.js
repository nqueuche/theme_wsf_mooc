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

    $('button').hover( function() {
        $('this').removeClass('design_selected');
        $('this').removeClass('selected');
        $('this').removeClass('me_selected');
        $('this').removeClass('marketing_selected');
        $('this').removeClass('tech_selected');
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



    $('.menu__hook').on('click', function() {

        $('.menu__details').toggleClass('hidden');

    });
    
    $(document).ready(function(){
        $(".lightbox").slick({
            dots: true,
            autoplay: false
        });
    });

});





