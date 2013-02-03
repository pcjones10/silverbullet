<?php

/*

  Template Name: dealer content template

 */



get_header('custom');

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



        <div class="dealerBanner left<?php if(is_page('how-it-works') or is_page('easily-installed')): echo ' customer'; endif; ?>">

        </div>

        <div class="dealerBanner right">

            <h4>The Silver Bullet system offers</h4>

            <p>water treatment companies new opportunities to provide prospective and existing clients with a solution for treating cooling tower water that prevents biological growth, reduces and minimizes scaling, and controls corrosion rates without the use of expensive, toxic chemicals. </p>

        </div>

        <div class="clearBoth"></div>



    </div>



	<div class="casecontent tdc"  >

	<?



$queried_post = get_post($post->ID);

echo apply_filters('the_content', $queried_post->post_content);



?>

</div>

    <div class="bannerbottom"></div>

    <div class="bubblebox">

        <div class="newsbox">

            <div class="latestnews">

                <h2 class="yellow">Oct 29, 2012</h2>

                <p>Silver Bullet Water Treatment LLC Receives NREL's Best Venture Award</p>

                <a href="#">&gt; read more</a></div>

            <div class="oursystem">

                <p>The Silver Bullet system provides an innovative, commercial technology to condition cooling tower water better and faster than conventional chemical systems without the use of toxic chemicals.</p>

                <a href="#">&gt; read more</a></div>



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

                <a href="#">&gt; read more</a></div>





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

