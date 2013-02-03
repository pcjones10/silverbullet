<?php

/*

Template Name: Request an Estimate

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

		$subject = "Become a Dealer eMail";

		

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

                	<tr>

                    	<td>Installation Address:</td>

                        <td>'. $_POST['txtAdds'] .'</td>

                    </tr>

                	<tr>

                    	<td>City, State, Zip:</td>

                        <td>'. $_POST['txtCity'] .'</td>

                    </tr>

                	<tr>

                    	<td>Indicate System Size(s):</td>

                        <td>'. $_POST['txtTons'] .'</td>

                    </tr>

                	<tr>

                    	<td>Time in Operation:</td>

                        <td>'. $_POST['txtTimeop'] .'</td>

                    </tr>

                	<tr>

                    	<td>Cooling Tower or Evaporative Condenser:</td>

                        <td>'. $_POST['txtTower'] .'</td>

                    </tr>

                	<tr>

                    	<td>If cooling tower - approximately what diameter:</td>

                        <td>'. $_POST['txtTowerA'] .'</td>

                    </tr>

                	<tr>

                    	<td>If cooling tower – approximately what distance:</td>

                        <td>'. $_POST['txtTowerB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Additional Information on Cooling Tower:</td>

                        <td>'. $_POST['txtTowerExt'] .'</td>

                    </tr>

                	<tr>

                    	<td>120v power outlet :</td>

                        <td>'. $_POST['txtPowPrt'] .'</td>

                    </tr>

					</table>

					<table border="1" cellpadding="5" cellspacing="0" width="90%">

                	<tr>

                    	<td>Chemical</td>

                        <td>Make-Up Water</td>

						<td>Tower Water</td>

                    </tr>					

                	<tr>

                    	<td>Calcium:</td>

                        <td>'. $_POST['txtCalc'] .'</td>

						<td>'. $_POST['txtCalcB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Total Hardness:</td>

                        <td>'. $_POST['txtHard'] .'</td>

						<td>'. $_POST['txtHardB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Total Alkalinity:</td>

                        <td>'. $_POST['txtAlk'] .'</td>

						<td>'. $_POST['txtAlkB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Chlorides:</td>

                        <td>'. $_POST['txtChlo'] .'</td>

						<td>'. $_POST['txtAlkB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Conductivity:</td>

                        <td>'. $_POST['txtCon'] .'</td>

						<td>'. $_POST['txtChloB'] .'</td>

                    </tr>

                	<tr>

                    	<td>pH:</td>

                        <td>'. $_POST['txtPh'] .'</td>

						<td>'. $_POST['txtPhB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Phosphates:</td>

                        <td>'. $_POST['txtPhos'] .'</td>

						<td>'. $_POST['txtPhosB'] .'</td>

                    </tr>

                	<tr>

                    	<td>Silica:</td>

                        <td>'. $_POST['txtSil'] .'</td>

						<td>'. $_POST['txtSilB'] .'</td>

                    </tr>					

					'. $phone .'

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

                <div class="easystepsA">

                <div class="contactusleftA">

                    <?php while (have_posts()) : the_post(); ?> 

                    <h4><?php the_content(); ?></h4>  

                    <?php 

                    endwhile; 

                    wp_reset_query();

                    ?>

                <h4>

</h4>

                <h4>Contact Information</h4>

                <form name="frmBDealer" id="frmBDealer" method="post" enctype="multipart/form-data">

                  <ul>

                  <li>

                        <div class="contactleftreq"><strong class="number">1</strong> Management Company or Building Ownership<span class="yellow">*</span></div>

                        <div class="inputbox"><input type="text" name="txtName" id="txtName"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">2</strong>Name of Technical Contact<span class="yellow">*</span></div>

                        <div class="inputbox"><input type="text" name="txtCompany" id="txtCompany"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">2</strong>Email Address<span class="yellow">*</span></div>

                        <div class="inputbox"><input type="text" name="txtEmail" id="txtEmail" onBlur="validateVEmail(this.id);"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">3</strong>Day Time Phone Number</div>

                        <div class="inputbox"><input type="text" name="txtPhone" id="txtPhone"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">4</strong>Installation Address</div>

                        <div class="inputbox"><input type="text" name="txtAdds" id="txtAdds"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">5</strong>City, State, Zip</div>

                        <div class="inputbox"><input type="text" name="txtCity" id="txtCity"  /></div>

                        <div class="clear"></div>

                    </li>

                    </ul>

                <h4>Facility Information</h4>       

                <p>Indicate the maximum tonnage capacity of tower(s) so that we may best configure the amount of water we will treat.      </p>       

                    <ul>

                    <li>

                        <div class="contactleftreq"><strong class="number">1</strong>Indicate System Size(s):<br />| 100-299 | 300-400 | 700-900 | 1000-1300 | 1400-1600 | 1700-2000 | 2100-2400 | 2500-3000 | > 3000 </div>

                        <div class="inputbox"><input type="text" name="txtTons" id="txtTons"  />&nbsp;tons</div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">2</strong>Time in Operation: Hours/Day and Days/Year</div>

                        <div class="inputbox"><input type="text" name="txtTimeop" id="txtTimeop"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">3</strong>Is your system a Cooling Tower or Evaporative Condenser?</div>

                        <div class="inputbox"><input type="text" name="txtTower" id="txtTower"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">3a</strong>If cooling tower – approximately what diameter (in inches) pipe supplies water to the refrigeration equipment and return?</div>

                        <div class="inputbox"><input type="text" name="txtTowerA" id="txtTowerA"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">3b</strong>If cooling tower – approximately what distance (in feet) is the pipe running from refrigeration equipment to cooling tower. (consider 12 feet per floor if located in multi-story building)</div>

                        <div class="inputbox"><input type="text" name="txtTowerB" id="txtTowerB"  /></div>

                        <div class="clear"></div>

                    </li>

                    <li>

                        <div class="contactleftreq"><strong class="number">4</strong>Additional Information on Cooling Tower(s):</div>

                        <div class="inputbox"><input type="text" name="txtTowerExt" id="txtTowerExt"  /></div>

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">5</strong>Is there a weather-proof 120v power outlet near cooling tower? (necessary for install)</div>

                        <div class="inputbox"><input type="text" name="txtPowPrt" id="txtPowPrt"  /></div>

                        <div class="clear"></div>

                    </li>

                    </ul> 

                <h4>Water Chemistry Information</h4>       

                <p>Please either provide a copy of your latest water test reports or complete the table below:</p>                             

                    <ul>

                    <li>

                        <div class="contactleftreq"><strong class="number"></strong>Chemical</div>

                        <div class="clear"></div>

                    </li>  

                    <li>

                        <div class="contactleftreq"><strong class="number">1</strong>Calcium</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtCalc" id="txtCalc"  /><br />Tower Water&nbsp;<input type="text" name="txtCalcB" id="txtCalcB"  /></div>

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">2</strong>Total Hardness</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtHard" id="txtHard"  /><br />Tower Water&nbsp;<input type="text" name="txtHardB" id="txtHardB"  /></div>

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">3</strong>Total Alkalinity</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtAlk" id="txtAlk"  /><br />Tower Water&nbsp;<input type="text" name="txtAlkB" id="txtAlkB"  /></div>

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">4</strong>Chlorides</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtChlo" id="txtChlo"  /><br />Tower Water&nbsp;<input type="text" name="txtChlo" id="txtChlo"  /></div>                       

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">5</strong>Conductivity</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtCon" id="txtCon"  /><br />Tower Water&nbsp;<input type="text" name="txtConB" id="txtConB"  /></div>                      

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">6</strong>pH</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtPh" id="txtPh"  /><br />Tower Water&nbsp;<input type="text" name="txtPhB" id="txtPhB"  /></div>

                        <div class="clear"></div>

                    </li>         

                    <li>

                        <div class="contactleftreq"><strong class="number">7</strong>Phosphates</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtPhos" id="txtPhos"  /><br />Tower Water&nbsp;<input type="text" name="txtPhosB" id="txtPhosB"  /></div>                       

                        <div class="clear"></div>

                    </li>     

                    <li>

                        <div class="contactleftreq"><strong class="number">8</strong>Silica</div>

                        <div class="inputbox">Make-Up Water&nbsp;<input type="text" name="txtSil" id="txtSil"  /><br />Tower Water&nbsp;<input type="text" name="txtSilB" id="txtSilB"  /></div>                       

                        <div class="clear"></div>

                    </li>                                                                                                                                                                                                                                                                                                                                                    

                    <li>

                        <div class="inputbox"><input type="submit" name="btnSubmit" value="Submit" class="blank" onClick="return submitMe();" /></div>

                        <div class="clear"></div>

                    </li>

                </ul>

                </form>

                </div>

                </div>

                <div class="contactinformation">

                

                   <div class="info">

                   <h2>INFO</h2>

                    <p>

                      Phone:303.552.2383<br />

                       Fax: 303.552.2399?<br />

                       <a href="#">info@SilverBulletcorp.com</a>

                    </p>

                    <p class="pad74">

                      Silver Bullet Water Treatment Company, LLC<br />

10515 E. 40th Ave. Suite 116<br />

Denver Co 80239<br />303.552.2383<br />

                    

                    </p>  

                  

                </div>

                

                   <div class="silvermap"> 

                      <a href="https://maps.google.com/maps?q=10515+E.+40th+Ave.+Suite+116+Denver+Co+80239&ie=UTF-8&ei=S-PFUJrwA4690QG4soHwDQ&ved=0CAgQ_AUoAA"><img src="<?php bloginfo('template_url'); ?>/images/silvermap.jpg" alt="" /></a>

                      <div class="clear" style="height:10px"></div>

                      <a href="https://maps.google.com/maps?q=10515+E.+40th+Ave.+Suite+116+Denver+Co+80239&ie=UTF-8&ei=S-PFUJrwA4690QG4soHwDQ&ved=0CAgQ_AUoAA" class="clickable">Click on the map to find our location </a> 

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

					<a href="<?php echo home_url('silver-bullet/dealer/our-product/savings-calculator'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/estimate.jpg" alt="" /></a>

				</div>

                

                    <!--  Silver Dealer -->

                    <div class="silv_dealer">

                    <a href="<?php echo home_url('silver-bullet/dealer/become_dealer/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/silvbullet.jpg" alt="" /></a></div>

                    </div>

                    <!--  End Silver Dealer -->

                

                

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

