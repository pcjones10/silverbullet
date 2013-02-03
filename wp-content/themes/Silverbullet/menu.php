<?php

/*

Template Name: menu test

*/



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>test</title>

<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" />

<style>

/* These styles just pretty up the page a bit. */

body {

   font: 62.5%/1.2 Arial, Helvetica, sans-serif;

   background-color: #eee; }

#wrap {  font-size: 1.2em; width: 100%; padding: 50px 20px; margin: 0 auto; background-color: #fff;  }



/*---- CROSS BROWSER DROPDOWN MENU ----*/

ul#uptopnav {margin: 0 0 0 200px;}

ul.dropping a { display:block; color: #0087C9; font-family: Verdana; font-size: 14px; text-decoration: none;}

ul.dropping, ul.dropping li, ul.dropping ul { list-style: none; margin: 0; padding: 0; background: #fff; color: #fff;}

ul.dropping { position: relative; z-index: 597; float: left; }

ul.dropping li { float: left; line-height: 1.3em; vertical-align: middle; zoom: 1; padding: 5px 10px; border-right: 1px solid #0087C9 }

ul.dropping li:last-child {  border-right:none }

ul.dropping li.hover, ul.dropping li:hover{ position: relative; z-index: 599; cursor: default; background: #0087C9; color:#ffffff }



ul.dropping li a:hover,ul.dropping li.hover a, ul.dropping li{  color:#ffffff; }

ul.dropping ul { visibility: hidden; position: absolute; top: 100%; left: 0; z-index: 598; width: 195px; background: #555; border: 1px solid #fff; }

ul.dropping ul li { float: none; }

ul.dropping ul ul { top: -2px; left: 100%; }

ul.dropping li:hover > ul { visibility: visible }

ul.dropping ul li {border-right:none}

/* These styles create the dropdown menus. */



</style>





</head>

<body>

            <div class="mainmenu">

                   <div class="navigatssion">

<div style="border: 1px solid #0087C9; height:26px; width:auto;padding:5px 0px;padding-top:4px;float:right;">

<ul id="uptopnav" class="dropping">

<?php wp_list_pages('title_li=&child_of=0&sort_column=menu_order&sort_order=asc&depth=2'); ?>

</ul>

</div>

</div>

</div>

</body>

</html>