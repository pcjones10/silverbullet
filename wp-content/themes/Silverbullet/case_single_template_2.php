<?php
/*
Template Name: Case Study Scanling & Basin
*/

get_header('casestudy');
?>
<!-- +++++++++++++++++wrapper start ++++++++++++++++ -->
<div class="wrapper">
         <div class="menu2">
        <ul id="nav">
			<li class="sub"><a href="<?php echo home_url('/customer'); ?>"  >Customer</a>
				<ul class="short"> 
					<div class="somnath">  
						<li><a href="<?php echo home_url('/our-products'); ?>">Our products</a></li>
						<li><a href="<?php echo home_url('/faqs-customers'); ?>">FAQs</a></li>
					</div>
				</ul>
            </li>
			<li class="sub"><a href="<?php echo home_url('/dealer'); ?>">Dealer</a>
                 
                <ul> 
		<div class="somnath">  
			<li><a href="<?php echo home_url('/our-products'); ?>"><strong>Our Products</strong></a></li>
			<li><a href="<?php echo home_url('/how-it-works'); ?>">How it Works</a></li>
			<li><a href="<?php echo home_url('/become_dealer'); ?>">Become a Dealer </a></li>
			<li><a href="<?php echo home_url('/faqs'); ?>">FAQs</a></li>
			<li><a href="<?php echo home_url('/dealer-login'); ?>">Dealer Login</a></li>
		</div>
					<div style="float:right;width:120px;">  
						<li><a href="<?php echo home_url('/how-it-works'); ?>">How it Works</a></li>
						<li><a href="<?php echo home_url('/silver-bullet'); ?>">The Silver Bullet Advantage</a></li>
						<li><a href="<?php echo home_url('/easily-installed'); ?>">Installs Easily</a></li>
						<li><a href="<?php bloginfo('url');?>/savingcalculator">Savings Calculator</a></li>
	<li><a href="<?php echo home_url('/memberships'); ?>">Memberships</a></li>
					</div>
                </ul>
                
            </li>
		</ul>
		 </div>
          <div class="clear"></div>
            <div class="innerbox"> 
                <div class="banner_inner">
                <div class="banner_left_inner casestudy">
                <?php
				//Image for Case study
				if ( have_posts() ) : while ( have_posts() ) : the_post();    
                 $args = array(
                   'post_type' => 'attachment',
                   'numberposts' => 1,
                   'post_status' => null,
                  );
                  $attachments = get_posts( $args );
                     if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {
                           $imgurlsb = wp_get_attachment_image_src( $attachment->ID, 'Full' );
						   echo '<img src="'.$imgurlsb[0].'" alt="" />';
                          }
                     }
                 endwhile; endif; ?>"</div>
                <div class="banner_right_inner">
                <?php 
				$tophdr = get_post_meta($post->ID, 'Case Study Top Header', true); 
				if (!empty($tophdr)) {
				?>
				<h1 style="padding-top:50px;"><?php echo $tophdr; ?></h1>
                <?php } else {} 
				$toptxt = get_post_meta($post->ID, 'Case Study Intro text', true); 
				if (!empty($toptxt)) {
				?>
				<p><?php echo $toptxt; ?></p>
                <?php } else {} ?>                  
                </div>
                
                </div>
                <div class="casecontent"  >
                     <div class="installation">
                       <div class="instal">
                         <h4>Installation:</h4>
						  <?php 
                          $tophdr = get_post_meta($post->ID, 'Case Study Installation', true); 
                          if (!empty($tophdr)) {
                          ?>
                          <p><?php echo $tophdr; ?></p>
                          <?php } else {} ?>                         
                       </div>
                       <div class="instal">
                         <h4>Results:</h4>
                         <ul>
						<?php 
                        $results1 = get_post_meta($post->ID, 'Case Results 1', true); 
                        if (!empty($results1)) {
                        ?>
                        <li><?php echo $results1; ?></li>
                        <?php } else {}   
                        $results2 = get_post_meta($post->ID, 'Case Results 2', true); 
                        if (!empty($results2)) {
						?>
                        <li><?php echo $results2; ?></li>
                         <?php } else {}   
                        $results3 = get_post_meta($post->ID, 'Case Results 3', true); 
                        if (!empty($results3)) {
						?>
                        <li><?php echo $results3; ?></li>
                        <?php } else {}   
                        $results4 = get_post_meta($post->ID, 'Case Results 4', true); 
                        if (!empty($results4)) {
						?>
                        <li><?php echo $results4; ?></li>
                        <?php } else {}   
                        $results5 = get_post_meta($post->ID, 'Case Results 5', true); 
                        if (!empty($results5)) {
						?>
                        <li><?php echo $results5; ?></li>
                        <?php } else {}   
                        $results6 = get_post_meta($post->ID, 'Case Results 6', true); 
                        if (!empty($results6)) {
						?>
                        <li><?php echo $results6; ?></li>
                        <?php } else {} ?> 
                         </ul>
                         <div class="clear"></div>
                         <p>&nbsp;</p>
                       </div>
                </div>
                    <div class="clear"></div>
                </div>
                
                <div class="performancebox">
                   <div class="performance">
                      <h1>Performance Metrics with Silver Bullet</h1>
                      <ul>
                         <li>
                            <div class="usage">Water Usage:</div>
                            <div class="usage">Energy  Usage:</div>
                            <div class="usage">Cycles of Concentration:</div>
                            <div class="clear"></div>
                         </li>
                         <li>
                            <div class="usagecont">
								<?php 
                                $watuse = get_post_meta($post->ID, 'Case Water Usage', true); 
                                if (!empty($watuse)) {
                                ?>
                                <?php echo $watuse; ?>
                                <?php } else {}   ?>                            
                            </div>
                            <div class="usagecont">
								<?php 
                                $energy = get_post_meta($post->ID, 'Energy Usage', true); 
                                if (!empty($energy)) {
                                ?>
                                <?php echo $energy; ?>
                                <?php } else {}   ?> 
                            </div>
                            <div class="usagecont">
								<?php 
                                $cycle = get_post_meta($post->ID, 'Cycles of Concentration', true); 
                                if (!empty($cycle)) {
                                ?>
                                <?php echo $cycle; ?>
                                <?php } else {}   ?>                             
                            </div>
                            <div class="clear"></div>
                         </li>
                         
                         
                         
                       
                      </ul>
                   </div>
                   <div class="clear"></div>
                </div>
                <div class="waterdrops">
                <div class="newsbox">
                <div class="latestnews">
                <h2 class="yellow">Oct 29, 2012</h2>
                <p>Silver Bullet Water Treatment LLC Receives NREL's Best Venture Award</p>
                <a href="#">&gt; read more</a></div>
                <div class="water_save">
<!--                <p>Estimate how much Silver Bullet can save your customers.</p>
-->                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/estimate.jpg" alt="" /></a></div>
                
                <div class="silv_dealer">
               
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a></div>
                
                
                </div>
                </div>
          </div>
    
    




<div class="footer">
<div class="footermenu">
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'Fift' ) ); ?>
</div>
</div>
 </div>
 <?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
