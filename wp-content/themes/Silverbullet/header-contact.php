<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>"/>

<title>

<?php

	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );

?>

</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>     

<!--+++++++++++++++++++++++++++jquery bannerhover+++++++++++++++++++++-->

 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/hover/css/style2.css" />

 <meta name="google-translate-customization" content="ce2a75cfcbcb500-a13838a1a11afaca-gd5527b23a2831325-17"></meta>

 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/hover/js/modernizr.custom.79639.js"></script> 

 <script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jscounter.js"></script>

    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

<?php

	/* We add some JavaScript to pages with the comment form

	 * to support sites with threaded comments (when in use).

	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );



	/* Always have wp_head() just before the closing </head>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to add elements to <head> such

	 * as styles, scripts, and meta tags.

	 */

	wp_head();

?>

</head>

<body>

<!--++++++++++++++++++++header start++++++++++++++++++++-->

<div class="header">

         <div class="center">

            <div class="logobox">

               <a href="<?php bloginfo('url');?>/">&nbsp;</a>

            </div>

            <div class="menubox">

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

                      

                   </ul>

                </div>                      

                <div class="clr"></div>

              <div class="mainmenu">

                   <div class="navigations">

                        <div style="border: 1px solid #0087C9; height:26px; width:auto;padding:5px 0px;float:right;">

                        <ul id="uptopnav" class="dropping">

                        <?php require_once('main-nav.php'); ?>

                        </ul>

                   </div>

                   <div class="clear"></div>

                  <div class="secondary">

                       <div class="secondarymenu">

                          <ul>

                             <li><strong>Contact Us</strong></li>

                             <li><a href="<?php echo home_url('/contact-us/request-an-estimate'); ?>">Request an Estimate</a></li>

                             <li><a href="<?php echo home_url('/become_dealer'); ?>">Become a Dealer</a></li>

                             <!--<li><a href="#">Locate a Dealer</a></li>-->

                          </ul>

                          

                       </div>

                  </div>

              </div>

              </div>

              <div class="clear"></div>

           </div>

  </div>

         <div class="clear"></div>

</div>

<!--++++++++++++++++++++header end++++++++++++++++++++-->