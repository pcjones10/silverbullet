<?php

/*

Template Name: FAQs Customer Page

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

		  

             <div class="dealerBanner left about">

			 </div>

			  <div class="dealerBanner right about">

				  <h4>Frequently Asked Questions</h4>

				  <p><a href="#top10">Top Ten Frequently Asked Questions</a></p>

<p><a href="#facility">Facility Questions</a></p>

<p><a href="#install">Installation</a></p>

<p><a href="#chemcontrol">Chemistry and Bacteria Control</a></p>

<p><a href="#watersave">Water Savings</a></p>

<p><a href="#labor">Labor and Maintenance</a></p>







			  </div>

			  <div class="clearBoth"></div>

             

          </div>

		  

	<div class="casecontent"  >

		<div class="dealerBox wide">

				<h4>Top Ten Frequently Asked Questions<a name="top10"></a> </h4>





				<!-- SECTION STARTS HERE -->

                <?php $j = 1; ?>    

				<?php query_posts('cat=6&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

				<script type="text/javascript">

                    $(document).ready(function() {

                        $(".message<?php echo $post->ID; ?>").hide();

                        $("span.readmore<?php echo $post->ID; ?>").click(function(){

                            $(".message<?php echo $post->ID; ?>").show("slow");

                            $(this).hide();

                        });

                    });

                </script>     

				<div class="subBox">

					<div class='subNum'><?php echo $j++; ?></div><!-- VISIBLE STARTS HERE -->

					<div class='subText'><?php the_title(); ?></div>

					<div class='subPlus'></div><!-- VISIBLE ENDS HERE -->

					<div class="clearBoth"></div>

				</div>

                <!-- HIDDEN TEXT STARTS HERE -->

                <div class="hiddenBox">

                <?php the_content(); ?>

                <?php 

				$rdmore = get_post_meta($post->ID, 'Read More', true); 

				if (!empty($rdmore)) {

				?>

                <br />

                <span class="readmore<?php echo $post->ID; ?>" style="cursor:pointer; text-decoration:underline; color: #ffffff">Read More...</span>

                <div class="message<?php echo $post->ID; ?>"><?php echo $rdmore ?></div>

                <?php } else {} ?>

                <!-- HIDDEN TEXT ENDS HERE -->

                </div>

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>                  

				<!-- SECTION ENDS HERE -->





<pre>

</pre>

<h4>Facility Questions<a name="facility"></a></h4> 

			<!-- SECTION STARTS HERE -->

                <?php $j = 1; ?>    

				<?php query_posts('cat=7&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

				<script type="text/javascript">

                    $(document).ready(function() {

                        $(".message<?php echo $post->ID; ?>").hide();

                        $("span.readmore<?php echo $post->ID; ?>").click(function(){

                            $(".message<?php echo $post->ID; ?>").show("slow");

                            $(this).hide();

                        });

                    });

                </script>               

				<div class="subBox">

					<div class='subNum'><?php echo $j++; ?></div><!-- VISIBLE STARTS HERE -->

					<div class='subText'><?php the_title(); ?></div>

					<div class='subPlus'></div><!-- VISIBLE ENDS HERE -->

					<div class="clearBoth"></div>

				</div>

                <!-- HIDDEN TEXT STARTS HERE -->

                <div class="hiddenBox">

                <?php the_content(); ?> 

                <?php 

				$rdmore = get_post_meta($post->ID, 'Read More', true); 

				if (!empty($rdmore)) {

				?>

                <br />

                <span class="readmore<?php echo $post->ID; ?>" style="cursor:pointer; text-decoration:underline; color: #ffffff">Read More...</span>

                <div class="message<?php echo $post->ID; ?>"><?php echo $rdmore ?></div>

                <?php } else {} ?>                 

                <!-- HIDDEN TEXT ENDS HERE -->

                </div>

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>                  

				<!-- SECTION ENDS HERE -->

<pre>

</pre>

<h4>Installation<a name="install"></a></h4>



			<!-- SECTION STARTS HERE -->

                <?php $j = 1; ?>    

				<?php query_posts('cat=8&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

				<script type="text/javascript">

                    $(document).ready(function() {

                        $(".message<?php echo $post->ID; ?>").hide();

                        $("span.readmore<?php echo $post->ID; ?>").click(function(){

                            $(".message<?php echo $post->ID; ?>").show("slow");

                            $(this).hide();

                        });

                    });

                </script>                

				<div class="subBox">

					<div class='subNum'><?php echo $j++; ?></div><!-- VISIBLE STARTS HERE -->

					<div class='subText'><?php the_title(); ?></div>

					<div class='subPlus'></div><!-- VISIBLE ENDS HERE -->

					<div class="clearBoth"></div>

				</div>

                <!-- HIDDEN TEXT STARTS HERE -->

                <div class="hiddenBox">

                <?php the_content(); ?>  

                <?php 

				$rdmore = get_post_meta($post->ID, 'Read More', true); 

				if (!empty($rdmore)) {

				?>

                <br />

                <span class="readmore<?php echo $post->ID; ?>" style="cursor:pointer; text-decoration:underline; color: #ffffff">Read More...</span>

                <div class="message<?php echo $post->ID; ?>"><?php echo $rdmore ?></div>

                <?php } else {} ?>                

                <!-- HIDDEN TEXT ENDS HERE -->

                </div>

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>                  

				<!-- SECTION ENDS HERE -->



<pre>

</pre>

<h4>Chemistry and Bacteria Control<a name="chemcontrol"></a></h4>

				<!-- SECTION STARTS HERE -->

                <?php $j = 1; ?>    

				<?php query_posts('cat=9&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

				<script type="text/javascript">

                    $(document).ready(function() {

                        $(".message<?php echo $post->ID; ?>").hide();

                        $("span.readmore<?php echo $post->ID; ?>").click(function(){

                            $(".message<?php echo $post->ID; ?>").show("slow");

                            $(this).hide();

                        });

                    });

                </script>               

				<div class="subBox">

					<div class='subNum'><?php echo $j++; ?></div><!-- VISIBLE STARTS HERE -->

					<div class='subText'><?php the_title(); ?></div>

					<div class='subPlus'></div><!-- VISIBLE ENDS HERE -->

					<div class="clearBoth"></div>

				</div>

                <!-- HIDDEN TEXT STARTS HERE -->

                <div class="hiddenBox">

                <?php the_content(); ?>  

                <?php 

				$rdmore = get_post_meta($post->ID, 'Read More', true); 

				if (!empty($rdmore)) {

				?>

                <br />

                <span class="readmore<?php echo $post->ID; ?>" style="cursor:pointer; text-decoration:underline; color: #ffffff">Read More...</span>

                <div class="message<?php echo $post->ID; ?>"><?php echo $rdmore ?></div>

                <?php } else {} ?>                

                <!-- HIDDEN TEXT ENDS HERE -->

                </div>

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>                  

				<!-- SECTION ENDS HERE -->



<pre>

</pre>

<h4>Water Savings<a name="watersave"></a></h4> 



				<!-- SECTION STARTS HERE -->

                <?php $j = 1; ?>    

				<?php query_posts('cat=10&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

				<script type="text/javascript">

                    $(document).ready(function() {

                        $(".message<?php echo $post->ID; ?>").hide();

                        $("span.readmore<?php echo $post->ID; ?>").click(function(){

                            $(".message<?php echo $post->ID; ?>").show("slow");

                            $(this).hide();

                        });

                    });

                </script>             

				<div class="subBox">

					<div class='subNum'><?php echo $j++; ?></div><!-- VISIBLE STARTS HERE -->

					<div class='subText'><?php the_title(); ?></div>

					<div class='subPlus'></div><!-- VISIBLE ENDS HERE -->

					<div class="clearBoth"></div>

				</div>

                <!-- HIDDEN TEXT STARTS HERE -->

                <div class="hiddenBox">

                <?php the_content(); ?>  

                <?php 

				$rdmore = get_post_meta($post->ID, 'Read More', true); 

				if (!empty($rdmore)) {

				?>

                <br />

                <span class="readmore<?php echo $post->ID; ?>" style="cursor:pointer; text-decoration:underline; color: #ffffff">Read More...</span>

                <div class="message<?php echo $post->ID; ?>"><?php echo $rdmore ?></div>

                <?php } else {} ?>                

                <!-- HIDDEN TEXT ENDS HERE -->

                </div>

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>                  

				<!-- SECTION ENDS HERE -->

<pre>

</pre>

<h4>Labor and Maintenance<a name="labor"></a></h4>



				<!-- SECTION STARTS HERE -->

                <?php $j = 1; ?>    

				<?php query_posts('cat=11&showposts=-1&orderby=date&order=asc'); ?>

                <?php while (have_posts()) : the_post(); ?> 

				<script type="text/javascript">

                    $(document).ready(function() {

                        $(".message<?php echo $post->ID; ?>").hide();

                        $("span.readmore<?php echo $post->ID; ?>").click(function(){

                            $(".message<?php echo $post->ID; ?>").show("slow");

                            $(this).hide();

                        });

                    });

                </script>            

				<div class="subBox">

					<div class='subNum'><?php echo $j++; ?></div><!-- VISIBLE STARTS HERE -->

					<div class='subText'><?php the_title(); ?></div>

					<div class='subPlus'></div><!-- VISIBLE ENDS HERE -->

					<div class="clearBoth"></div>

				</div>

                <!-- HIDDEN TEXT STARTS HERE -->

                <div class="hiddenBox">

                <?php the_content(); ?>  

                <?php 

				$rdmore = get_post_meta($post->ID, 'Read More', true); 

				if (!empty($rdmore)) {

				?>

                <br />

                <span class="readmore<?php echo $post->ID; ?>" style="cursor:pointer; text-decoration:underline; color: #ffffff">Read More...</span>

                <div class="message<?php echo $post->ID; ?>"><?php echo $rdmore ?></div>

                <?php } else {} ?>                

                <!-- HIDDEN TEXT ENDS HERE -->

                </div>

				<?php 

				

                endwhile; 

                wp_reset_query();

                ?>                  

				<!-- SECTION ENDS HERE -->





































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