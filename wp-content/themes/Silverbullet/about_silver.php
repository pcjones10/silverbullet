<?php

/*

Template Name: About Silver Template 2

*/



get_header('about');





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

		  

             <div class="dealerBanner left about">

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

					 }

				 endwhile; endif; 

				?>               

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

		<div class="dealerBox left about">

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

                  <div class="extracontent" style="margin-top: 15px;">

                    <?php while (have_posts()) : the_post(); ?> 

                    <?php the_content(); ?>  

                    <?php 

                    endwhile; 

                    wp_reset_query();

                    ?>

            	</div>     

			</div>

		<div class="dealerBox right">

				<?php 

				  if(empty($bottomimg)) {  

					  echo '<img src="http://www.silverbulletcorp.com/wp-content/themes/Silverbullet/images/dealerBoxRight.png" alt="" />';

				  } else {

					  echo $bottomimg;								

				  }			

				?>    

                 <div class="extracontent" style="margin-top: 15px;">

				<?php

                $field8 = get_post_meta($post->ID, 'About Silver 3rd paragraph', true); 

				if (!empty($field8)) {

				 echo $field8; 

				 } else {} 

				 ?>    

					<ul>

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

            	</div>   

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

                      <a href="<?php echo home_url('dealer/our-product'); ?>">&gt; read more</a></div>

                      

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

                      <a href="<?php echo home_url('case-study/'); ?>">&gt; read more</a></div>

                   

                   

                   </div>

               </div>

               

               <div class="watercalcu">

                  <ul>

                      <li><div id="test4"></div></li>

                      <li>Current Customer Water Savings in Gallons</li>

                      <li><a href="<?php echo home_url('silver-bullet/dealer/our-product/savings-calculator'); ?>" id="hmbotli">Calculate Your Savings</a></li>

                  </ul>

               </div>

				<script language="javascript" type="text/javascript">

                    var counter4 = new JSCounter.NumberCounter("test4",{start:1720000000, pretoken:"", auto:true});

                    counter4.render();

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

