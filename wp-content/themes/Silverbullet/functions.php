<?php
if (!isset( $content_width ) )
$content_width = 640;

/** Tell WordPress to run benwebone_setup() when the 'after_setup_theme' hook is run. */

add_action( 'after_setup_theme', 'benwebone_setup' );

if ( ! function_exists( 'benwebone_setup' ) ):

function benwebone_setup() {



	// This theme styles the visual editor with editor-style.css to match the theme style.

	add_editor_style();

     
	 // This theme uses post thumbnails

	add_theme_support( 'post-thumbnails' );



	// Add default posts and comments RSS feed links to head

	add_theme_support( 'automatic-feed-links' );



	// This theme uses wp_nav_menu() in one location.
	
	  	register_nav_menus( array(

		'first' => __( 'First Navigation', 'twentyten' ),

	) );
	
	
	

	register_nav_menus( array(

		'second' => __( 'Second Navigation', 'twentyten' ),

	) );



  	register_nav_menus( array(

		'third' => __( 'Third Navigation', 'twentyten' ),

	) );


  	register_nav_menus( array(

		'fourth' => __( 'Fourth Navigation', 'twentyten' ),

	) );
	
	
	  	register_nav_menus( array(

		'Fift' => __( 'Fift Navigation', 'twentyten' ),

	) );



if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'postimage', 800, 300,true );
}

}

endif;



if ( ! function_exists( 'twentyten_admin_header_style' ) ) :

/**

 * Styles the header image displayed on the Appearance > Header admin panel.

 *

 * Referenced via add_custom_image_header() in benwebone_setup().

 *

 * @since Twenty Ten 1.0

 */

function twentyten_admin_header_style() {

?>

<style type="text/css">

/* Shows the same border as on front end */

#headimg {

	border-bottom: 1px solid #000;

	border-top: 4px solid #000;

}

/* If NO_HEADER_TEXT is false, you would style the text with these selectors:

	#headimg #name { }

	#headimg #desc { }

*/

</style>

<?php

}

endif;



/**

 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.

 *

 * To override this in a child theme, remove the filter and optionally add

 * your own function tied to the wp_page_menu_args filter hook.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_page_menu_args( $args ) {

	$args['show_home'] = true;

	return $args;

}

add_filter( 'wp_page_menu_args', 'twentyten_page_menu_args' );



/**

 * Sets the post excerpt length to 40 characters.

 *

 * To override this length in a child theme, remove the filter and add your own

 * function tied to the excerpt_length filter hook.

 *

 * @since Twenty Ten 1.0

 * @return int

 */

function twentyten_excerpt_length( $length ) {

	return 40;

}

add_filter( 'excerpt_length', 'twentyten_excerpt_length' );



/**

 * Returns a "Continue Reading" link for excerpts

 *

 * @since Twenty Ten 1.0

 * @return string "Continue Reading" link

 */

function twentyten_continue_reading_link() {

	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';

}



/**

 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyten_continue_reading_link().

 *

 * To override this in a child theme, remove the filter and add your own

 * function tied to the excerpt_more filter hook.

 *

 * @since Twenty Ten 1.0

 * @return string An ellipsis

 */

function twentyten_auto_excerpt_more( $more ) {

	return ' &hellip;' . twentyten_continue_reading_link();

}

add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );



/**

 * Adds a pretty "Continue Reading" link to custom post excerpts.

 *

 * To override this link in a child theme, remove the filter and add your own

 * function tied to the get_the_excerpt filter hook.

 *

 * @since Twenty Ten 1.0

 * @return string Excerpt with a pretty "Continue Reading" link

 */

function twentyten_custom_excerpt_more( $output ) {

	if ( has_excerpt() && ! is_attachment() ) {

		$output .= twentyten_continue_reading_link();

	}

	return $output;

}

add_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );



/**

 * Remove inline styles printed when the gallery shortcode is used.

 *

 * Galleries are styled by the theme in Twenty Ten's style.css. This is just

 * a simple filter call that tells WordPress to not use the default styles.

 *

 * @since Twenty Ten 1.2

 */

