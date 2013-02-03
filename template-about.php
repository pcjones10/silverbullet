<?php
/*
Template Name: About Page
*/

get_header();


?>
<!-- +++++++++++++++++wrapper start ++++++++++++++++ -->
<div class="wrapper">
          <div class="menu2">
        <ul id="nav">
			<li class="sub"><a href="<?php echo home_url('/customer'); ?>"  class="nonactive">Customer</a>
				<ul class="short"> 
					<div class="somnath">  
						<li><a href="<?php echo home_url('/our-products'); ?>">Our products</a></li>
						<li><a href="<?php echo home_url('/faqs'); ?>">FAQs</a></li>
					</div>
				</ul>
            </li>
			<li class="sub"><a href="<?php echo home_url('/dealer'); ?>">Dealer</a>
                 
                <ul> 
		<div class="somnath">  
			<li><a href="#"><strong>Our Products</strong></a></li>
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
				<h4>The Silver Bullet system makes “water work harder” to:</h4>
				<div class="subBox">
					<div class='subNum'>1</div>
					<div class='subText'>Prevent biological growth</div>
					<div class="clearBoth"></div>
				</div>
				<div class="subBox">
					<div class='subNum'>2</div>
					<div class='subText'>Prevent and reduce scaling</div>
					<div class="clearBoth"></div>
				</div>
				<div class="subBox">
					<div class='subNum'>3</div>
					<div class='subText'>Inhibit corrosion</div>
					<div class="clearBoth"></div>
				</div>
				<div class="subBox">
					<div class='subNum'>4</div>
					<div class='subText'>Save water and energy</div>
					<div class="clearBoth"></div>
				</div>
				<div class="subBox">
					<div class='subNum'>5</div>
					<div class='subText'>Provide a safer work environment and reduce labor costs</div>
					<div class="clearBoth"></div>
				</div>
			<p>The Silver Bullet system saves water by increasing the cycles of concentration [1] in cooling towers and reduces energy consumption by making heat transfer more efficient. These savings provide building engineers with immediate savings and the opportunity to apply for water and energy rebate programs as well as accrue LEED credits.</p><p>The Silver Bullet systems are sold and maintained by a dealer network comprising water treatment companies throughout the U.S. The systems are currently being used to clean cooling tower water in a wide range of facilities – from major hospitals and hotel chains to highly secure government facilities.</p>
			</p>
			</div>
		<div class="dealerBox right">
				<img src="<?php bloginfo('template_url'); ?>/images/dealerBoxRightAbout.jpg" alt="" />
		</div>
		<div class="clear"></div>
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
                     <p>Lorem ipsum dolor sit ofer sectetur adip iscing elitrois<br />
NORAD Cheyenne Mountain  Air Force Station<br />Sky Ridge Medical Center<br />The Oxford Hotel

                     
                     </p>
                      <a href="#">&gt; read more</a></div>
                   
                   
                   </div>
               </div>
               
               <div class="watercalcu">
                  <ul>
                      <li>001,720,000,000</li>
                      <li>Current Customer Water Savings in Gallons</li>
                  </ul>
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
