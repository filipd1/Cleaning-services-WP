<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $cta_text = get_field('cta_text');

    $plans = new WP_Query([
        'post_type' => 'plans',
        'posts_per_page' => 3,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ]);

    $billing_type = 'month';
?>

<div class="section section-plans">

    <div class="plans-header">
        <h4><?=$subtitle;?></h4>
        <h2><?=$title;?></h2>
    </div>

    <div class="plans-price-btns">
        <button class="price-btn price-btn-main" data-billing="month">Monthly</button>
        <button class="price-btn price-btn-secondary" data-billing="year">Yearly</button>
    </div>

    <div class="plans-grid">
        <?php if ($plans->have_posts()) : ?>
            <?php while ($plans->have_posts()) : $plans->the_post(); ?>
                <?php
                    $price_month = get_field('price_month', get_the_ID());
                    $price_year = get_field('price_year', get_the_ID());

                    get_template_part('template-parts/components/plan-card', null, [
                        'price_month' => $price_month,
                        'price_year' => $price_year,
                        'cta_text' => $cta_text,
                    ]);
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</div>