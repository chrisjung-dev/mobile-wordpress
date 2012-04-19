<?php

require_once( 'simplepie/simplepie.inc' );

$feed = 	new SimplePie();

// Set which feed to process
$feed ->	set_feed_url( 'http://campino2k.de/feed/' );

$feed ->	set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/m.campino2k.de/cache');

// Feed abholen
$feed ->	init();

$feed ->	handle_content_type();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mobile Version von http://campino2k.de</title>
	</head>

	<body>
		<div class="header">
			<h1><a href="<?php echo $feed->get_permalink(); ?>"><?php echo $feed->get_title(); ?></a></h1>
			<p><?php echo $feed->get_description(); ?></p>
		</div>
 
		<?php
		/*
		Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
		*/
		foreach ($feed->get_items() as $item):
		?>
	 
			<div class="item">
				<h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
				<p><?php echo $item->get_description(); ?></p>
				<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
			</div>
	 
		<?php endforeach; ?>
	
	</body>
</html>