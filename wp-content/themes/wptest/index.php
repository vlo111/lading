<?php get_header(); ?>

<?php //<editor-fold<desc="Video">
$args = array(
    'post_type' => 'page',
    'meta_key' => 'ors',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'posts_per_page' => 1);
$page_videoOrder = new WP_Query($args);
if ($page_videoOrder->have_posts()) :
    while ($page_videoOrder->have_posts()) :
        $page_videoOrder->the_post(); ?>

        <div class="video-block">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif;
//</editor-fold>?>
<?php //<editor-fold<desc="Carusel"> ?>
    <div class="caruser-blck">
        <?php $catSliderId = 7;
        $sliderCat = new WP_Query(array('post_type' => 'slider', 'cat' => $catSliderId, 'posts_per_page' => 8));
        if ($sliderCat->have_posts()) : ?>
            <div class="container float">
                <div class="carusel-top-text">
                    <div class="border-div"></div>
                    <div class="border-text">
                        <h4> <?php echo get_cat_name($catSliderId); ?> </h4>
                    </div>
                    <div class="border-div"></div>
                </div>
                <div id="owl-demo">
                    <?php while ($sliderCat->have_posts()) :
                        $sliderCat->the_post(); ?>
                        <div class="item">
                            <div class="div">
                                <div class="divmargin">
                                    <?php the_post_thumbnail('', ['class' => 'div-img', 'alt' => '']); ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt="Owl Image">

                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php $catId = 1;
        $page_gal1 = new  WP_Query(array('post_type' => 'page', 'cat' => $catId, 'posts_per_page' => 3, 'order' => 'ASC'));
        if ($page_gal1->have_posts()) : ?>
            <div class="container float">
                <div class="slayder-footer-text">
                    <div class="border-div"></div>
                    <div class="border-text">
                        <h5><?php echo get_cat_name($catId); ?></h5>
                    </div>
                    <div class="border-div"></div>
                </div>
                <div class="slayder-boottom-img">
                    <?php while ($page_gal1->have_posts()) :
                    $page_gal1->the_post(); ?>
                    <?php if ($page_gal1->current_post == 0) : ?>
                    <div class="slayder-img">
                        <?php else : ?>
                        <div class="slayder-img margin">
                            <?php endif; ?>
                            <div class="absolute-img-1">
                                <div class="zoom-icon-text-block">
                                    <a href="<?php the_permalink() ?> "><i class="fa fa-search-plus"
                                                                           aria-hidden="true"></i></a>
                                    <p><?php the_title(); ?></p>
                                </div>
                            </div>
                            <?php the_post_thumbnail('', ['class' => '', 'alt' => '']); ?>
                        </div>
                        <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php
//</editor-fold>  ?>
<?php //<editor-fold<desc="Svadba-pages">
$catSvadbaId = 6;
$SvadbaCatPages = new WP_Query(array('post_type' => 'page', 'cat' => $catSvadbaId, 'posts_per_page' => 4));
if ($SvadbaCatPages->have_posts()) : ?>
    <div class="svadba-img-block">
        <div class="container">
            <div class="svadba-title">
                <div class="border-div"></div>
                <div class="border-text">
                    <h6><?php echo get_cat_name($catSvadbaId); ?></h6>
                </div>
                <div class="border-div"></div>
            </div>

            <div class="svadba-images">

                <?php while ($SvadbaCatPages->have_posts()) :
                    $SvadbaCatPages->the_post(); ?>
                    <?php if ($SvadbaCatPages->current_post < 2) : ?>
                    <?php if ($SvadbaCatPages->current_post == 0) : ?>
                        <div class="svadba-images-1">
                        <div class="images-block-1">
                            <div class="absolute-img-2">
                                <div class="absolute-img-margin">
                                    <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt=""
                                         class="div-img-2"/>
                                    <a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID, 'name_hover', true); ?></a>
                                </div>
                            </div>
                            <?php the_post_thumbnail('', ['class' => '', 'alt' => '']); ?>
                        </div>
                    <?php elseif ($SvadbaCatPages->current_post == 1) : ?>
                        <div class="images-block-2">
                            <div class="absolute-img-2">
                                <div class="absolute-img-margin">
                                    <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt=""
                                         class="div-img-2"/>
                                    <a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID, 'name_hover', true); ?></a>
                                </div>
                            </div>
                            <?php the_post_thumbnail('', ['class' => '', 'alt' => '']); ?>
                        </div>
                        </div>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if ($SvadbaCatPages->current_post == 2) : ?>
                        <div class="svadba-images-1">
                        <div class="images-block-3">
                            <div class="absolute-img-2">
                                <div class="absolute-img-margin">
                                    <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt=""
                                         class="div-img-2"/>
                                    <a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID, 'name_hover', true); ?></a>
                                </div>
                            </div>
                            <?php the_post_thumbnail('', ['class' => '', 'alt' => '']); ?>
                        </div>
                    <?php elseif ($SvadbaCatPages->current_post == 3) : ?>
                        <div class="images-block-4">
                            <div class="absolute-img-2">
                                <div class="absolute-img-margin">
                                    <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>" alt=""
                                         class="div-img-2"/>
                                    <a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID, 'name_hover', true); ?></a>
                                </div>
                            </div>
                            <?php the_post_thumbnail('', ['class' => '', 'alt' => '']); ?>
                        </div>

                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
