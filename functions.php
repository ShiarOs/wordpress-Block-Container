
<?php
function add_div_to_block_content( $block_content, $block ) {
	//Targit core / ** and core-embed ** blocks.
	if($block = 'core/freeform'){
		$block_content = sprintf( '<div class="your-container-class-name">%s</div>', $block_content );
	}
	return $block_content;
}
add_filter( 'render_block', add_div_to_block_content, PHP_INT_MAX - 1, 2);
?>
