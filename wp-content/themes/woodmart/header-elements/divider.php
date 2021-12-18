<?php
	$class = ( $params['full_height'] ) ? 'wd-full-height' : 'whb-divider-default';
	$class .= ' ' . $params['css_class'];
	$class .= woodmart_get_old_classes( ' whb-divider-element' );
	woodmart_enqueue_inline_style( 'header-divider' );
 ?>
<div class="wd-header-divider <?php echo esc_attr( $class ); ?>"></div>