<?php endif;
//</editor-fold>  ?>

    <div class="komanda-block">
        <div class="container">
            <div class="komanda-title">
                <hr>
                <p> Почему мЫ? </p>
                <hr>
            </div>
            <div class="komanda-bottom-title">
                <p>Нас ценят за нашу любовь к своему делу и индивидуальный подход</p>
            </div>
            <div class="komanda-ul-foto-border">
                <ul>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/Forma-11.png" alt=""></li>
                    <li></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/diamond-outlined-shape.png" alt=""></li>
                    <li></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/games-ribbon.png" alt=""></li>
                    <li></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/Forma-12.png" alt=""></li>
                    <li></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/sbros.png" alt=""></li>
                </ul>
            </div>
            <div class="komanda-div-block">
                <div class="komanda-div-1">
                    <p>Только индивидуальные и эксклюзивные разработки для каждого кли</p>
                </div>
                <div class="komanda-div-1">
                    <p>Опыт организации, проведения, оформления и декорирования мероп</p>
                </div>
                <div class="komanda-div-1">
                    <p>Команда лучших специалистов. </p>
                </div>
                <div class="komanda-div-1">
                    <p>Эксклюзивный декор с интегрированием картона по привлекательной</p>
                </div>
                <div class="komanda-div-1">
                    <p>Свое собственное производство декораций</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sxema-raboti-block">
        <div class="sxema-bg-color">
            <div class="container">
                <div class="sxema-title">
                    <hr>
                    <p> Схема работы </p>
                    <hr>
                </div>
                <div class="sxama-ul-1">
                    <ul>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/phone-call.png" alt="">
                            <p>Вы звоните нам или оставляете заявку на почте</p></li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/installation-symbol.png" alt="">
                            <p>Монтаж в день мероприятия. </p></li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/003-line-chart.png" alt="">
                            <p>Работа команды над проектом. Выполнение заказа.</p></li>
                    </ul>
                </div>
                <div class="sxema-ul-2">
                    <ul>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/004-consulting.png" alt="">
                            <p>порядок работы, </p></li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/002-sketch.png" alt="">
                            <p>Предложение концепции </p></li>
                    </ul>
                </div>
                <div class="sxema-ul-3">
                    <ul>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/006-handshake.png" alt="">
                            <p> обсуждение рекомендаций и пожеланий</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="partnyori-block">
        <div class="container">
            <div class="partnyor-title">
                <hr>
                <p>Наши партнеры и проекты</p>
                <hr>
            </div>
            <div class="image-ul-1">
                <ul>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/muzej-esenina.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/korolevskij-dvor.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/tort-market-main-logo-1.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/logo_kozlov1.png" alt=""></li>
                </ul>
            </div>
            <div class="image-ul-1">
                <ul>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/wedby.me-.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/determ.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/diuk.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/logo-cosmopolitan.png" alt=""></li>
                </ul>
            </div>
            <div class="image-ul-1">
                <ul>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/fabrika-soyuz-(1).png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/park_hyatt.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/2000px-Henkel-Logo.svg.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/logo-krasny-oktyabr.png" alt=""></li>
                </ul>
            </div>

            <div class="image-ul-2">
                <ul>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/icon.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/lukoyl.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/logo-raffaello.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/Web_logo_285x140.png" alt=""></li>
                </ul>
            </div>
            <div class="image-ul-2">
                <ul>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/icon.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/lukoyl.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/logo-raffaello.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/img/Web_logo_285x140.png" alt=""></li>
                </ul>
            </div>
            <div class="show-button">
                <p id="click">Ещё</p>
            </div>
        </div>
    </div>
<?php
    $args = array(
    'p' => 264 // works on my server; use whatever ID you need
    );
    $qry = new WP_Query($args); ?>
    <div id="comments" class="filback-block">
        <div class="filback-bg">
            <div class="container float-1">
                <?php
                if ($qry->have_posts()) {
                    while ($qry->have_posts()) {
                        $qry->the_post();
                        global $withcomments;
                        $withcomments = 1;
                        comments_template();
                    }
                } ?>
            </div>
        </div>
    </div><!-- #comments -->


<?php get_footer(); ?>