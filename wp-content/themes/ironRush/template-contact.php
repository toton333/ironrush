<?php 
/*
Template Name: Contact Template
*/
get_header( );
?>
    
    <div id="tooplate_middle_subpage">
    	<h2>Contact Us</h2>
        <p>Nam aliquam erat ut orci lobortis tempor. Etiam dignissim nulla vitae erat posuere at rhoncus justo lacinia. Morbi et massa bibendum libero ornare tincidunt. Quisque sem magna, scelerisque id pretium nec, consectetur quis dolor. Aliquam sed dolor purus. Phasellus quis tempus nulla. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_w960">
        	<div class="col_w450 float_l">
                
			  <div class="col_w200 float_l">
 					<h4>Map</h4>
					<div class="cleaner h10"></div>
					<div id="map" >
                        <iframe hscape="5" vscape="5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.018103095235!2d88.31444621448087!3d22.578426238447882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027825a9e214bb%3A0xeeeb6de5d337079!2sHowrah+Vivekananda+Institution!5e0!3m2!1sen!2sin!4v1455273746955" width="300" height="190" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
		            <div class="cleaner h30"></div>				
                    <h4>Mailing Address</h4>
                    <h6><strong>Company Name</strong></h6>
                    142-115 Maecenas ac eros ut, <br />
					Curabitur vehicula elit, 15540 <br />
					Suspendisse euismod <br /><br/>
					Phone: 010-010-5500 <br />
					email: <a href="mailto:info@yoursite.com">info@yoursite.com</a>    
              </div>
                <div class="cleaner"></div>
            </div>
            
            <div class="col_w450 float_r">
				<div id="contact_form">
        
					<h4>Quick Contact Form</h4>
					
				<?php 
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }

                ?>
					
				</div>
            </div>
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<?php get_footer( ); ?>