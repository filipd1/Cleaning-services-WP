<?php
    $title = get_field('title');
    $overview = get_field('overview');

    $arrow_icon = file_get_contents(get_template_directory() . '/assets/icons/arrow.svg');

    $testimonies = new WP_Query([
        'post_type' => 'testimonies',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ]);
?>

<div class="section section-grid section-testimonies">

    <div class="section-content">
        <h2><?=$title;?></h2>
        <p><?=$overview;?></p>

        <div class="testimonies-btns">
            <button class="btn-prev"><?php echo $arrow_icon; ?></button>
            <button class="btn-next"><?php echo $arrow_icon; ?></button>
        </div>
    </div>

    <?php if ($testimonies->have_posts()) : ?>
        <div class="testimonies-swiper swiper mySwiper">
            <div class="swiper-wrapper">
                <?php while ($testimonies->have_posts()) : $testimonies->the_post(); ?>
                    <?php
                        get_template_part('template-parts/components/testimony-card');
                    ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

</div>