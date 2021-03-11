<section class="row side-right gutter pad-ends">

	<div class="column one">
	
		<?php if (is_category('all-courses')) : ?>
		<h1><?php single_cat_title(); ?></h1>
		<?php else : ?>
		<h1>All <?php single_cat_title(); ?> Courses</h1>
		<?php endif; ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'articles/post', get_post_type() ); ?>

		<?php endwhile; ?>

	</div><!--/column-->

	<div class="column two">

		<?php get_sidebar(); ?>

	</div><!--/column two-->

</section>