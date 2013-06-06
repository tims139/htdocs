<?php

	/* Определяем картинки на сайте */
		if ( function_exists( 'add_theme_support' ) ) {
			add_theme_support( 'post-thumbnails' );
		    set_post_thumbnail_size( 450, 300 ); // default Post Thumbnail dimensions   
		}

		if ( function_exists( 'add_image_size' ) ) { 
			add_image_size( 'xlarge-thumb', 320, 9999 );
			add_image_size( 'large-thumb', 220, 9999 );
			add_image_size( 'medium-thumb', 130, 9999 );
			add_image_size( 'small-thumb', 100, 9999 );
			add_image_size( 'xsmall-thumb', 50, 9999 );
		}

	/* Убираем лишние классы из меню */
		add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
		add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
		add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
		
		function my_css_attributes_filter($var) {
		  return is_array($var) ? array_intersect($var, array('current-menu-item', 'current-category-ancestor', 'current-post-ancestor')) : '';
		}

	/* Определяем меню на сайте */
		function top_menu() {
		  register_nav_menu('header-menu',__( 'Header Menu' ));
		}
		
		add_action( 'init', 'top_menu' );

	/* Выводим последние новости на главной */
		function last_news_main($cat_number){
			
			$i=1;
			$args = array( 'numberposts' => 5, 'category' => $cat_number);
			$posts = get_posts($args);
			foreach ($posts as $post){
				$category = get_the_category( $post->ID );
				echo '<li>';
				if($i==1) { 
					echo get_the_post_thumbnail($post->ID, 'xlarge-thumb');
					echo '<header>';
					echo '<span class="category_name gray">';
					echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
					echo ' <i class="icon-angle-right"></i> ';
					echo '</span>';
					echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>';
					echo '</header>';
					echo $post->post_excerpt;
				} 
				
				else{
					echo get_the_post_thumbnail($post->ID, 'small-thumb');
					echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>';
					echo '<div class="fnt13 category_name">';
					echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
					echo '</div>';
				}
				
				$i++;
								
				echo '</li>';
			}

		}

	/* Пагинация */
		function pagination() {
			global $wp_query, $wp_rewrite;
			$pages = '';
			$max = $wp_query->max_num_pages;
			if (!$current = get_query_var('paged')) $current = 1;
			$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
			$a['total'] = $max;
			$a['current'] = $current;

			$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
			$a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
			$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
			$a['prev_text'] = '←'; //текст ссылки "Предыдущая страница"
			$a['next_text'] = '→'; //текст ссылки "Следующая страница"
			$a['type'] = 'list';

			if ($max > 1) echo '<nav class="pagination"> Страницы:';
			echo paginate_links($a);
			if ($max > 1) echo '</nav>';
		}

	/* Слайдер на главной */
		function slider_main(){
			$posts = get_posts(array('numberposts' => 4));
			foreach ($posts as $post){
				echo '<a href="'.get_permalink($post->ID).'" data-url="'.get_permalink($post->ID).'" data-text="'.$post->post_title.'" title="'.$post->post_title.'">'.get_the_post_thumbnail($post->ID).'</a>';
			}
		}
?>