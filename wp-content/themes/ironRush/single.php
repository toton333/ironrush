<?php get_header(); ?>
    <?php while(have_posts()) : the_post();  ?>
    <div id="tooplate_middle_subpage">
    	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_w450 float_l">
                    <h2><?php the_title( ); ?></h2>
                    <?php the_post_thumbnail( '', array('class' => 'image_wrapper image_fl'  ) ); ?>
                    <?php the_content( ); ?>
        </div>
        
        <?php get_sidebar( ); ?>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    <?php endwhile; ?>

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php get_footer(); ?>