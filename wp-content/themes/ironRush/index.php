<?php get_header( ); ?>
    
    <div id="tooplate_middle_subpage">
    	<h2>Blog</h2>
        <p>Praesent ut nibh lorem, vel vestibulum neque.  Etiam aliquet lectus vitae purus ornare quis iaculis purus gravida. Cras aliquet, lectus eu varius aliquam, tellus magna vehicula neque, id pharetra velit mauris quis sapien. Nam at fringilla nunc. In hac habitasse platea dictumst. Aenean sed leo nisi, a aliquam mauris.</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_w600 float_l">

            <?php 
                if(have_posts()) : while(have_posts()) : the_post();
             ?>
        	<div class="post_box">
            	<?php the_post_thumbnail( ); ?>
                <p class="post_meta"><span class="cat">Posted in <?php the_tags(); ?></span> | Date: <?php the_time('M j, Y')  ; ?></p>
                
                <h2><?php the_title(); ?></h2>
                <p><?php echo ironRush_readmore(); ?></p>
                <a class="more" href="<?php the_permalink(); ?>">More</a>
                <div class="cleaner"></div>
            </div>
            <?php endwhile;  else: ?>
                <h1> No posts are found.</h1>
            <?php endif; wp_reset_postdata(); ?>
            
		</div>
        
        <?php get_sidebar( ); ?>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php get_footer( ); ?>