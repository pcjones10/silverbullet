<?php

/*

Template Name: Testimonials Template

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

               <?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

				 $args = array(

				   'post_type' => 'attachment',

				   'numberposts' => -1,

				   'post_status' => null,

				   'post_parent' => $post->ID

				  );

				  $attachments = get_posts( $args );

					 if ( $attachments ) {

						foreach ( $attachments as $attachment ) {

							   $imgurlsb = wp_get_attachment_image_src( $attachment->ID, 'Full' );

							   echo '<img src="'.$imgurlsb[0].'" alt="" />';

						  }

					 }

				 endwhile; endif; 

				?></div>

                <div class="banner_right_inner">

                <?php 

				$tophdr = get_post_meta($post->ID, 'Top Header', true); 

				if (!empty($tophdr)) {

				?>

				<h1 style="padding-top:50px;"><?php echo $tophdr; ?></h1>

                <?php } else {} 

				$toptxt = get_post_meta($post->ID, 'Intro text', true); 

				if (!empty($toptxt)) {

				?>

				<p><?php echo $toptxt; ?></p>

                <?php } else {} ?>                  

                </div>

                

                </div>

                <div class="casecontent"  >

                     <div class="installation">

                       <div class="instal">

                         <h4>Testimonial:</h4>

							<?php while (have_posts()) : the_post(); ?> 

                            <?php the_content(); ?>  

                            <?php 

                            endwhile; 

                            wp_reset_query();

                            ?>

                         <div class="clear"></div>

                         <p>&nbsp;</p>

                       </div>

                </div>

                    <div class="clear"></div>

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

               </div>				<script type="text/javascript">

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

    

    </div>

 <?php

	/* Always have wp_footer() just before the closing </body>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to reference JavaScript files.

	 */

get_footer();

	wp_footer();

?>

</body>

</html>

