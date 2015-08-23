<?php
	
	
	
	/*
	*	Custom Font
	*	Add to (or create) functions.php file in child theme
	*/
	
	// Replace existing font
	wp_dequeue_style( 'cudazi_googlefont' );
	
	// Load new Font URL
	// Found on http://www.google.com/webfonts
	wp_enqueue_style('cudazi_googlefont', 'http://fonts.googleapis.com/css?family=Lato',false, '','screen');