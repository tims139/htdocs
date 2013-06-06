<?php get_header(); ?>

	<aside class="as_td left_col">

		<?php get_sidebar(); ?>
		
	</aside>

	<div class="as_td">

		<h1>Статьи рубрики "<?php single_cat_title(); ?>"</h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="article_list_item">
					<?php the_post_thumbnail('medium-thumb'); ?>
					<h3>
						<?php if (is_category()) {
	    					$this_category = get_category($cat);
						    if (get_category_children($this_category->cat_ID) != ""){
						    	echo '<span class="category_name gray">';
						    	the_category(', ');
						    	echo ' <i class="icon-angle-right"></i> </span>';
						    }
	  					} ?>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h3>

					<?php the_excerpt(); ?> 
				</div>

		<?php endwhile; ?>

		<?php if (function_exists('pagination')) pagination(); ?>

		<?php else : ?>

			Статей не найдено!

		<?php endif; ?>

	</div>

<?php get_footer(); ?>

