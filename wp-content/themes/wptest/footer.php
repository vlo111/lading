<div class="footer">
    <div class="container">
        <div class="pusto"></div>
        <div class="footer-menu-block">
            <?php
            wp_nav_menu(array(
                'menu' => '',
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'theme_location' => 'FooterMenu',
            )); ?>
        </div>
        <div class="footer-icons-block">
            <?php dynamic_sidebar('sidebar-socicon'); ?>
        </div>
        <div class="orginal">
            <p><?php echo get_bloginfo ( 'description'); ?></p>
        </div>
    </div>
</div>
</div>
<!--[if lt IE 9]>-->
<script src="<?php bloginfo('template_url'); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/respond/respond.min.js"></script>
<!--<![endif]-->

<script src="<?php bloginfo('template_url'); ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/countdown/jquery.plugin.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/countdown/jquery.countdown.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/countdown/jquery.countdown-ru.js"></script>

<script src="<?php bloginfo('template_url'); ?>/libs/landing-nav/navigation.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>
