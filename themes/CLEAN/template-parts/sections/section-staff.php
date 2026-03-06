<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $overview = get_field('overview');

    $team = new WP_Query([
        'post_type' => 'staff',
        'posts_per_page' => 3,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ]);
?>

<div class="section">

    <div class="section-header">
        <h2><?=$title;?></h2>

        <div>
            <h5><?=$subtitle;?></h5>
            <p><?=$overview;?></p>
        </div>

    </div>

    <hr class="section-hr">

    <div class="simple-grid">
        <?php if ($team->have_posts()) : ?>
            <?php while ($team->have_posts()) : $team->the_post(); ?>
                <?php
                    get_template_part('template-parts/components/simple-card', null, [
                        'type' => 'staff'
                    ]);
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>


</div>