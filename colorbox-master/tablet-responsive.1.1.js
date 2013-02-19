jQuery(document).ready(function(){
 
 
 var thumbnails = jQuery("a:has(img)").filter(  function() { return /(jpe?g|png|gif)$/i.test(jQuery(this).attr('href')) });
 thumbnails.addClass("singleGallery");   

    
    
//jQuery.colorbox.settings.width = "92%";
jQuery.colorbox.settings.height = "98%";
jQuery.colorbox.settings.maxHeight = 850;
jQuery.colorbox.settings.maxWidth = 1200;
    var myLightBox = jQuery("a.singleGallery").colorbox({rel:'gal'});
jQuery(window).on("resize", function(){
    jQuery.fn.colorbox.resize({
       
     
    });
});
});