<?php
    $price_month = $args['price_month'] ?? 0;
    $price_year = $args['price_year'] ?? 0;
    $cta_text = $args['cta_text'] ?? 'Book now';
?>

<div class="plans-card">
    <h3><?php the_title(); ?></h3>

    <p class="plans-price" id="price-month">$<span><?=$price_month;?></span>/Monthly</p>
    <p class="plans-price" id="price-year">$<span><?=$price_year;?></span>/Yearly</p>

    <?php if (have_rows('benefits_list', get_the_ID())) : ?>
        <ul>
            <?php while (have_rows('benefits_list', get_the_ID())) : the_row(); ?>
                <li><?php echo esc_html(get_sub_field('benefit')); ?></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>

    <a href="#" class="btn btn-secondary"><?=$cta_text;?></a>

</div>