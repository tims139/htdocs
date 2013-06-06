<?php get_header(); ?>

	<aside class="as_td left_col">

		<?php get_sidebar(); ?>
		
	</aside>

	<div class="as_td">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article>

				<h1><?php the_title(); ?></h1>

				<p class="anons">
					<?php the_post_thumbnail('large-thumb'); ?>
					<em><?php echo get_the_excerpt(); ?></em>
					<span><i class="icon-folder-open"></i> Категория: &nbsp;<?php the_category(', ') ?></span>
				</p>
				
				<?php the_content(); ?>
				
			</article>

		<?php endwhile; endif; ?>

		<header class="mb20">
			<h3 class="h_lines"><span><b>Сейчас читают:</b></span></h3>
		</header>

		<div class="now_reading_block">

			<div class="article_list_item as_td vmid">
				<img src="<?php echo bloginfo('template_url'); ?>/img/test7.jpg" width="130" height="87">
				<a href="#" class="green">Дизельные вилочные погрузчики VP D</a>
			</div>

			<div class="article_list_item as_td">
				<img src="<?php echo bloginfo('template_url'); ?>/img/test6.jpg" width="130" height="87">
				<a href="#" class="green">Установка металлочерепицы: пошаговая инструкция</a>
			</div>

			<br>

			<div class="article_list_item as_td">
				<img src="<?php echo bloginfo('template_url'); ?>/img/test4.jpg" width="130" height="87">
				<a href="#" class="green">Применение циркуляционных насосов в системе отопления индивидуального дома</a>
			</div>

			<div class="article_list_item as_td">
				<img src="<?php echo bloginfo('template_url'); ?>/img/test5.jpg" width="130" height="87">
				<a href="#" class="green">Мелкозаглубленный ленточный фундамент для бани своими руками</a>
			</div>

		</div>

	</div>

<?php get_footer(); ?>