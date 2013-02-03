<?php

/*

Template Name: Agricultural Services

*/



get_header(); 

query_posts('p=912');

while (have_posts()) : the_post(); 

$args2 = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 

$attachments2 = get_posts($args2);

if ($attachments2) {

	foreach ( $attachments2 as $attachment2 ) {

		$pdflink =  wp_get_attachment_url($attachment2->ID);

	}

}

endwhile; 

wp_reset_query();



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

            <div class="banner_left_inner">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

				 $args = array(

				   'post_type' => 'attachment',

				   'numberposts' => -1,

				   'post_status' => null,

				   'post_parent' => $post->ID

				  );

				  $attachments = get_posts( $args );

					 if ( $attachments ) {

						foreach ( $attachments as $attachment ) {

							   $imgurlsb = wp_get_attachment_image_src( $attachment->ID, 'Full' );

							   echo '<img src="'.$imgurlsb[0].'" alt="" />';

						  }

					 }

				 endwhile; endif; 

				?>

				</div>

                <div class="banner_right_inner" style="float: left">

                <?php

				$tophdr = get_post_meta($post->ID, 'Top Header', true); 

				if (!empty($tophdr)) {

				?>

				<h1 style="padding-top:50px;"><?php echo $tophdr; ?></h1>

                <?php } else {} 

				$toptxt = get_post_meta($post->ID, 'Intro text', true); 

				if (!empty($toptxt)) {

				?>

				<p><a href="<?php echo $pdflink; ?>" style="font: normal 18px arial; color: #F1E972;" target="_blank">Click here</a> <?php echo $toptxt; ?></p>  

                <?php } else {} ?>   

                </div>



                    <div class="clear"></div>

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

                      <a href="<?php echo home_url('dealer/our-product'); ?>">&gt; read more</a>

                    </div>

					<div class="casestudys">

                     <ul style="margin:0; padding:0">

				<?php

                    $annouID = 7;

					$pages = get_pages( array( 'child_of' => $annouID, 'sort_column' => 'post_date', 'sort_order' => 'desc', 'parent' => $annouID,'number' => 3, ) );

                    $count = 0;

                    foreach($pages as $page)

                    {



                                    echo '<li>';

									echo '<a href="'; 

									echo get_page_link( $page->ID );

									echo '">'.$page->post_title.'</a></li>';

                

                    }

                ?>

                </ul>

                      <a href="<?php echo home_url('/case-studies'); ?>">&gt; read more</a></div>

                   </div>

                </div>

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

get_footer();

	wp_footer();

?>

</body>

</html>

