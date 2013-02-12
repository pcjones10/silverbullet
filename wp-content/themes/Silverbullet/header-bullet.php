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

<?php

if ($post->post_parent == 336 || is_page('336')) {

	$navclass = "navbarsecond";

} else {

	$navclass = "navbar";	

}

?>

<script>

<script>

// Javascript originally by Patrick Griffiths and Dan Webb.

// http://htmldog.com/articles/suckerfish/dropdowns/

sfHover = function() {

   var sfEls = document.getElementById("navbar").getElementsByTagName("li");

   for (var i=0; i<sfEls.length; i++) {

      sfEls[i].onmouseover=function() {

         this.className+=" hover";

      }

      sfEls[i].onmouseout=function() {

         this.className=this.className.replace(new RegExp(" hover\\b"), "");

      }

   }

}

if (window.attachEvent) window.attachEvent("onload", sfHover);

</script> 

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

                        <ul id="<?php echo $navclass; ?>" style="width: 830px">

                            <?php wp_list_pages('title_li=&child_of=5&sort_column=menu_order&sort_order=desc'); ?>

                           <li><strong style="padding: 3px 8px;">Silver Bullet</strong></li>           

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