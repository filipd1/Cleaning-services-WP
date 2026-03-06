<?php
    $type = $args['type'] ?? 'service';

    $star_icon = file_get_contents(get_template_directory() . '/assets/icons/star.svg');

    $fb_icon = file_get_contents(get_template_directory() . '/assets/icons/fb.svg');
    $twitter_icon = file_get_contents(get_template_directory() . '/assets/icons/twitter.svg');
    $ig_icon = file_get_contents(get_template_directory() . '/assets/icons/ig.svg');
    $linkedin_icon = file_get_contents(get_template_directory() . '/assets/icons/linkedin.svg');

    $rating = get_field('rating', get_the_ID());
?>

<div class="simple-card">

    <?php the_post_thumbnail('medium'); ?>

    <div class="card-content">

        <?php if ($type === 'staff') : ?>

            <?php for ($i = 0; $i < $rating; $i++) : ?>
                <?= $star_icon; ?>
            <?php endfor; ?>

        <?php endif; ?>


        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>


        <?php if ($type === 'staff') : ?>

            <div class="card-socials">

                <?php if ($fb = get_field('fb', get_the_ID())) : ?>
                    <a href="<?= esc_url($fb); ?>" target="_blank"><?= $fb_icon ?></a>
                <?php endif; ?>

                <?php if ($twitter = get_field('twitter', get_the_ID())) : ?>
                    <a href="<?= esc_url($twitter); ?>" target="_blank"><?= $twitter_icon ?></a>
                <?php endif; ?>

                <?php if ($ig = get_field('ig', get_the_ID())) : ?>
                    <a href="<?= esc_url($ig); ?>" target="_blank"><?= $ig_icon ?></a>
                <?php endif; ?>

                <?php if ($linkedin = get_field('linkedin', get_the_ID())) : ?>
                    <a href="<?= esc_url($linkedin); ?>" target="_blank"><?= $linkedin_icon ?></a>
                <?php endif; ?>

            </div>

        <?php endif; ?>


        <?php if ($type === 'service') : ?>

            <a href="#" class="btn btn-secondary">
                Book now
            </a>

        <?php endif; ?>

    </div>

</div>