<?php
    $title = get_field('title');
    $overview = get_field('overview');

    $list_icon = file_get_contents(get_template_directory() . '/assets/icons/list_icon.svg');
?>

<div class="section section-grid section-company">

    <div class="company-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company_img1.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company_img2.png" alt="">
    </div>

    <div class="section-content">
        <h2><?=$title;?></h2>
        <p><?=$overview;?></p>

        <?php if (have_rows('company_list')) : ?>
            <ul>
                <?php while (have_rows('company_list')) : the_row(); ?>
                <li><?= $list_icon; echo esc_html(get_sub_field('company_list_item')); ?></li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <div class="company-cta">
            <a href="#" class="btn btn-main">Book now</a>
            <a href="#" class="btn btn-secondary">Know more</a>
        </div>

    </div>

</div>