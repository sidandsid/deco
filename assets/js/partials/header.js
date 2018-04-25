//Header page navigation menu
var headerMenuNav = jQuery('.js-header-menu__nav'),
    headerBurger = jQuery('.js-header-menu__burger'),
    headerBurgerLine  = jQuery('.js-header-menu__burger-line');

jQuery(headerBurger).on('click', function(){

    jQuery(headerMenuNav).toggleClass('active');
    jQuery(headerBurgerLine).toggleClass('clicked');

    jQuery(document).on('click', function(i){
        if(jQuery(i.target).is(jQuery(headerBurger)) === false){
            jQuery(headerMenuNav).removeClass('active');
            jQuery(headerBurgerLine).removeClass('clicked');
        }
    });
});

//Header search
var headerSearchIcon = jQuery('.js-header-search__icon'),
    headerSearchForm = jQuery('.js-header-search__form');

jQuery(headerSearchIcon).on('click', function(){
    jQuery(this).toggleClass('clicked');
    jQuery(headerSearchForm).toggleClass('active');
});