<?php 
/*
Template Name: Frontpage Template
*/
get_header(); ?>
    
    <div id="tooplate_middle">
        <div id="slider">
        <?php 
            global $redux_ironRush;
            if (isset($redux_ironRush['opt-slides']) && !empty($redux_ironRush)  ) {
                $ironRush_slides = $redux_ironRush['opt-slides'];
                foreach ($ironRush_slides as $slide) {
                    $image_src = $slide['image'];
                    $desc = $slide['description'];
                    $url  = $slide['url'];
                    ?>

                 <a href="<?php echo $url; ?>"><img src="<?php echo $image_src ?>" alt="" title="<?php echo $desc; ?>" /></a>

                    <?php
                }
            }

        ?>
            
        </div>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_allw300">
        	<h2><?php the_title( ); ?></h2>
            <?php 

            $args = array('post_type'=> 'page', 'name' => 'home');
            $front_items = new WP_Query($args);
            if ($front_items->have_posts()) {
                while ($front_items->have_posts()) {
                    $front_items->the_post();
                    the_content( );
                }
            }
            wp_reset_postdata();
            ?>
            <div class="cleaner"></div>
        </div>
        
        <div class="col_allw300">
        	<h2>Service Overview</h2>
            <ul class="tooplate_list">
	            <li><a href="#">Duis aliquam luctus mauris</a></li>
                <li><a href="#">In tincidunt tortor et est</a></li>
                <li><a href="#">Nam id libero vitae orci</a></li>
                <li><a href="#">Proin laoreet metus arcu</a></li>
                <li><a href="#">Suspendisse vitae velit</a></li>
                <li><a href="#">Vivamus feugiat tempor</a></li>

            </ul>
            <a class="more" href="#">More</a>
        </div>
        
	<div class="col_allw300 col_last">
        <h2>Our Latest Project</h2>
        <div class="fp_lp_box">
            <span><a href="#">Detail</a></span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/tooplate_lp_02.jpg" alt="Image 01" />
        </div>

         <a class="more" href="#">More</a>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php get_footer( ); ?>