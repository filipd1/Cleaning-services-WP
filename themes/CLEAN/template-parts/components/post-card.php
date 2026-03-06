<div class="post-card">
    <?php the_post_thumbnail(); ?>

    <div class="post-card-content">
        <div class="post-meta">
            <span class="post-author"><?php the_author(); ?></span>
            <span class="post-date"><?php echo get_the_date(); ?></span>
        </div>

        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>

        <a href="<?php the_permalink(); ?>" class="btn btn-secondary">
            Read more
        </a>
    </div>

</div>