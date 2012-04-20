<?php
/*
 *
 *	Mobile WordPress Reader
 *
 */
?>
<?php include( 'inc/header.php' ); ?>
			
			<ul data-role="listview" data-theme="c">
		 
			<?php
			#query_posts('posts_per_page=20&post_status=publish');
			query_posts('');
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>

			<li>
				<a href="./single.php?p=<?php the_ID(); ?>"><?php the_title(); ?></a>
				<span class="ui-li-count"><?php comments_number( '0', '1', '%' ); ?></span>
			</li>

			<?php 
				endwhile; 
			else:
			?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			
			<?php 
			endif;
			wp_reset_query();
			?>
			
			<ul>
 
<?php include( 'inc/footer.php' ); ?>
