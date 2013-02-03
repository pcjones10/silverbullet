<?php

/*

Template Name: Mission Page

*/



get_header();





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

				  <h4>Silver Bullet</h4>

				  <p><span>The Silver Bullet water treatment system provides building engineers and water treatment&nbsp;</span>professionals an innovative, commercial approach to treating cooling tower water without adding harsh or toxic chemicals. The Silver Bullet system is a better and more cost effective solution than conventional chemical systems.</p><p>Using proprietary technology that includes ultraviolet (UV) light and additional technology, the Silver Bullet system creates a gas, that when added to water, forms hydrogen peroxide and holds minerals in solution. </p>

			  </div>

			  <div class="clearBoth"></div>

             

          </div>

		  

	<div class="casecontent"  >

		<div class="dealerBox left about">

				<h4>Silver Bullet’s mission is to provide a cooling tower water treatment solution that:</h4>

				<div class="subBox">

					<div class='subNum'>1</div>

					<div class='subText'>Replaces the  use of toxic chemicals</div>

					<div class="clearBoth"></div>

				</div>

				<div class="subBox">

					<div class='subNum'>2</div>

					<div class='subText'>Keeps building engineers and water treatment professionals safe</div>

					<div class="clearBoth"></div>

				</div>

				<div class="subBox">

					<div class='subNum'>3</div>

					<div class='subText'>Reduces operating and maintenance costs</div>

					<div class="clearBoth"></div>

				</div>

		</div>

		<div class="dealerBox right">

				<img src="<?php bloginfo('template_url'); ?>/images/dealerBoxRightAbout.jpg" alt="" />

		</div>

		<div class="clear"></div>

	</div>

	

	<div class="dealerBannerCont down">

		  

             <div class="dealerBanner left about">

				 <h4>About</h4>

				 <p><span>Silver Bullet Water Treatment LLC, located in Denver, Colorado, provides an innovative, </span>commercial approach to treating cooling tower water without adding toxic chemicals.</p><p>The Silver Bullet system was created by Chief Technology Officer David Kolstad.  Following three-decades of experience as an operating engineer in power plants, commercial buildings and hospitals, David’s hands-on work with traditional, chemical-based approaches to water treatment inspired him to develop a more efficient, lower maintenance and safer solution.</p>

			 </div>

			  <div class="dealerBanner right about">

				  <h4>Memberships</h4>

				  <p><span>Silver Bullet Water Treatment LLC has built an advanced, innovative, commercial approach to </span>water treatment and is a member of the water treatment industry’s key associations and trade groups.</p><p>- Association of Water Technologies<br />

					  - American Society of Heating, Refrigerating and Air-conditioning Engineers<br />

					  - U.S. Green Building Council<br />

					  - Entrepreneurial By Nature

				  </p>

			  </div>

			  <div class="clearBoth"></div>

             

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

