<?php get_header(); ?>

	<h1>STROIKA-NEW.RU - строительный справочник</h1>

	<div class="as_table">

		<div class="as_td">

			<div class="slider">
	            <div id="slider">   
					<?php
						slider_main();
					?>
	            </div>
	            <div id="slider-nav"></div>
	        </div>
            
            <div class="left_orange_border mb20">
            		Ищите новые бизнес идеи для малого бизнеса, какие идеи для бизнеса с нуля выбрать, каким бизнесом заняться? Ответы на эти и другие вопросы, вы получите на нашем портале бесплатно. Каталог идей содержит лучшие новые идеи для бизнеса с нуля, идеи домашнего бизнеса, бесплатные новые идеи для бизнеса в кризис, которые помогут начать свое дело, открыть свой малый домашний бизнес, найти новые идеи для малого бизнеса.
            </div>

            <h2 class="h_lines"><span>Строительство</span></h2>

            <div class="start_sections">
				<ul>
		        	<?php 
		        		last_news_main(2);
		        	 ?>
				</ul>
            </div>

            <h2 class="h_lines"><span>Ремонт</span></h2>

            <div class="start_sections">
				<ul>
		        	<?php 
		        		last_news_main(2);
		        	 ?>
				</ul>
            </div>

            <div class="as_table cols_2">
            	<div class="as_td">
					
					<h2 class="h_lines"><span>Вопрос-ответ</span></h2>

					<ul class="list_mb10">
						<li><i class="icon-comments-alt orange"></i> <a href="#" class="green"><em>Как сделать водопровод в доме?</em></a></li>
						<li><i class="icon-comments-alt orange"></i> <a href="#" class="green"><em>Как построить деревянный дом самому?</em></a></li>
						<li><i class="icon-comments-alt orange"></i> <a href="#" class="green"><em>Как постелить ламинат в квартире?</em></a></li>
						<li><i class="icon-comments-alt orange"></i> <a href="#" class="green"><em>Как повесить люстру?</em></a></li>
						<li><i class="icon-comments-alt orange"></i> <a href="#" class="green"><em>Как установить водонагреватель?</em></a></li>
					</ul>

            	</div>

            	<div class="as_td">
					
					<h2 class="h_lines"><span>Каталог товаров</span></h2>

					<ul class="short_list new_tovar_list">
						<li>
							<img src="<?php echo bloginfo('template_url'); ?>/img/test12.jpeg" width="50" height="33"><a href="#">Силикатный кирпич</a>
							<div class="fnt12"><a href="#" class="gray">Фундамент</a></div>
						</li>
						<li>
							<img src="<?php echo bloginfo('template_url'); ?>/img/test13.jpeg" width="50" height="33"><a href="#">Наплавляемая гидроизоляция</a>
							<div class="fnt12"><a href="#" class="gray">Сантехника</a></div>
						</li> 
						<li>
							<img src="<?php echo bloginfo('template_url'); ?>/img/test14.jpeg" width="50" height="33"><a href="#">Натяжные потолки</a>
							<div class="fnt12"><a href="#" class="gray">Кровля</a></div>
						</li>
					</ul>

            	</div>
            </div>

		</div>

		<aside class="as_td right_col">

			<div class="orange_bg_gradient brd4 fnt13">
				<div class="bg_gradient_inner" style="min-height:300px;">
					<h3><b>Популярное:</b></h3>
					<ul class="short_list">
						<ul class="short_list">
							<li><img src="<?php echo bloginfo('template_url'); ?>/img/test3.jpg" width="50" height="33"><a href="#">Применение циркуляционных насосов</a></li>
							<li><img src="<?php echo bloginfo('template_url'); ?>/img/test5.jpg" width="50" height="33"><a href="#">Мелкозаглубленный ленточный фундамент</a></li>
							<li><img src="<?php echo bloginfo('template_url'); ?>/img/test6.jpg" width="50" height="33"><a href="#">Установка металлочерепицы</a></li>
							<li><img src="<?php echo bloginfo('template_url'); ?>/img/test4.jpg" width="50" height="33"><a href="#">Характеристики материала и советы по его выбору</a></li>
							<li><img src="<?php echo bloginfo('template_url'); ?>/img/test7.jpg" width="50" height="33"><a href="#">Дизельные вилочные погрузчики VP D</a></li>
						</ul>
					</ul>
				</div>
			</div>

			<img src="<?php echo bloginfo('template_url'); ?>/img/test10.png" style="padding-top:20px;">

			<img src="<?php echo bloginfo('template_url'); ?>/img/test11.png" style="padding-top:20px;">


		</aside>

    </div>

<?php get_footer(); ?>
