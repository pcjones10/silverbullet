<?php

/*

Template Name: Contact Us Page

*/



get_header('contact');

?>

<script language="javascript">





// Function to Check Numeric



function isItNumeric(Id)

{

	if(isNaN(document.getElementById(Id).value))

	{

		document.getElementById(Id).value	=	'';

		document.getElementById(Id).focus();

		document.getElementById(Id).style.borderColor	=	'red';

	}

	else

	{

		document.getElementById(Id).style.borderColor	=	'';

	}

}



//function to validate email



function validateVEmail(Email) 

{ 

   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

   var address = document.getElementById(Email).value;

   if(address != '')

   {

	  if(reg.test(address) == false) 

	  {

		  document.getElementById(Email).style.borderColor	=	'red';

		  document.getElementById(Email).focus();

		  return false;

   	  }

	  else

	  {

		  document.getElementById(Email).style.borderColor	=	'';

	  }

   }

}



// function to submit form



function submitMe()

{

	var	Name		=	document.getElementById('txtName').value;

	var	Company		=	document.getElementById('txtCompany').value;

	var	Email		=	document.getElementById('txtEmail').value;

	var	Phone		=	document.getElementById('txtPhone').value;

	var	Comment		=	document.getElementById('txtComments').value;	

	

	if(Name	==	'')

	{

		document.getElementById('txtName').style.borderColor	=	'red';

		document.getElementById('txtName').focus();

		return false;

	}

	else

	{

		document.getElementById('txtName').style.borderColor	=	'';

	}

	

	if(Company	==	'')

	{

		document.getElementById('txtCompany').style.borderColor	=	'red';

		document.getElementById('txtCompany').focus();

		return false;

	}

	else

	{

		document.getElementById('txtCompany').style.borderColor	=	'';

	}

	

	if(Email	==	'')

	{

		document.getElementById('txtEmail').style.borderColor	=	'red';

		document.getElementById('txtEmail').focus();

		return false;

	}

	else

	{

		document.getElementById('txtEmail').style.borderColor	=	'';

	}

	document.frmBDealer.submit();

}

</script>



<?php

//if(isset($_POST['btnSubmit']))

{

	if(($_POST['txtName'] != '') && ($_POST['txtCompany'] != '') && ($_POST['txtEmail'] != ''))

	{

		$to = "info@silverbulletcorp.com";

		$subject = "Contact Us Page";

		

		if($_POST['txtPhone'] != '')

		{

			$phone	=	"<tr>

							<td>Phone Number:</td>

							<td>". $_POST['txtPhone'] ."</td>

						</tr>";

		}

		else

		{

			$phone	=	'';

		}

		

		$message = '

		<html>

		<head>

		<title>Contact Us eMail</title>

		</head>

            <body>

            	<table border="1" cellpadding="5" cellspacing="0" width="90%">

                	<tr>

                    	<td width="40%">Name:</td>

                        <td width="50%">'. $_POST['txtName'] .'</td>

                    </tr>

                	<tr>

                    	<td>Company Name:</td>

                        <td>'. $_POST['txtCompany'] .'</td>

                    </tr>

                	<tr>

                    	<td>Email:</td>

                        <td>'. $_POST['txtEmail'] .'</td>

                    </tr>

					'. $phone .'

                	<tr>

                    	<td>State:</td>

                        <td>'. $_POST['txtState'] .'</td>

                    </tr>						

                	<tr>

                    	<td>Comments:</td>

                        <td>'. $_POST['txtComments'] .'</td>

                    </tr>					

                </table>

            </body>

        </html>

		';

		

		// Always set content-type when sending HTML email

		$headers = "MIME-Version: 1.0" . "\r\n";

		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		

		// More headers

		$headers .= 'From: '. $_POST['txtEmail'] . "\r\n";

		

		mail($to,$subject,$message,$headers);

	}

	else

	{

//		echo "Sachin";

	}

}

