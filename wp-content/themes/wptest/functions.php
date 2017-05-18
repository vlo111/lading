<?php
//<editor-fold<desc="Conect-Scripts">
function wptest_scripts()
{
    wp_enqueue_script('jquery');
    if (is_singular())
        wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'wptest_scripts');
//</editor-fold>
//<editor-fold<desc="Menus">
register_nav_menu('HeadMenu', 'HeadPrimary');
register_nav_menu('FooterMenu', 'FooterPrimary');

class mainMenuWalker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        // назначаем атрибуты a-элементу
        $attributes = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $item_output = $args->before;

        // проверяем, на какой странице мы находимся
        $current_url = (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $item_url = esc_attr($item->url);
//        if ( $item_url != $current_url )
        $item_output .= '<a ' . $attributes . '>' . $item->title . '</a>';
//        else $item_output.= $item->title;

        // заканчиваем вывод элемента
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

//</editor-fold>
//<editor-fold<desc="Widgets">

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Soc', 'theme'),
        'id' => 'sidebar-socicon',
        'description' => esc_html__('Add widgets here.', 'theme'),
        'before_widget' => '',
        'after_widget' => '',
        'class' => 'fh5co-lead',
        'before_title' => '<h2 class="fh5co-section-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'theme_widgets_init');
//</editor-fold>
//<editor-fold<desc="Setup">
function wpt_setup()
{
    load_theme_textdomain('wptest', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('customize-selective-refresh-widgets');
    in_category('asides');
    add_theme_support('html5', array('search_form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery'));
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wpt_setup');
//</editor-fold>
//<editor-fold<desc="Slider">
/**
 * Slider
 */
add_action('init', 'slider_index');
function slider_index()
{
    register_post_type('slider', array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields'),
        'menu_position' => 100,
        'menu_icon' => admin_url() . '/images/media-button-video.gif',
        'labels' => array(
            'name' => 'Sliders',
            'all_items' => 'All Sliders',
            'add_new' => 'New Slider',
            'add_new_item' => 'Add Slider')
    ));
}

/**
 * Category in Slider
 */
function myplugin_settings()
{
// Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'slider');
// Add category metabox to page
    register_taxonomy_for_object_type('category', 'slider');
}

// Add to the admin_init hook of your theme functions.php file
add_action('init', 'myplugin_settings');
//</editor-fold>
//<editor-fold<desc="Inc">

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function wptest_content_width()
{
    $GLOBALS['content_width'] = apply_filters('under_content_width', 640);
}

add_action('after_setup_theme', 'wptest_content_width', 0);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
//</editor-fold>
//<editor-fold<desc="Comments">
class Comments extends Walker_Comment
{
    protected function html5_comment($comment, $depth, $args)
    {
        $tag = ('div' === $args['style']) ? 'div' : 'li';
        ?>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
            <footer class="comment-meta">
                <div class="otziv-block">
                    <div class="user-otziv-block">
                        <div class="uzer-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/128.png" alt=""/>
                        </div>
                        <div class="uzer-otziv">
                    <span class="span-1"><?php printf(__('%s'),
                            sprintf('<b class="fn">%s</b>', get_comment_author_link($comment))
                        ); ?></span>
                            <span class="span-2"><?php comment_time('d.m.Y'); ?></span>
                            <p><?php comment_text(); ?></p>
                        </div>
                        <div class="otvet-button">
                            <?php
                            comment_reply_link(array_merge($args, array(
                                'add_below' => 'div-comment',
                                'depth' => $depth,
                                'max_depth' => 5,
                                'before' => '<div class="reply">',
                                'after' => '</div>'
                            )));
                            ?>
                        </div>
                    </div><!-- .comment-body -->
                </div>
            </footer>
        </article><!-- .comment-body -->
        <?php
    }
}

//</editor-fold>