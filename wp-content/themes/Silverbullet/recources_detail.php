<?php

/*

Template Name: Resource Detail Page

*/



get_header('mediacenter');

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

                <div class="banner_left_inner mediacenter"><img src="<?php bloginfo('template_url'); ?>/images/inbanner.jpg" alt="" /></div>

                <div class="banner_right_inner">

                <h1>Silver Bullet</h1>

                <p>See the resources below to find out about<br />

                the latest Silver Bullet announcements.</p>

                </div>

                

                </div>

                <div style="font-size:14px; float:right; width:100%; text-align:right; color:#FFF; padding:25px;">

                	<a href="<?php echo home_url('/media-center'); ?>" style="color:#F1E958; text-decoration:none; font-size:16px;">Back to Media Center</a>

                </div>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div style="font-size:14px; color:#FFF; padding:25px;">

                	<h3 style="color:#F1E958; margin-bottom:15px; font-weight: normal; font-size: 32px;width: 450px"><?php the_title(); ?></h3>

					<?php the_content(); ?>

					<div style="margin-top: 10px">

						<?php 

						$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 

						$attachments = get_posts($args);

						if ($attachments) {

							foreach ( $attachments as $attachment ) {

								$imgurlsb =  wp_get_attachment_url($attachment->ID);

								$attachtitle =  apply_filters( 'the_title' , $attachment->post_title );

								echo '<a href="'.$imgurlsb.'" style="width: auto;height: auto;margin: 2px 0;color: #EBEBEB;font: normal 17px/28px arial;text-decoration: none;padding-left: 0px;">'.$attachtitle.'</a><br /><br />';

							}

						}						

						?>

                    

                    </div>                    

                </div>

                 <?php endwhile; else: ?>

                 <?php endif; ?>

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



	wp_footer();

?>

</body>

</html>

