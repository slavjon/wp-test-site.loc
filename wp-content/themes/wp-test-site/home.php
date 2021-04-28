<?php
/*
Template Name: Home page template
*/
?>
<?php
get_header(); ?>

<main id="primary" class="site-main container">
	<div class="home__slider-wrap">

		<?php
		$loop = new WP_Query(array(
			'post_type' => 'product',
			'posts_per_page' => "6",
			'orderby' => 'menu_order',
			'order' => 'ASC',
		));

		while ($loop->have_posts()) : $loop->the_post(); ?>
			<div <?php post_class("home__slide"); ?>>
					
						<?php the_post_thumbnail("thumbnail-215x300"); ?>
						<?php woocommerce_template_loop_rating(); ?>
						<h4>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h4>
						<p class="price">
							<?php _e("Starts at", "examp"); ?>
							<?php woocommerce_template_loop_price(); ?>
							
						</p>		
			</div>

		<?php endwhile;
		wp_reset_postdata(); ?>

	</div>

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>
	<h2>Products from ACF</h2>
	<?php if (get_field('category_name')) : ?>
		<?php
		$product_cat = get_field("category_name");

		if ($product_cat == "category_hoodies") {
			echo do_shortcode('[products limit="8" columns="4" category="hoodies" cat_operator="AND"]');
		} else if ($product_cat == "category_tshirts") {
			echo do_shortcode('[products limit="8" columns="4" category="tshirts" cat_operator="AND"]');
		} else if ($product_cat == "all_products") {
			echo do_shortcode('[products limit="8" columns="4"]');
		}
		?>
	<?php endif; ?>


</main><!-- #main -->

<?php
get_footer();
