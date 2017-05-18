<?php get_header();
if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <section id="how-it-work" class="section background-color-light m-none">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- Free Resources: http://www.pixeden.com / http://www.premiumpixels.com/ -->
                    <?php the_post_thumbnail('', ['class' => '', 'alt' => '']); ?>
                </div>
                <div class="col-md-7">
                    <h2 class=""><?php the_title(); ?></h2>
                    <p class=""><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>