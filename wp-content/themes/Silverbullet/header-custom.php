<!DOCTYPE html><html <?php language_attributes(); ?>>

    <head><meta charset="<?php bloginfo('charset'); ?>"/>

     <title><?php wp_title('|', true, 'right'); // Add the blog name.	bloginfo( 'name' );              ?>

    </title><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" />

    <meta name="google-translate-customization" content="ce2a75cfcbcb500-a13838a1a11afaca-gd5527b23a2831325-17"></meta>

        

    <!--+++++++++++++++++++++++++++jquery bannerhover+++++++++++++++++++++-->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/hover/css/style2.css" /> 

                                                                                                                                                                                                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/hover/js/modernizr.custom.79639.js"></script>  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script> <script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jscounter.js"></script>     <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]--><?php /* We add some JavaScript to pages with the comment form	 * to support sites with threaded comments (when in use).	 */ if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); /* Always have wp_head() just before the closing </head>	 * tag of your theme, or you will break many plugins, which	 * generally use this hook to add elements to <head> such	 * as styles, scripts, and meta tags.	 */ wp_head(); ?><body><!--++++++++++++++++++++header start++++++++++++++++++++--><div class="header">         <div class="center">            <div class="logobox">               <a href="<?php bloginfo('url'); ?>/">&nbsp;</a>            </div>            <div class="menubox">            	            	

            	<div class="minimenu" style="margin-left: 10px">

                    <?php get_search_form(); ?> 

                </div> 					

                    <div class="minimenu">

                    <div id="google_translate_element"></div><script type="text/javascript">

                    function googleTranslateElementInit() {

                      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');

                    }

                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>    

                </div>              	

                <div class="minimenu" style="margin-right: 15px">

                   <ul>                    

                      <li><a href="<?php echo home_url('/dealer-login'); ?>">Dealer Login </a></li>

                      <li><a href="<?php bloginfo('url');?>/agricultural-services">Agricultural Services</a></li>

                   </ul>

                </div>                      <div class="clr"></div>           <div class="mainmenu">                   <div class="navigation"> <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'second')); ?>       

                        </div>     

                        <div class="clear"></div>         

                        <?php if(!is_page_template('template_dealer_content.php')): ?>     

                        <div class="secondary">               

                            <div class="secondarymenu1 wider">             

                                <ul id="menuhover">                         

                                    <li><strong>DEALER</strong></li>       

                                    <li class="sub"><a href="#">Our products</a> 

                                        <ul>                               

                                            <li><a href="<?php echo home_url('/how-it-works'); ?>">How it works</a></li>    

                                            <li><a href="<?php echo home_url('/silver-bullet'); ?>">The Silver Bullet advantage</a></li>  

                                            <li><a href="<?php echo home_url('/easily-installed'); ?>">Installs Easily</a></li>  

                                            <li><a href="<?php bloginfo('url');?>/savingcalculator" >Savings calculator</a></li> 

                                            <li><a href="<?php bloginfo('url');?>/memberships" >Memberships</a></li> 

                                        </ul>                                                     

                                    </li>                      

                                    <li class="sub"><a href="<?php echo home_url('/why-partner'); ?>">Why Parter?</a></li>	

                                    <li><a href="<?php echo home_url('/become_dealer'); ?>">Become a Dealer </a></li>

                                    <li class="sub"><a href="<?php echo home_url('/faqs'); ?>">FAQs</a></li>

                                    <li class="sub"><a href="<?php echo home_url('/dealer-login'); ?>">Dealer Login</a></li>       

																																																			</ul>                                                 </div>       

                        </div>

																																																			

																																																			

																																																			<?php else: ?>								<?php if(is_page('how-it-works') or is_page('easily-installed')): ?>

																																																			

																																																			<div class="secondary">               

																																																				<div class="secondarymenu1 wider">             

																																																					<ul id="menuhover">                         

																																																						<li><strong>Customer</strong></li>       

																																																						<li class="sub"><a href="#">Our products</a> 

																																																							<ul>                               

																																																								<li><a href="<?php echo home_url('/how-it-works'); ?>">How it works</a></li>    

																																																								<li><a href="<?php echo home_url('/the-silver-bullet-advantage'); ?>">The Silver Bullet advantage</a></li>  

																																																								<li><a href="<?php echo home_url('/easily-installed'); ?>">Installs Easily</a></li>  

																																																								<li><a href="<?php bloginfo('url'); ?>/savingcalculator" >Savings calculator</a></li> 

																																																								

																																																							</ul>                                                     

																																																						</li>                      

																																																						<li class="sub"><a href="<?php echo home_url('/faqs-customers'); ?>">FAQs</a></li>

																																																					</ul>                                                 </div>       

																																																			</div>

																																																			

<?php else: ?>

																																																			<div class="secondary">

																																																				<div class="secondarymenu">

																																																					<ul>

																																																						<li><strong>SILVER BULLET</strong></li>

																																																						<li><a href="<?php bloginfo('url');?>/about">About</a></li>

																																																						<li><a href="<?php bloginfo('url');?>/mission">Mission</a></li>

																																																						<li><a href="<?php bloginfo('url');?>/team">Management Team</a></li>

																																																						<li><a href="<?php bloginfo('url');?>/memberships">Memberships</a></li>

																																																					</ul>

																																																					

																																																				</div>

																																																			</div><?php endif; endif; ?>              </div>   

                </div>  </div>        

            <div class="clear"></div></div><!--++++++++++++++++++++header end++++++++++++++++++++-->