add_filter( 'use_default_gallery_style', '__return_false' );



/**

 * Deprecated way to remove inline styles printed when the gallery shortcode is used.

 *

 * This function is no longer needed or used. Use the use_default_gallery_style

 * filter instead, as seen above.

 *

 * @since Twenty Ten 1.0

 * @deprecated Deprecated in Twenty Ten 1.2 for WordPress 3.1

 *

 * @return string The gallery style filter, with the styles themselves removed.

 */

function twentyten_remove_gallery_css( $css ) {

	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );

}

// Backwards compatibility with WordPress 3.0.

if ( version_compare( $GLOBALS['wp_version'], '3.1', '<' ) )

	add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );






/**

 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.

 *

 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own

 * function tied to the init hook.

 *

 * @since Twenty Ten 1.0

 * @uses register_sidebar

 */

function twentyten_widgets_init() {

	// Area 1, located at the top of the sidebar.

	register_sidebar( array(

		'name' => __( 'Primary Widget Area', 'twentyten' ),

		'id' => 'primary-widget-area',

		'description' => __( 'The primary widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.

	register_sidebar( array(

		'name' => __( 'Secondary Widget Area', 'twentyten' ),

		'id' => 'secondary-widget-area',

		'description' => __( 'The secondary widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 3, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'First Footer Widget Area', 'twentyten' ),

		'id' => 'first-footer-widget-area',

		'description' => __( 'The first footer widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 4, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Second Footer Widget Area', 'twentyten' ),

		'id' => 'second-footer-widget-area',

		'description' => __( 'The second footer widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 5, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Third Footer Widget Area', 'twentyten' ),

		'id' => 'third-footer-widget-area',

		'description' => __( 'The third footer widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );



	// Area 6, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Fourth Footer Widget Area', 'twentyten' ),

		'id' => 'fourth-footer-widget-area',

		'description' => __( 'The fourth footer widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

}

/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */

add_action( 'widgets_init', 'twentyten_widgets_init' );



/**

 * Removes the default styles that are packaged with the Recent Comments widget.

 *

 * To override this in a child theme, remove the filter and optionally add your own

 * function tied to the widgets_init action hook.

 *

 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1

 * to remove the default style. Using Twenty Ten 1.2 in WordPress 3.0 will show the styles,

 * but they won't have any effect on the widget in default Twenty Ten styling.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_remove_recent_comments_style() {

	add_filter( 'show_recent_comments_widget_style', '__return_false' );

}

add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );



if ( ! function_exists( 'twentyten_posted_on' ) ) :

/**

 * Prints HTML with meta information for the current post-date/time and author.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_posted_on() {

	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),

		'meta-prep meta-prep-author',

		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',

			get_permalink(),

			esc_attr( get_the_time() ),

			get_the_date()

		),

		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',

			get_author_posts_url( get_the_author_meta( 'ID' ) ),

			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),

			get_the_author()

		)

	);

}

endif;



if ( ! function_exists( 'twentyten_posted_in' ) ) :

/**

 * Prints HTML with meta information for the current post (category, tags and permalink).

 *

 * @since Twenty Ten 1.0

 */

function twentyten_posted_in() {

	// Retrieves tag list of current post, separated by commas.

	$tag_list = get_the_tag_list( '', ', ' );

	if ( $tag_list ) {

		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );

	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {

		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );

	} else {

		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );

	}

	// Prints the string, replacing the placeholders.

	printf(

		$posted_in,

		get_the_category_list( ', ' ),

		$tag_list,

		get_permalink(),

		the_title_attribute( 'echo=0' )

	);

}

endif;

function excerpt_link_modify2() 
{
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = strip_shortcodes( $text );

        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $text = strip_tags($text);
        $excerpt_length = apply_filters('excerpt_length', 400);
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words) > $excerpt_length) {
            array_pop($words);
            array_push($words, '');
            $text = implode(' ', $words);
        }
    }
    echo $text;
}

if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()





