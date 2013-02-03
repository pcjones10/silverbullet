<?php

/*

Template Name: Dealer Calcultor Page

*/





get_header('dealer');

?>

<script language="javascript" type="text/javascript">

/* Calculator */

<!-- Begin

var cpc;

var tonnage;

var hours;

var days;

var propcpc;

function calcAmt(frm) {

cpc = eval(frm.cpc.value);

tonnage = eval(frm.tonnage.value);

hours = eval(frm.hours.value);

days = eval(frm.days.value);

propcpc = eval(frm.prcpc.value);

gphvalue = ((1.8 * tonnage) + (1.8 * tonnage) / (cpc - 1)).toFixed(2);

document.getElementById("gph").innerHTML= ((1.8 * tonnage) + (1.8 * tonnage) / (cpc - 1)).toFixed(0);

yrwater = (gphvalue * hours * days).toFixed(2);

propgph = ((1.8 * tonnage) + (1.8 * tonnage) / (propcpc - 1)).toFixed(2);

estwater = (propgph * hours * days).toFixed(2);

watersave = (yrwater - estwater).toFixed(2);

watsavper = (watersave / yrwater).toFixed(2) * 100;

document.getElementById("yrwater").innerHTML= (gphvalue * hours * days).toFixed(0);

document.getElementById("watersave").innerHTML= (yrwater - estwater).toFixed(0);

document.getElementById("watsavper").innerHTML= (watersave / yrwater).toFixed(2) * 100;

document.getElementById("propgph").innerHTML= ((1.8 * tonnage) + (1.8 * tonnage) / (propcpc - 1)).toFixed(0);

document.getElementById("estwater").innerHTML= (propgph * hours * days).toFixed(0);

}

//  End -->

</script>

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

                <div class="banner_left_inner watersevings"><img src="<?php bloginfo('template_url'); ?>/images/inbanner1.jpg" alt="" /></div>

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

                <div class="currentwateruses">

                <div class="wateruses">

                

                <h4>Current Water Usage</h4>

                 <form method=get name=frm>

                                 <ul>

                  <li>

                        <div class="contactleft"><strong class="number">1</strong>Cycles of Concentration</div>

                        <div class="inputbox"><input type=text name=cpc></div>

                        <div class="clear"></div>

                        <div style="width:100%;height:auto"><span style="font-size:11px">Don't know how to calculate your current cycles of concentration? Simply divide results of the concentration of total calcium hardness in the tower water by the concentration of the makeup water.</span></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">2</strong>GPH</div>

                        <div class="inputbox"><span id="gph" style="font-size: 20px"></span></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">3</strong>Tonnage</div>

                        <div class="inputbox"><input type=text name=tonnage></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">4</strong>Hours per day</div>

                        <div class="inputbox"><input type=text name=hours></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">5</strong>Days per year</div>

                        <div class="inputbox"><input type=text name=days></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">6</strong>Annual water usage</div>

                        <div class="inputbox"><span id="yrwater" style="font-size: 20px"></span></div>

                        <div class="clear"></div>

                    </li>

                     <li>

                        <div class="contactleft"><strong class="number">Water savings</strong></div>

                        <div class="inputbox"><span id="watersave" style="font-size: 20px"></span></div>

                        <div class="clear" style="height:10px;"></div>

                        <div class="contactleft"><strong class="number">%</strong></div>

                        <div class="inputbox"><span id="watsavper" style="font-size: 20px"></span></div>

                        <div class="clear"></div>

                    </li>

                    

                </ul>

                </div>

                

                <div class="wateruses" style="float:right">

                

                <h4>Proposed Water Usage</h4>



                  <ul>

                  <li>

                        <div class="contactleft"><strong class="number">1</strong>Cycles of Concentration </div>

                        <div class="inputbox"><input type=text name=prcpc></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">2</strong>GPH</div>

                        <div class="inputbox"><span id="propgph" style="font-size: 20px"></span></div>

                        <div class="clear"></div>

                    </li>

                    

                    <li>

                        <div class="contactleft"><strong class="number" style="float:left">3</strong><p style="width:150px"> Estimated annual<br /> water usage</p></div>

                        <div class="inputbox"><span id="estwater" style="font-size: 20px"></span></div>

                        <div class="clear"></div>

                    </li>

                </ul>

  <ul>



                    <li>

	<center><input class="blank" type=button name=calc value="Calculate" onClick=calcAmt(this.form)>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input class="blank" type=reset value="Reset"></center>

                </form>

                    </li>

  </ul>

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

               <div class="oursystem">

                  <p>The Silver Bullet system provides an innovative, commercial technology to condition cooling tower water better and faster than conventional chemical systems without the use of toxic chemicals.</p>

                  <a href="<?php echo home_url('/customer/our-product'); ?>">&gt; read more</a>

               </div> 

                

                <div class="silv_dealer">

                <a href="<?php echo home_url('silver-bullet/dealer/become_dealer/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a>

                </div>

                

                

                </div>

                </div>

          </div>

    

               <div class="watercalcu">

                  <ul>

                      <li><span id="cans"></span></li>

                      <li>Current Customer Water Savings in Gallons</li>

                      <li><a href="<?php echo home_url('silver-bullet/dealer/our-product/savings-calculator'); ?>" id="hmbotli">Calculate Your Savings</a></li>

                  </ul>

               </div>

				<script type="text/javascript">

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



	wp_footer();

?>

</body>

</html>

