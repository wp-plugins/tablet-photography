<?php
/*
Plugin Name: Tablet Photography
Plugin URI: http://tablet-photography.com/
Description: ipad, tablet and smartphones responsivness for native galleries
Version:  1.1
Author: erwan pianezza
Author URI: http://webmasterbulletin.net
License: MIT LICENSE
*/
 
  class TabletPhotography
  {
 public function __construct()  
    { 
       // $this->plugin_url = get_stylesheet_directory_uri() . "/tablet-photography/" ;
        $this->plugin_url =  plugins_url( '/' , __FILE__ ) ;
        add_action('wp_head',array($this, 'wp_head') ) ;
    }  
    public function wp_head()
    {

        
       if (!is_admin() //&& !is_page(44)
       )
         {
             
         if (!wp_is_mobile())
         {         
         $lightboxJs="colorbox-master/jquery.colorbox-min.js";
        $initJs="colorbox-master/tablet-responsive.1.1.js";
        $lightBoxCss="colorbox-master/colorbox.css";
           
         wp_enqueue_script('tbLightBox',  $this->plugin_url .$lightboxJs, array('jquery'), '1.0', true);
         wp_enqueue_script('tbInit',  $this->plugin_url .$initJs, array('jquery'), '1.0', true);         
         wp_register_style( 'tbLightBoxCss',$this->plugin_url. $lightBoxCss );
         wp_enqueue_style( 'tbLightBoxCss' );
         }
         else 
         {
         $libraryJs="photoswipe/klass.min.js";
         $lightboxJs="photoswipe/code.photoswipe.jquery-3.0.5.js";
         $initJs="photoswipe/photoswipe.init.js";
         $lightBoxCss="photoswipe/photoswipe.css";
         wp_enqueue_script('tbSwipeLib',  $this->plugin_url .$libraryJs, array('jquery'), '1.0', true);
         wp_enqueue_script('tbSwipe',  $this->plugin_url .$lightboxJs, array('jquery'), '1.0', true);
         wp_enqueue_script('tbInit',  $this->plugin_url .$initJs, array('jquery'), '1.0', true); 
         
         wp_register_style( 'tbLightBoxCss',$this->plugin_url. $lightBoxCss );
         wp_enqueue_style( 'tbLightBoxCss' );          
         }
         }

    }
  }
 $wpTabletPhotography = new TabletPhotography();  