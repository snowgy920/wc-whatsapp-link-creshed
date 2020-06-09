<?php
add_action( 'widgets_init', 'porto_follow_us2_load_widgets' );

function porto_follow_us2_load_widgets() {
	register_widget( 'Porto_Follow_Us_Widget2' );
}

class Porto_Follow_Us_Widget2 extends Porto_Follow_Us_Widget {

	function widget( $args, $instance ) {
		extract( $args );
		$title           = apply_filters( 'widget_title', $instance['title'] );
		$nofollow        = isset( $instance['nofollow'] ) ? $instance['nofollow'] : '';
		$default_skin    = isset( $instance['default_skin'] ) ? $instance['default_skin'] : '';
		$disable_br      = isset( $instance['disable_br'] ) ? $instance['disable_br'] : '';
		$disable_tooltip = isset( $instance['disable_tooltip'] ) ? $instance['disable_tooltip'] : '';
		$follow_before   = $instance['follow_before'];
		$facebook        = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
		$twitter         = isset( $instance['twitter'] ) ? $instance['twitter'] : '';
		$rss             = isset( $instance['rss'] ) ? $instance['rss'] : '';
		$pinterest       = isset( $instance['pinterest'] ) ? $instance['pinterest'] : '';
		$youtube         = isset( $instance['youtube'] ) ? $instance['youtube'] : '';
		$instagram       = isset( $instance['instagram'] ) ? $instance['instagram'] : '';
		$skype           = isset( $instance['skype'] ) ? $instance['skype'] : '';
		$linkedin        = isset( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		$googleplus      = isset( $instance['googleplus'] ) ? $instance['googleplus'] : '';
		$vk              = isset( $instance['vk'] ) ? $instance['vk'] : '';
		$xing            = isset( $instance['xing'] ) ? $instance['xing'] : '';
		$tumblr          = isset( $instance['tumblr'] ) ? $instance['tumblr'] : '';
		$reddit          = isset( $instance['reddit'] ) ? $instance['reddit'] : '';
		$vimeo           = isset( $instance['vimeo'] ) ? $instance['vimeo'] : '';
		$telegram        = isset( $instance['telegram'] ) ? $instance['telegram'] : '';
		$yelp            = isset( $instance['yelp'] ) ? $instance['yelp'] : '';
		$flickr          = isset( $instance['flickr'] ) ? $instance['flickr'] : '';
		$whatsapp        = isset( $instance['whatsapp'] ) ? $instance['whatsapp'] : '';
		$follow_after    = $instance['follow_after'];

		if ( $nofollow ) {
			$nofollow_escaped = ' rel="nofollow"';
		} else {
			$nofollow_escaped = '';
		}

		echo porto_filter_output( $before_widget );

		if ( $title ) {
			echo $before_title . sanitize_text_field( $title ) . $after_title;
		}

		$class_escaped   = 'share-links';
		$tooltip_escaped = '';
		if ( $disable_br ) {
			$class_escaped .= ' disable-br';
		}
		if ( $default_skin ) {
			$class_escaped .= ' default-skin';
		}
		if ( ! $disable_tooltip ) {
			$tooltip_escaped = 'data-toggle="tooltip" data-placement="bottom" ';
		}
		?>
		<div class="<?php echo $class_escaped; ?>">
			<?php
			if ( $follow_before ) :
				?>
				<?php echo do_shortcode( $follow_before ); ?><?php endif; ?>
			<?php
			if ( $facebook ) :
				?>
				<a href="<?php echo esc_url( $facebook ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Facebook', 'porto-functionality' ); ?>" class="share-facebook"><?php esc_html_e( 'Facebook', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $twitter ) :
				?>
				<a href="<?php echo esc_url( $twitter ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Twitter', 'porto-functionality' ); ?>" class="share-twitter"><?php esc_html_e( 'Twitter', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $rss ) :
				?>
				<a href="<?php echo esc_url( $rss ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'RSS', 'porto-functionality' ); ?>" class="share-rss"><?php esc_html_e( 'RSS', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $pinterest ) :
				?>
				<a href="<?php echo esc_url( $pinterest ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Pinterest', 'porto-functionality' ); ?>" class="share-pinterest"><?php esc_html_e( 'Pinterest', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $youtube ) :
				?>
				<a href="<?php echo esc_url( $youtube ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Youtube', 'porto-functionality' ); ?>" class="share-youtube"><?php esc_html_e( 'Youtube', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $instagram ) :
				?>
				<a href="<?php echo esc_url( $instagram ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Instagram', 'porto-functionality' ); ?>" class="share-instagram"><?php esc_html_e( 'Instagram', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $skype ) :
				?>
				<a href="<?php echo esc_attr( $skype ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Skype', 'porto-functionality' ); ?>" class="share-skype"><?php esc_html_e( 'Skype', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $linkedin ) :
				?>
				<a href="<?php echo esc_url( $linkedin ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Linkedin', 'porto-functionality' ); ?>" class="share-linkedin"><?php esc_html_e( 'Linkedin', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $googleplus ) :
				?>
				<a href="<?php echo esc_url( $googleplus ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Google +', 'porto-functionality' ); ?>" class="share-googleplus"><?php esc_html_e( 'Google +', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $vk ) :
				?>
				<a href="<?php echo esc_url( $vk ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'VK', 'porto-functionality' ); ?>" class="share-vk"><?php esc_html_e( 'VK', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $xing ) :
				?>
				<a href="<?php echo esc_url( $xing ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Xing', 'porto-functionality' ); ?>" class="share-xing"><?php esc_html_e( 'Xing', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $tumblr ) :
				?>
				<a href="<?php echo esc_url( $tumblr ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Tumblr', 'porto-functionality' ); ?>" class="share-tumblr"><?php esc_html_e( 'Tumblr', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $reddit ) :
				?>
				<a href="<?php echo esc_url( $reddit ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Reddit', 'porto-functionality' ); ?>" class="share-reddit"><?php esc_html_e( 'Reddit', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $vimeo ) :
				?>
				<a href="<?php echo esc_url( $vimeo ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Vimeo', 'porto-functionality' ); ?>" class="share-vimeo"><?php esc_html_e( 'Vimeo', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $telegram ) :
				?>
				<a href="<?php echo esc_url( $telegram ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Telegram', 'porto-functionality' ); ?>" class="share-telegram"><?php esc_html_e( 'Telegram', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $yelp ) :
				?>
				<a href="<?php echo esc_url( $yelp ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Yelp', 'porto-functionality' ); ?>" class="share-yelp"><?php esc_html_e( 'Yelp', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $flickr ) :
				?>
				<a href="<?php echo esc_url( $flickr ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'Flickr', 'porto-functionality' ); ?>" class="share-flickr"><?php esc_html_e( 'Flickr', 'porto-functionality' ); ?></a>
				<?php
			endif;

			if ( $whatsapp ) :
				?>
				<a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>" <?php echo $nofollow_escaped; ?> target="_blank" <?php echo $tooltip_escaped; ?>title="<?php esc_attr_e( 'WhatsApp', 'porto-functionality' ); ?>" class="share-whatsapp" style="display:none"><?php esc_html_e( 'WhatsApp', 'porto-functionality' ); ?></a>
				<?php
			endif;
			?>
			<?php
			if ( $follow_after ) :
				?>
				<?php echo do_shortcode( $follow_after ); ?>
			<?php endif; ?>
		</div>

		<?php
		echo porto_filter_output( $after_widget );
	}

}
?>
