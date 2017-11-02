jQuery(function ($) {

    var filters = {};

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

    $('button').click(function(){
        $('button.selected').removeClass('selected');
        $(this).addClass('selected');
    });


});
