<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $overview = get_field('overview');
    $cta_text_1 = get_field('cta_text_1');
    $cta_text_2 = get_field('cta_text_2');
?>

<div class="section section-grid section-hero">

    <div class="section-content">
        <h5><?=$subtitle;?></h5>
        <h1><?=$title;?></h1>
        <p><?=$overview;?></p>

        <div class="section-cta">
            <a href="#" class="btn btn-main"><?=$cta_text_1;?></a>
            <a href="#" class="btn btn-secondary"><?=$cta_text_2;?></a>
        </div>
    </div>

</div>