<h3>Темы раздела:</h3>
<div class="left_orange_border mb30">
    <noindex>
        <ul class="fnt13 list_mb10">
            <?php 
                $category = get_the_category();
                $catParID = $category[0]->category_parent;
                if (is_single()){
                    $myCat = $category[0]->cat_ID;   
                }
                else{
                    $myCat = $category->cat_ID;
                }
                wp_list_categories('orderby=id&use_desc_for_title=0&child_of='.$catParID.'&current_category='.$myCat.'&title_li=');
            ?>
        </ul>
    </noindex>
</div>

<div class="orange_bg_gradient brd4 fnt13">
    <div class="bg_gradient_inner">
        <h3><b>Популярное:</b></h3>
        <ul class="short_list">
            <li><img src="<?php echo bloginfo('template_url'); ?>/img/test3.jpg" width="50" height="33"><a href="#">Применение циркуляционных насосов</a></li>
            <li><img src="<?php echo bloginfo('template_url'); ?>/img/test5.jpg" width="50" height="33"><a href="#">Мелкозаглубленный ленточный фундамент</a></li>
            <li><img src="<?php echo bloginfo('template_url'); ?>/img/test6.jpg" width="50" height="33"><a href="#">Установка металлочерепицы</a></li>
            <li><img src="<?php echo bloginfo('template_url'); ?>/img/test4.jpg" width="50" height="33"><a href="#">Характеристики материала и советы по его выбору</a></li>
            <li><img src="<?php echo bloginfo('template_url'); ?>/img/test7.jpg" width="50" height="33"><a href="#">Дизельные вилочные погрузчики VP D</a></li>
        </ul>
    </div>
</div>

<br>

<img src="<?php echo bloginfo('template_url'); ?>/img/test10.png" style="padding-left:10px;">