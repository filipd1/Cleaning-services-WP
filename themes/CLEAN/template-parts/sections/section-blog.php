<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $overview = get_field('overview');

    $posts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ]);
?>

<div class="section section-blog">

    <div class="section-header">
        <h2><?=$title;?></h2>

        <div>
            <h5><?=$subtitle;?></h5>
            <p><?=$overview;?></p>
        </div>
    </div>

    <hr class="section-hr">

    <div class="blog-grid">
        <?php if ($posts->have_posts()) : ?>
            
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <?php get_template_part('template-parts/components/post-card'); ?>
            <?php endwhile; ?>
            
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</div>