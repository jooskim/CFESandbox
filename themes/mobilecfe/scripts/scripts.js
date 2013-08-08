/**
 * Created with JetBrains PhpStorm.
 * User: jooskim
 * Date: 8/6/13
 * Time: 8:52 AM
 * To change this template use File | Settings | File Templates.
 */


(function($){
    console.log(jQuery.fn.jquery);

    $(document).ready(function(){

        // Navigation Menu Styling
        $('#navigation .region-inner nav .block-inner').prepend('<div data-role="collapsible-set" data-inset="false" data-theme="a" id="mainmenuContainer">');
        $('#navigation ul li.menu-depth-1').each(function(){
            var title = $('a:eq(0)', $(this)).text();
            $('a:eq(0)',$(this)).remove(); // remove the duplicate title
            $('.menu-depth-2 ul li',$(this)).each(function(){ // pull the level-3 items down to level 2
                var objToMove = $(this).removeClass('first').removeClass('last').removeClass('menu-depth-3').addClass('menu-depth-2');
                $($(this).parent().parent()).after(objToMove.clone());
                objToMove.parent().remove();

            });
            $('ul:eq(0)',$(this)).attr({'data-role':'listview','data-inset':'false','data-mini':'true'}); // set the style for the menu-depth-2 items
            //$('ul:eq(0) li a',$(this)).attr({'data-ajax':'false'}); // disable ajax for the menu-depth-2 items

            var contents = $(this).html();
            $(this).remove();
            $('#mainmenuContainer').append('<div data-role="collapsible" data-inset="true"><h3>'+title+'</h3>'+contents+'</div>');

        });


    });


}(jQuery));

jQuery(document).on("pagecreate",function(event,data){

    // Navigation Menu Styling upon Loading through AJAX
    var obj = jQuery('div[data-external-page="true"]');

     jQuery('#navigation:eq(0) .region-inner nav .block-inner',obj).prepend('<div data-role="collapsible-set" data-inset="false" data-theme="a" id="mainmenuContainer">');
     jQuery('#navigation ul li.menu-depth-1', obj).each(function(){
        var newTitle = jQuery('a:eq(0)', jQuery(this)).text();
        jQuery('a:eq(0)',jQuery(this)).remove(); // remove the duplicate title
         jQuery('.menu-depth-2 ul li',jQuery(this)).each(function(){ // pull the level-3 items down to level 2
             var objToMove = jQuery(this).removeClass('first').removeClass('last').removeClass('menu-depth-3').addClass('menu-depth-2');
             jQuery(jQuery(this).parent().parent()).after(objToMove.clone());
             objToMove.parent().remove();

         });
        jQuery('ul:eq(0)',jQuery(this)).attr({'data-role':'listview','data-inset':'false','data-mini':'true'}); // set the style for the menu-depth-2 items
        //$('ul:eq(0) li a',$(this)).attr({'data-ajax':'false'}); // disable ajax for the menu-depth-2 items

        var newContents = jQuery(this).html();
        jQuery(this).remove();
        jQuery('#mainmenuContainer',jQuery('#navigation', obj)).append('<div data-role="collapsible" data-inset="true"><h3>'+newTitle+'</h3>'+newContents+'</div>');

     });

    jQuery('document').trigger('create');



});