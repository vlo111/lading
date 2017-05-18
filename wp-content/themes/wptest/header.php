<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/countdown/jquery.countdown.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css"/>
    <?php wp_head(); ?>
</head>
<body>

<div class="wrapper">
    <div class="top-header">
        <div class="container">
            <div class="top-header-menu">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <?php $walker = new mainMenuWalker();
                    wp_nav_menu(array(
                        'menu' => '',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'theme_location' => 'HeadMenu',
                        'walker' => $walker
                    )); ?>
                </div>
                <i class="fa fa-bars" aria-hidden="true"></i>

            </div>
            <div class="top-header-vk-fb">
                <?php dynamic_sidebar('sidebar-socicon'); ?>
            </div>
        </div>
    </div>
    <div class="header-bg">
        <div class="header-opacity-bg">
            <div class="container">
                <div class="header-title-block">
                    <?php $args = array(
                        'post_type' => 'post',
                        'meta_key' => 'order',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'posts_per_page' => 1);
                    $page_head = new WP_Query($args); ?>
                    <?php if ($page_head->have_posts()) : ?>
                        <?php while ($page_head->have_posts()) : $page_head->the_post(); ?>
                            <div class="header-text">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <?php $page_head->the_post();
                            the_content(); ?>
                        <?php endwhile; endif; ?>
                </div>
                <div class="header-registration-block">
                    <div class="registration">
                        <?php $args = array(
                            'post_type' => 'page',
                            'meta_key' => 'con',
                            'orderby' => 'meta_value_num',
                            'order' => 'ASC',
                            'posts_per_page' => 1);
                        $page_index = new WP_Query($args);
                        if ($page_index->have_posts()) : while ($page_index->have_posts()) :
                            $page_index->the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
<!--                        <form method="post">-->
<!--                            <p>Ваше имя*</p>-->
<!--                            <input type="text" name="name" class="zayavka-input" id="input-0"/>-->
<!--                            <span id="input-0-inf"></span>-->
<!--                            <p>Ваш E-mail*</p>-->
<!--                            <input type="emil" name="email" class="zayavka-input" id="input-1"/>-->
<!--                            <span id="input-1-inf"></span>-->
<!--                            <p>Ваш телефон</p>-->
<!--                            <input type="text" name="phone" class="zayavka-input" id="input-2"/>-->
<!--                            <span id="input-2-inf"></span>-->
<!--                            <input type="submit" value="Оставить заявку" class="zayavka-button" id="zayavka-button">-->
<!--                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-text-block">
        <div class="container">
            <?php $args = array(
                'post_type' => 'post',
                'meta_key' => 'OrderHeadPost1',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'posts_per_page' => 1);
            $page_head1 = new WP_Query($args); ?>
            <?php if ($page_head1->have_posts()) : ?>
                <?php while ($page_head1->have_posts()) :
                    $page_head1->the_post(); ?>
                    <div class="border-text-div">
                        <div class="border-div"></div>
                        <div class="border-text">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="border-div"></div>
                    </div>
                    <div class="border-bottom-text">
                        <?php $page_head1->the_post();
                        the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </div>
