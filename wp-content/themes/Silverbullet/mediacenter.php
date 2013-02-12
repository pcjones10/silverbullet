<?php

/*

Template Name: Media Page

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

            <div class="innerbox"> 

                <div class="banner_inner">

                <div class="banner_left_inner mediacenter">

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

							$imgpostid = apply_filters( 'the_title', $attachment->post_title );

							if ($imgpostid == 'Top') {

							$imgurlsb = wp_get_attachment_image_src( $attachment->ID, 'Full' );

							echo '<img src="'.$imgurlsb[0].'" alt="" style="float:right" height="315" width="514" />';

							} else if  ($imgpostid == 'Bottom') {

							$imgurlsbot = wp_get_attachment_image_src( $attachment->ID, 'Full' );

							$bottomimg = '<img src="'.$imgurlsbot[0].'" alt="" height="249" width="490" />';

							} else {}

						  }

					 } else {

						 ?>

                         <img src="<?php bloginfo('template_url'); ?>/images/inbanner.jpg" alt="" />			

                         <?php }

				 endwhile; endif; 

				?>  



                </div>

                <div class="banner_right_inner">

                <?php 

				$tophdr = get_post_meta($post->ID, 'Top Header', true); 

				if (!empty($tophdr)) {

				?>

				<h1><?php echo $tophdr; ?></h1>

                <?php } else {} 

				$toptxt = get_post_meta($post->ID, 'Intro text', true); 

				if (!empty($toptxt)) {

				?>

				<p><?php echo $toptxt; ?></p>

                <?php } else {} ?>    

                </div>

                

                </div>

                

                <div class="pressrel">

                <h2>Press Releases</h2>

                <ul>

				<?php

                    $annouID = 528;

					$pages = get_pages( array( 'child_of' => $annouID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $annouID,'number' => 5, ) );

                    $count = 0;

                    foreach($pages as $page)

                    {



                                    echo '<li><span class="somu" style="width:168px">';
									
									

                                    echo mysql2date('M. j Y', $page->post_date);

                                    echo '</span><a href="'.get_page_link( $page->ID ).'">';

                                    echo $page->post_title;
									
									echo get_media_icons($page->ID);

									echo '</a></li>'; 

                

                    }

                ?>                

                </ul>

                <br />

                <a href="<?php echo home_url('/media-center/press-releases'); ?>" style="font: normal 14px arial;color: #F1E972;padding: 0; margin: 0">View More Press Releases</a>

                <br />                

                </div>

                

                <div class="newsannouncement">

                <h2>News</h2>

                <ul>

				<?php

                    $annouID = 533;

					$pages = get_pages( array( 'child_of' => $annouID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $annouID,'number' => 5, ) );

                    $count = 0;

                    foreach($pages as $page)

                    {

                     	$nwssource = get_post_meta($page->ID, 'News Source', true); 

						echo '<li><span class="somu">'.mysql2date('M. j Y', $page->post_date).'</span><span class="newsource">'.$nwssource.'</span><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.get_media_icons($page->ID).'</a></li>';                

                    }

                ?>                  

                </ul>

                <br />

                <a href="<?php echo home_url('/media-center/news'); ?>" style="font: normal 14px arial;color: #F1E972;padding: 0; margin: 0">View More News</a>

                <br />  

                <br />              

                <h2>Anouncements</h2>

                <ul>

				<?php

                    $annouID = 530;

					$pages = get_pages( array( 'child_of' => $annouID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $annouID,'number' => 5, ) );

                    $count = 0;

                    foreach($pages as $page)

                    {



                                    echo ' <li><span class="somu">';

                                    echo mysql2date('M. j Y', $page->post_date);

                                    echo '</span><a href="'.get_page_link( $page->ID ).'">';
									
									
                                    echo $page->post_title;
									
									echo get_media_icons($page->ID);
									
									echo '</a></li>';

                

                    }

                ?>

                </ul>

                <br />

                <a href="<?php echo home_url('/media-center/annoucements'); ?>" style="font: normal 14px arial;color: #F1E972;padding: 0; margin: 0">View More Annoucements</a>

                <br />   

                <br />             

                <h2>Resources</h2>

                <ul>

				<?php

                    $annouID = 869;

					$pages = get_pages( array( 'child_of' => $annouID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $annouID,'number' => 5, ) );

                    $count = 0;

                    foreach($pages as $page)

                    {



                                    echo ' <li><span class="somu">';

                                    echo mysql2date('M. j Y', $page->post_date);

                                    echo '</span><a href="'.get_page_link( $page->ID ).'">';

                                    echo $page->post_title;

									echo '</a></li>';

                

                    }

                ?>

                </ul>

                <br />

                <a href="<?php echo home_url('/media-center/resources'); ?>" style="font: normal 14px arial;color: #F1E972;padding: 0; margin: 0">View More Resources</a>

                <br />

                <br />

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



	wp_footer();

?>

</body>

</html>

