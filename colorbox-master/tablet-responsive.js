jQuery(document).ready(function(){
 
//jQuery.colorbox.settings.width = "92%";
jQuery.colorbox.settings.height = "98%";
jQuery.colorbox.settings.maxHeight = 850;
jQuery.colorbox.settings.maxWidth = 1200;
    var myLightBox = jQuery(".gallery a").colorbox({rel:'gal'});
jQuery(window).on("resize", function(){
    jQuery.fn.colorbox.resize({
       
     
    });
});
});