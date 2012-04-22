<?php
if( isset( $_GET[ 'cat' ] ) ) {
	$category_id = $_GET[ 'cat' ];
}
?>
<?php include( 'inc/header.php' ); ?>
			
		<?php
		if( isset( $category_id ) ) :
			/*
				Load categories
			*/
			query_posts( 'cat=' . $category_id );
			if (have_posts()) :
			?>
			<ul data-role="listview" data-theme="c">
				<?php
				while (have_posts()) : the_post(); ?>

				<li>
					<a href="./single.php?p=<?php the_ID(); ?>"><?php the_title(); ?></a>
					<span class="ui-li-count"><?php comments_number( '0', '1', '%' ); ?></span>
				</li>

				<?php 
				endwhile; 
				?>
			</ul>
			<?php
			else:
			?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			
			<?php 
			endif; 
			wp_reset_query();

		else :
		
			//wp_list_categories( 'title_li=' );
			$categories = get_categories();
			
			?>
			<ul data-role="listview"  data-inset="true" data-theme="c">
			<?php
			
			foreach($categories as $category) { 
				echo '<li><a href="categories.php?cat=' . $category->term_id . '">' . $category->name.'</a></li>';
			};
			
			?>
			</ul>
			<?php
			

		endif;
		?>

<?php include( 'inc/footer.php' ); ?>
