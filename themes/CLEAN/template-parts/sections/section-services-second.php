<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $overview = get_field('overview');
    $cta_text = get_field('cta_text');
?>

<div class="section section-grid section-services">

    <div class="section-content">
        <h5><?=$subtitle;?></h5>
        <h2><?=$title;?></h2>
        <p><?=$overview;?></p>
        <a href="#" class="btn btn-main"><?=$cta_text;?></a>
    </div>

    <div class="services-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services_img1.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services_img2.png" alt="">
    </div>

</div>