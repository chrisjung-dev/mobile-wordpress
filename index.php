<?php
require_once( 'conf/conf.php' );
define( 'WP_USE_THEMES', false );
require( $wordpress_directory . '/wp-blog-header.php' );

?>

<?php include( 'inc/header.php' ); ?>
			
			<ul data-role="listview" data-theme="c">
		 
			<?php
			GLOBAL $wp_query;
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>

			<li>
				<?php $post -> the_date(); echo "<br />"; ?>
				<?php the_title(); ?>    
				<?php the_excerpt(); ?> 
			</li>

			<?php 
				endwhile; 
			else:
			?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			
			<?php 
			endif; 
			?>
			
			<ul>
 
<?php include( 'inc/footer.php' ); ?>
