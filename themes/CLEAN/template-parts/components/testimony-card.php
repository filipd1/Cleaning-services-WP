<?php
    $role = get_field('role', get_the_ID());
    $content = get_field('content', get_the_ID());
    $rating = get_field('rating', get_the_ID());
    $star_icon = file_get_contents(get_template_directory() . '/assets/icons/star.svg');
    $quote_icon = file_get_contents(get_template_directory() . '/assets/icons/quotation.svg');
?>

<div class="testimony-card swiper-slide">

    <?php the_post_thumbnail(); ?>

    <div class="testimony-card-right">

        <div class="testimony-card-right-upper">
            <div class="testimony-card-inner-text">
                <h3><?php the_title(); ?></h3>
                <p><?=$role;?></p>

                <?php for ($i = 0; $i < $rating; $i++) : ?>
                    <?= $star_icon; ?>
                <?php endfor; ?>
            </div>

            <?=$quote_icon;?>

        </div>

        <p class="testimony-content"><?=$content;?></p>

    </div>
    

</div>