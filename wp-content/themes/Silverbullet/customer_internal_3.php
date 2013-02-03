<?php

/*

Template Name: Customer Internal Level 3

*/



get_header('customer');





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

		  

             <div class="dealerBanner left customer">

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

			</div>

		<div class="dealerBox right">

				<img src="<?php bloginfo('template_url'); ?>/images/dealerBoxRight.png" alt="" />

                <div class="extracontent" style="margin-top: 15px;">

                    <?php while (have_posts()) : the_post(); ?> 

                    <?php the_content(); ?>  

                    <?php 

                    endwhile; 

                    wp_reset_query();

                    ?>

            	</div>                 

		</div>

		<div class="clear"></div>

	</div>

	

	

	

		  <div class="bannerbottom"></div>

          <div class="bubblebox">

               <div class="newsbox">

                   		<div class="latestnews">

                          <h2 class="yellow">Oct 29, 2012</h2>

                          <p>Silver Bullet Water Treatment LLC Receives NREL's Best Venture Award</p>

                          <a href="<?php echo home_url('/media-center'); ?>">&gt; read more</a>

                      	</div>

 					<?

				   	if (is_page( '383' )) {

					?>

                    <!--  Silver Dealer -->

                       <div class="water_save">

                        	<a href="<?php echo home_url('silver-bullet/customer/our-product/savings-calculator'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/estimate.jpg" alt="" /></a>

                       </div>   

                    <!--  End Silver Dealer -->                   

                    <?php } else { ?>

                       <div class="oursystem">

                          <p>The Silver Bullet system provides an innovative, commercial technology to condition cooling tower water better and faster than conventional chemical systems without the use of toxic chemicals.</p>

                          <a href="<?php echo home_url('/customer/our-product'); ?>">&gt; read more</a>

                       </div> 

                    <?php } ?>

                      

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

                </ul>                         <a href="<?php echo home_url('/case-studies'); ?>">&gt; read more</a>

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

