<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-test-site
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info container">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'wp-test-site')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'wp-test-site'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'wp-test-site'), 'wp-test-site', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	jQuery(document).ready(function($) {
		$('.home__slider-wrap').slick({
			infinite: true,
			dots: true,
			slidesToShow: 4,
			slidesToScroll: 1
		});
	});
</script>
</body>

</html>