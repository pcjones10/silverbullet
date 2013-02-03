<?php

/*

Template Name: Memberships

*/



get_header('dealer');





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

          <div class="dealerBannerCont">

		  

             <div class="dealerBanner left">

			 </div>

				<div class="dealerBanner right about">

                <?php 

				$tophdr = get_post_meta($post->ID, 'Top Header', true); 

				if (!empty($tophdr)) {

				?>

				<h4><?php echo $tophdr; ?></h4>

                <?php } else {} 

				$toptxt = get_post_meta($post->ID, 'Intro text', true); 

				if (!empty($toptxt)) {

				?>

				<p><?php echo $toptxt; ?></p>

                <?php } else {} ?>                                  

			  </div>

			  <div class="clearBoth"></div>

             

          </div>

		  

	<div class="casecontent"  >

		<div class="dealerBox left">

                <?php 

				$midhdr = get_post_meta($post->ID, 'Middle Header', true); 

				if (!empty($midhdr)) {

				?>

				<h4><?php echo $midhdr; ?></h4>

                <?php } else {}        

				$field1 = get_post_meta($post->ID, '1', true); 

				if (!empty($field1)) {

				?>

				<div class="subBox">

					<div class='subNum'>1</div>

					<div class='subText'><?php echo $field1; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {}

				$field2 = get_post_meta($post->ID, '2', true); 

				if (!empty($field2)) {

				?>

				<div class="subBox">

					<div class='subNum'>2</div>

					<div class='subText'><?php echo $field2; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {}                 

				$field3 = get_post_meta($post->ID, '3', true); 

				if (!empty($field3)) {

				?>

				<div class="subBox">

					<div class='subNum'>3</div>

					<div class='subText'><?php echo $field3; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {}                 

				$field4 = get_post_meta($post->ID, '4', true); 

				if (!empty($field4)) {

				?>

				<div class="subBox">

					<div class='subNum'>4</div>

					<div class='subText'><?php echo $field4; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {}                 

				$field5 = get_post_meta($post->ID, '5', true); 

				if (!empty($field5)) {

				?>

				<div class="subBox">

					<div class='subNum'>5</div>

					<div class='subText'><?php echo $field5; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {}                 

				$field6 = get_post_meta($post->ID, '6', true); 

				if (!empty($field6)) {

				?>

				<div class="subBox">

					<div class='subNum'>6</div>

					<div class='subText'><?php echo $field6; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {}                 

				$field7 = get_post_meta($post->ID, '7', true); 

				if (!empty($field7)) {

				?>

				<div class="subBox">

					<div class='subNum'>7</div>

					<div class='subText'><?php echo $field7; ?></div>

					<div class="clearBoth"></div>

				</div>

                <?php } else {} ?>

                

				<?php query_posts('cat=15&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

                <div style="height:auto; width:auto;border-bottom: 1px dotted #ACB2B2;padding-bottom: 15px;padding-top: 15px">

				<?php 

                $args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 

                $attachments = get_posts($args);

                if ($attachments) {

                    foreach ( $attachments as $attachment ) {

                        $imgurlsb =  wp_get_attachment_url($attachment->ID);

                        $attachtitle =  apply_filters( 'the_title' , $attachment->post_title );

                        echo '<div style="width: 125px; height: 125px;float: left"><img src="'.$imgurlsb.'" height="125" width="125" /></div>';

                    }

                }						

                ?> 

                    <div style="width: 230px; height:auto; float: left; margin-left:10px">

                    	<p style="font-size: 16px; color: #F1E972;font-weight: bold;margin-bottom: 8px"><?php the_title(); ?></p>

                        <p style="font-size: 14px; color: #F1E972"><?php the_content(); ?></p>

                    </div>

					<div class="clearBoth"></div>

                    </div> 

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>   

                          	

			</div>

		<div class="dealerBox right">

				<img src="<?php bloginfo('template_url'); ?>/images/dealerBoxRight.png" alt="" />              

		</div>

		<div class="clear"></div>

	</div>

	

	

	

		  <div class="bannerbottom"></div>

          <div class="bubblebox">

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

                   <div class="oursystem">

                      <p>The Silver Bullet system provides an innovative, commercial technology to condition cooling tower water better and faster than conventional chemical systems without the use of toxic chemicals.</p>

                      <a href="<?php echo home_url('dealer/our-product'); ?>">&gt; read more</a>

                   </div>

                   <?

				   	if (is_page( '336' )) {

					?>

                    <!--  Silver Dealer -->

                    <div class="silv_dealer">

                    <a href="<?php echo home_url('become_dealer'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a></div>

                    </div>

                    <!--  End Silver Dealer -->                   

                    <?php

					} else {

						?>

                   <div class="casestudys">

<ul style="margin:0; padding:0">

				<?php

                    $annouID = 7;

					$pages = get_pages( array( 'child_of' => $annouID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $annouID,'number' => 3, ) );

                    $count = 0;

                    foreach($pages as $page)

                    {



                                    echo '<li>';

									echo '<a href="'; 

									echo get_page_link( $page->ID );

									echo '">'.$page->post_title.'</a></li>';

                

                    }

                ?>

                </ul>

                      <a href="<?php echo home_url('/case-studies'); ?>">&gt; read more</a></div>

                   </div>

             <?php } ?>    

              <!-- Latest News Box -->     

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

