<!-- Source: searchform.php -->
<form action="<?php echo home_url( '/' ); ?>" method="get" class="clearfix" id="searchform">
	<input type="text" name="s" id="s" size="15" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search', 'cudazi'); ?>" />
	<input type="submit" title="<?php _e('Search', 'cudazi'); ?> <?php bloginfo('name'); ?>" id="searchsubmit" value="<?php _e("GO","cudazi"); ?>" />
</form>