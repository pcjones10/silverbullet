<?php

/*

Template Name: Our products Page

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

            <div class="innerbox"> 

                <div class="banner_inner">

					<div class="banner_left_inner"><img src="<?php bloginfo('template_url'); ?>/images/dealerBannerLeftAbout.jpg" alt="" /></div>

					¸	<div class="banner_right_inner">

						<h1 style="padding-top:50px;">Our products</h1>

						<p>The Silver Bullet system installs easily and reduces labor and maintenance costs while lowering energy and water consumption</p>

					</div>

                

                

                

                </div>

                <div class="casecontent"  >

                     <div class="installation">

                       <div class="instal">

                         

                       </div>

                       <div class="instal">

						   <p>The Silver Bullet system installs easily and reduces labor and maintenance costs while lowering energy and water consumption.

							   

							   The Silver Bullet system provides an innovative, commercial technology to condition cooling tower water

							   better and faster than conventional chemical systems without the use of toxic chemicals. Its cost is

							   comparable to that of traditional chemical systems. The Silver Bullet system enables building engineers

							   and water treatment professionals to achieve the three key goals of any cooling tower treatment program

						   without the use of toxic chemicals:</p>

                         <ul>

                             <li>Prevent biological growth</li>

                             <li>Prevent and reduce scaling</li>

                             <li>Reduce rates of corrosion</li>

                         </ul>

                         <div class="clear"></div>

						   <p>This revolutionary commercially available system has the following advantages over competing water

						   treatment methods:</p>

						   <ul><li>Eliminates the use and storage of toxic chemicals</li>

							   <li>Reduces water consumption by increasing cycles of concentration</li>

							   <li>Saves energy by increasing heat transfer efficiency</li>

							   <li>Enables users to qualify for LEED credits, and water and tax rebates where available</li>

						   <li>Increases operating margins for water treatment professionals</li></ul>

                       <div class="clear"></div>

					   <p><a href="<?php echo home_url('/become_dealer'); ?>">Click here</a> to learn more about Silver Bullet and becoming a dealer.</p>

					   <div class="clear"></div>

					   </div>

                </div>

                    <div class="clear"></div>

					

                </div>

                

              

                <div class="waterdrops">

                <div class="newsbox">

                <div class="latestnews">

                <h2 class="yellow">Oct 29, 2012</h2>

                <p>Silver Bullet Water Treatment LLC Receives NREL's Best Venture Award</p>

                <a href="#">&gt; read more</a></div>

                <div class="water_save">

<!--                <p>Estimate how much Silver Bullet can save your customers.</p>

-->                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/estimate.jpg" alt="" /></a></div>

                

                <div class="silv_dealer">

               

                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a></div>

                

                

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

