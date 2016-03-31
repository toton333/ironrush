<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
        <?php if(!dynamic_sidebar( 'footer-sidebar' )) : ?>
    	<div class="col_w200 float_l">
        	<h4>Pages</h4>
            <ul class="tooplate_list">
                <li><a href="#">Donec vel magna</a></li>
                <li><a href="#">Quisque a sapien</a></li>
                <li><a href="#">Integer vel sapien</a></li>
                <li><a href="#">Nulla congue lorem</a></li>
                <li><a href="#">Ut massa purus</a></li>
                <li><a href="#">Lorem ipsum dolor</a></li>
            </ul>
        </div>
        <div class="col_w200 float_l">
        	<h4>Cool Links</h4>
            <ul class="tooplate_list"> 
				<li><a href="#">Donec condimentum et</a></li>
                <li><a href="#"> Cras venenatis lacinia turpis </a></li>
                <li><a href="#">Suscipit tincidunt gravida</a></li>
                <li><a href="#">Rutrum purus at eleifend</a></li>
                <li><a href="#">Fusce at dui at augue ut</a></li>
                <li><a href="#">Nullam eget magna tellus</a></li>
            </ul>
        </div>
		<div class="col_w200 float_l">
        	<h4>Partners</h4>
            <ul class="tooplate_list">
	            <li><a href="#">Ut aliquet augue et</a></li>
                <li><a href="#">Nulla semper eleifend </a></li>
                <li><a href="#">Praesent tempus</a></li>
                <li><a href="#">Aenean vitae leo ut</a></li>
                <li><a href="#">Nulla luctus tempor</a></li>                
                <li><a href="#">Morbi pellentesque</a></li>
            </ul>
        </div>
        <div class="col_w200 float_r col_last">
        	<h4>Contact Us</h4>
            142-115 Maecenas ac eros ut, <br />
            Curabitur vehicula elit, 15540 <br />
            Suspendisse euismod<br /><br />
            Phone: 010-010-5500 <br />
            Email: <a href="mailto:info@company.com">info@company.com</a>
        </div>
       <?php endif; ?>
        
        <p class="cleaner"></p>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
    	<?php 
        global $redux_ironRush;
        echo $redux_ironRush['opt-text-footer'];

        ?>
		
    </div>
    <?php wp_footer(); ?>
</div>
</body>
</html>