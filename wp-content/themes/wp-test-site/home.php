<?php
/*
Template Name: Home page template
*/
?>
<?php
get_header(); ?>

<main id="primary" class="site-main container">



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
			} else if ($product_cat == "all_products"){
				echo do_shortcode('[products limit="8" columns="4"]');
			}
			?>
		<?php endif; ?>


</main><!-- #main -->

<?php
get_footer();
