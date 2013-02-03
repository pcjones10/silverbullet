<?php

/*

Template Name: Case Study Template

*/



get_header('casestudy');

?>

<!-- +++++++++++++++++wrapper start ++++++++++++++++ -->

<div class="wrapper">

         <div class="menu2">

        <ul id="nav">

			<li class="sub"><a href="<?php echo home_url('/customer'); ?>"  >Customer</a>

				<ul style="margin-left: 5px"> 

					<div class="somnath">  

					<?php wp_list_pages('title_li=&child_of=102&sort_column=menu_order&sort_order=asc&depth=1'); ?>              

					</div>

                    <div style="float:right;width:120px;"> 

					<?php wp_list_pages('title_li=&child_of=383&sort_column=menu_order&sort_order=asc'); ?>

                    </div>

				</ul>

            </li>

			<li class="sub"><a href="<?php echo home_url('/dealer'); ?>">Dealer</a>

                <ul> 

                    <div class="somnath">  

						<?php wp_list_pages('title_li=&child_of=46&sort_column=menu_order&sort_order=asc&depth=1'); ?>

                    </div>

                    <div style="float:right;width:120px;">  

                        <?php wp_list_pages('title_li=&child_of=336&sort_column=menu_order&sort_order=asc'); ?>

                    </div>

                </ul>

			</li>

		</ul>

		 </div>

          <div class="clear"></div>

            <div class="innerbox"> 

                <div class="banner_inner">

                <div class="banner_left_inner casestudy">

<img src="<?php

$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' =>'image') );

foreach ( $attachments as $attachment_id => $attachment ) {

	echo wp_get_attachment_url( $attachment_id, 'medium' );

} ?>" />				

                </div>

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

								<?php 

                                $watuse = get_post_meta($post->ID, 'Case Water Usage', true); 

                                if (!empty($watuse)) {

                                ?>

                                <div class="usage">Water Usage:</div>

                                <?php } else {}   ?>

								<?php 

                                $watuse = get_post_meta($post->ID, 'Energy Usage', true); 

                                if (!empty($watuse)) {

                                ?>

                            	<div class="usage">Energy  Usage:</div>

                                <?php } else {}   ?>

								<?php 

                                $watuse = get_post_meta($post->ID, 'Cycles of Concentration', true); 

                                if (!empty($watuse)) {

                                ?>

                            	<div class="usage">Cycles of Concentration:</div>

                                <?php } else {}   ?>

								<?php 

                                $watuse = get_post_meta($post->ID, 'Scaling Control', true); 

                                if (!empty($watuse)) {

                                ?>

                            	<div class="usage">Scaling Control: </div>

                                <?php } else {}   ?>

								<?php 

                                $watuse = get_post_meta($post->ID, 'Basin Temperature', true); 

                                if (!empty($watuse)) {

                                ?>

                            	<div class="usage">Basin Temperature:</div>

                                <?php } else {}   ?>

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

                            <div class="usagecont">

								<?php 

                                $scaling = get_post_meta($post->ID, 'Scaling Control', true); 

                                if (!empty($scaling)) {

                                ?>

                                <?php echo $scaling; ?>

                                <?php } else {}   ?>                             

                            </div>

                            <div class="usagecont">

								<?php 

                                $btemp = get_post_meta($post->ID, 'Basin Temperature', true); 

                                if (!empty($btemp)) {

                                ?>

                                <?php echo $btemp; ?>

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

                <!-- Latest News Box -->

                <div class="latestnews">

				<?php

                $customkey = 'Promo'; // Promo Key

                $customvalue = '1'; // Promo Value 1

                

                global $wpdb;

                $my_posts = $wpdb->get_results("SELECT * FROM $wpdb->posts, $wpdb->postmeta WHERE ID = $wpdb->postmeta.post_id AND meta_key = '$customkey' AND meta_value = '$customvalue' ORDER BY post_date DESC");

                

                foreach ($my_posts as $post) :

                setup_postdata($post);



  				echo ' <h2 class="yellow">';

				echo mysql2date('M. j Y', the_date());

				echo '</h2><p>';

				echo the_title();

				echo '</p>'; 

                echo '<a href="';

                echo the_permalink();

                echo '" class="more">&gt; read more</a>';

                endforeach;

                ?>                  

                </div>

                <!-- End Latest News Box -->

                <div class="water_save">

					<a href="<?php echo home_url('silver-bullet/dealer/our-product/savings-calculator'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/estimate.jpg" alt="" /></a>

				</div>

                <div class="silv_dealer">

                <a href="<?php echo home_url('silver-bullet/dealer/become_dealer/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a>

                </div> 

                </div>               

          </div>

    

               <div class="watercalcu">

                  <ul>

                      <li><span id="cans"></span></li>

                      <li>Current Customer Water Savings in Gallons</li>

                      <li><a href="<?php echo home_url('silver-bullet/dealer/our-product/savings-calculator'); ?>" id="hmbotli">Calculate Your Savings</a></li>

                  </ul>

               </div>

				<script type="text/javascript">

                var start = new Date(2011, 0, 1);

                var rate = 1 / 10 / 100;

                var base = 1720000000;



                setInterval(function () {

				function numberWithCommas(n) {

					var parts=n.toString().split(".");

					return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");

				}                  

				var cans = Math.floor((new Date() - start) * rate) + base;

 

                $("#cans").text(numberWithCommas(cans)); //  jQuery Function

                }, 100); // update every 5 seconds -- pick anything you like; won't affect result

                </script>

               

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

