<?php
/*
Plugin Name: player video iframe
Plugin URI: https://www.pabuzo.vn/lien-he
Description: plugin chạy video youtube getlink ngoài play bằng iframe cho wordpress
Author: ĐỖ MINH HIẾU
Version: 4.6
Tags: video, player video, player youtube
Author URI: https://www.pabuzo.vn
Donate link: https://www.pabuzo.vn/lien-he
License: GPL
*/
?>
<?php
function pabuzo_vn( $args, $content ) {
	$content = '<div class="fullscreen-bg embed-responsive-16by9">
	<iframe class="embed-responsive-item"
	src="//clip.pabuzo.vn/play.php?url='.$args['id'].'" height=" '.$args['height'].'" width="'.$args['width'].'" frameborder="0" allowfullscreen></iframe>
	</div><br/>
	';
 return $content;
}
add_shortcode('pabuzovn', 'pabuzo_vn');
?>