<?php

/*
 * Local config
 */
require_once( 'conf/conf.php' );
require_once( 'conf/lang.php' );
require_once( 'conf/about.php' );

/*
 * Load WordPress
 */
define( 'WP_USE_THEMES', false );
require( $wordpress_directory . '/wp-load.php' );

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page;
				wp_title( '|', true, 'right' );
				// Add the blog name.
				bloginfo( 'name' );
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			?>
		</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	</head>

	<body>
		<div data-role="page" data-add-back-btn="true" data-back-btn-text="<?php echo $lng[ 'back' ]; ?>">

			<div data-role="header">
				<h1>
					<?php
#						if ( isset( $post_id ) ) : 
#							echo '<a href="#" data-rel="back" data-icon="back">zurück</a>';
#						endif;
					?>
					<?php
						/*
						 * Print the <title> tag based on what is being viewed.
						 */
						global $page;
						wp_title( '|', true, 'right' );
						// Add the blog name.
						bloginfo( 'name' );
						// Add the blog description for the home/front page.
						$site_description = get_bloginfo( 'description', 'display' );
						if ( $site_description && ( is_home() || is_front_page() ) )
						echo " | $site_description";
					?>
				</h1>
</div><!-- /header -->

<div data-role="content">	
