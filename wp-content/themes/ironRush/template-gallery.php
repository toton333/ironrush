<?php 
/*
Template Name: Gallery Template
*/

get_header( );
?>
    
    <div id="tooplate_middle_subpage">
    	<h2>Gallery</h2>
        <p>Nullam euismod semper iaculis. Pellentesque elementum mauris enim. In lobortis mauris lacinia est ullamcorper vel ullamcorper elit convallis. Aenean urna enim, tempor sed semper vel, ornare id dui. Pellentesque sagittis imperdiet consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div id="gallery">
            <ul>
                <?php 
                 $args = array('post_type' => 'work-gallery', 'posts_per_page' => -1 );
                 $items = new WP_Query($args);
                 if($items->have_posts()) : while($items->have_posts()) : $items->the_post();

                 ?>
                <li>
                    <span><a href="<?php the_permalink(); ?>">Detail</a></span>
                    <a class="lightbox" href="<?php echo get_post_meta( get_the_ID(), 'wpcf-popup-image', true ); ?>" title="<?php echo get_post_meta( get_the_ID(), 'wpcf-image-title', true ); ?>">
                    <?php the_post_thumbnail( ); ?>
                    </a>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
                
            </ul>  
      </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php get_footer( ); ?>