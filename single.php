<?php
$post_id = $_GET['p'];
?>

<?php include( 'inc/header.php' ); ?>
			
		 
			<?php
			/*
				Load single page
			*/
			query_posts( 'p=' . $post_id );
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php 
				endwhile; 
			else:
			?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			
			<?php 
			endif; 
			wp_reset_query();
			?>


<?php include( 'inc/footer.php' ); ?>
