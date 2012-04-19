<?php
require_once( 'conf/conf.php' );
require_once( 'simplepie/simplepie.inc' );



$feed = 	new SimplePie();

// Set which feed to process
$feed ->	set_feed_url( $feed_url );

$feed ->	set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/m.campino2k.de/cache');

// Feed abholen
$feed ->	init();

$feed ->	handle_content_type();

?>

<?php include( 'inc/header.php' ); ?>
			
			<ul data-role="listview" data-theme="c">
			<?php foreach ($feed->get_items() as $item): ?>
		 
				<li>
					<a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a>
					<!--
					<p><?php echo $item->get_description(); ?></p>
					<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
					-->
				</li>
		 
			<?php endforeach; ?>			
			<ul>
 
<?php include( 'inc/footer.php' ); ?>