//echo "Jaiswal";

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

                <div class="banner_left_inner contactuscenter"><img src="<?php bloginfo('template_url'); ?>/images/contactusbanner.jpg" alt="" /></div>

                <div class="banner_right_inner">

                <h1>Contact Silver Bullet </h1>

                <p>To learn more about the Silver Bullet Water<br />

Treatment system, please contact us. </p>

                </div>

                

                </div>

                <div class="easysteps" style="height: 400px">

                <div class="contactusleft">

                

                <h4>Contact Us Below:</h4>

                <form name="frmBDealer" id="frmBDealer" method="post" enctype="multipart/form-data">

                  <ul>

                  <li>

                        <div class="contactleft"><strong class="number">1</strong> Name<span class="yellow">*</span></div>

                        <div class="inputbox"><input type="text" name="txtName" id="txtName"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">2</strong>Company Name<span class="yellow">*</span></div>

                        <div class="inputbox"><input type="text" name="txtCompany" id="txtCompany"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">3</strong>Email Address<span class="yellow">*</span></div>

                        <div class="inputbox"><input type="text" name="txtEmail" id="txtEmail" onBlur="validateVEmail(this.id);"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">4</strong>Phone Number</div>

                        <div class="inputbox"><input type="text" name="txtPhone" id="txtPhone" onKeyUp="isItNumeric(this.id);"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleft"><strong class="number">5</strong>State</div>

                        <div class="inputbox"><input type="text" name="txtState" id="txtState" /></div>

                        <div class="clear"></div>

                    </li>                    

                    <li>

                        <div class="contactleft"><strong class="number">6</strong>Comments</div>

                        <div class="inputbox"><textarea name="txtComments" id="txtComments" style="width: 258px;height: 55px;display: block;background: #C9D9DF;"></textarea></div>

                        <div class="clear"></div>

                    </li>                    

                    <li>

                        <div class="inputbox"><input type="submit" name="btnSubmit" value="Submit" class="blank" onClick="return submitMe();" /></div>

                        <div class="clear"></div>

                    </li>

                </ul>

                </form>

                </div>

              <div class="contactuscontent">

                    <h4>&nbsp;</h4>

                    <p >You may also fill out our initial site survey  to receive an estimate of the water savings you can expect from implementing the Silver Bullet Water Treatment System.</p>

                </div>

                </div>

                <div class="contactinformation">

                

                   <div class="info">

                   <h2>INFO</h2>

                    <p>

                      Phone:303.552.2383<br />

                       Fax: 303.552.2399<br />

                       <a href="mailto:info@SilverBulletcorp.com">info@SilverBulletcorp.com</a>

                    </p>

                    <p class="pad74">

                      Silver Bullet Water Treatment Company, LLC<br />

10515 E. 40th Ave. Suite 116<br />

Denver Co 80239<br />303.552.2383<br />

                    

                    </p>  

                  

                </div>

                

                   <div class="silvermap"> 

                      <a href="https://maps.google.com/maps?q=10515+E.+40th+Ave.+Suite+116+Denver+Co+80239&ie=UTF-8&ei=S-PFUJrwA4690QG4soHwDQ&ved=0CAgQ_AUoAA" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/silvermap.jpg" alt="" /></a>

                      <div class="clear" style="height:10px"></div>

                      <a href="https://maps.google.com/maps?q=10515+E.+40th+Ave.+Suite+116+Denver+Co+80239&ie=UTF-8&ei=S-PFUJrwA4690QG4soHwDQ&ved=0CAgQ_AUoAA" class="clickable" target="_blank">Click on the map to find our location </a> 

                   </div>

                

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

                <div class="water_save">

<!--                <p>Estimate how much Silver Bullet can save your customers.</p>

-->                <a href="<?php bloginfo('url');?>/silver-bullet/dealer/our-product/savings-calculator/"><img src="<?php bloginfo('template_url'); ?>/images/estimate.jpg" alt="" /></a></div>

                

                

                <div class="silv_dealer">

               

                <a href="<?php bloginfo('url');?>/silver-bullet/dealer/become_dealer/"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a></div>

                

                

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

 

                $("#cans").text(numberWithCommas(cans)); // I hope you're using jQuery

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

