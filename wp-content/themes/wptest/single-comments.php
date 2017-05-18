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