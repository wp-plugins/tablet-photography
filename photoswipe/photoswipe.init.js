jQuery(document).ready(function(){

 //   var myPhotoSwipe = jQuery(".gallery a").photoSwipe( );
 var thumbnails = jQuery("a:has(img)").filter(  function() { return /(jpe?g|png|gif)$/i.test(jQuery(this).attr('href')) });
 thumbnails.addClass("singleGallery");   
 var myPhotoSwipe = jQuery("a.singleGallery").photoSwipe( );
 
});
