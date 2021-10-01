<?php
/**
 * @package WordPress
 * @subpackage Bones
 */
 add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#43C6E4'); ?>; }
         </style>
    <?php
}
    get_header();  //the Header
        
    get_template_part( 'menu', 'index' ); //the  menu + logo/site title 
    
    get_template_part( 'loop', 'index' ); //the Loop  
     
    get_template_part( 'sidebar', 'index' ); //the Sidebar 
            
    get_footer(); //the Footer 
   
?>                        
           
