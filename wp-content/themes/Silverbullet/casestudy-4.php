<?php
/*
Template Name: CaseStudy4 Page
*/

get_header('casestudy');
?>
<!-- +++++++++++++++++wrapper start ++++++++++++++++ -->
<div class="wrapper">
         <div class="menu2">
        <ul id="nav">
			<li class="sub"><a href="<?php echo home_url('/customer'); ?>"  >Customer</a>
				<ul class="short"> 
					<div class="somnath">  
						<li><a href="<?php echo home_url('/our-products'); ?>">Our products</a></li>
						<li><a href="<?php echo home_url('/faqs-customers'); ?>">FAQs</a></li>
					</div>
				</ul>
            </li>
			<li class="sub"><a href="<?php echo home_url('/dealer'); ?>">Dealer</a>
                 
                <ul> 
		<div class="somnath">  
			<li><a href="<?php echo home_url('/our-products'); ?>"><strong>Our Products</strong></a></li>
			<li><a href="<?php echo home_url('/how-it-works'); ?>">How it Works</a></li>
			<li><a href="<?php echo home_url('/become_dealer'); ?>">Become a Dealer </a></li>
			<li><a href="<?php echo home_url('/faqs'); ?>">FAQs</a></li>
			<li><a href="<?php echo home_url('/dealer-login'); ?>">Dealer Login</a></li>
		</div>
					<div style="float:right;width:120px;">  
						<li><a href="<?php echo home_url('/how-it-works'); ?>">How it Works</a></li>
						<li><a href="<?php echo home_url('/silver-bullet'); ?>">The Silver Bullet Advantage</a></li>
						<li><a href="<?php echo home_url('/easily-installed'); ?>">Installs Easily</a></li>
						<li><a href="<?php bloginfo('url');?>/savingcalculator">Savings Calculator</a></li>
	<li><a href="<?php echo home_url('/memberships'); ?>">Memberships</a></li>
					</div>
                </ul>
                
            </li>
		</ul>
		 </div>
          <div class="clear"></div>
            <div class="innerbox"> 
                <div class="banner_inner">
                <div class="banner_left_inner casestudy"><img src="<?php bloginfo('template_url'); ?>/images/blank.jpg" alt="" /></div>
                <div class="banner_right_inner">
                <h1 style="padding-top:50px;">Sky Ridge Medical Center Case Study</h1>
                <p>Sky Ridge Medical Center, located in Lone<br />
Tree, CO, is a 427,000 square-foot hospital<br />
serving Douglass County.</p>
                </div>
                
                </div>
                <div class="casecontent"  >
                     <div class="installation">
                       <div class="instal">
                         <h4>Installation:</h4>
                         <p>Sky Ridge Medical Center installed the<br />
Silver Bullet system in 2010 to provide<br />
an eco-friendly and non-toxic approach<br />
to their water treatment. The system<br />
was installed to clean and maintain the<br />
facility's cooling tower water without the<br />
use of toxic chemicals.</p>
                       </div>
                       <div class="instal">
                         <h4>Results:</h4>
                         <ul>
                             <li>Water Savings that Resulted in a Significant Rebate -  The facility was rewarded a $12,000 rebate for their substantial savings in water usage from the water municipality. On average, Sky Ridge Medical Center saves over 150,000 gallons of water per year due to the increased cycles of concentration – from 4 to 6 cycles.</li>
                             <li>Reduced Biological Growth – The cooling tower system is now virtually free of biological growth without the use of toxic chemicals.</li>
                             <li>Maintenance Savings – By eliminating the need to handle and transport toxic chemicals, the facility was able to lower labor and operating costs.
</li>
                             <li>Scaling Control – The Silver Bullet system has removed the need to use toxic chemicals to treat scale buildup, particularly during  the summer months when the cooling tower uses more water.</li>
                             
                             
                         </ul>
                         <div class="clear"></div>
                         <p>&nbsp;</p>
                       </div>
                </div>
                    <div class="clear"></div>
                </div>
                
                <div class="performancebox">
                   <div class="performance">
                      <h1>Performance Metrics with Silver Bullet</h1>
                      <ul>
                         <li>
                            <div class="usage">Water Usage:</div>
                            <div class="usage">Energy  Usage:</div>
                            <div class="usage">Scaling Control: </div>
                            <div class="usage">Basin Temperature:</div>
                            <div class="clear"></div>
                         </li>
                         <li>
                            <div class="usagecont">Savings of over 150,000 gallonsper year; $12,000water rebate</div>
                            <div class="usagecont">Increased from 4 to 6 cycles</div>
                            <div class="usagecont">75-80° F</div>
                            <div class="usagecont">75-80° F</div>
                            <div class="clear"></div>
                         </li>
                         
                         
                         
                       
                      </ul>
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
