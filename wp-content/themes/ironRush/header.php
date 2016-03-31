<!DOCTYPE html>
<html <?php language_attributes( ); ?> >
<head>
<meta charset="<?php echo bloginfo('charset' ); ?>" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<style type="text/css">
<?php global $redux_ironRush; ?>
    #site_title h1 a { 
   
    background: url(<?php echo $redux_ironRush['opt-media-logo']['url']; ?>) no-repeat top left; 
}
a.twitter { background: url(<?php echo $redux_ironRush['opt-fb-logo']['url'] ?>) center right no-repeat }
a.facebook { background: url(<?php echo $redux_ironRush['opt-tw-logo']['url'] ?>) center right no-repeat }
</style>

<?php wp_head(); ?>
</head>
<body <?php body_class( ) ?> >
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar">
    	<a class="social_btn twitter">&nbsp;</a>
        <a class="social_btn facebook">&nbsp;</a>
    </div>	
    
    <div id="tooplate_header">
        <div id="site_title"><h1><a href="<?php echo home_url( ); ?>"><?php bloginfo('name' ); ?></a></h1></div>
        
            <?php 
                
                 $args = array(
                     'theme_location' => 'primary',
                     'container_id' => 'tooplate_menu', 
                 );
             
                 wp_nav_menu( $args );
            ?>
              	
    </div> <!-- end of forever header -->