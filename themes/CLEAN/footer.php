<?php
    $footer_text = get_field('footer_text', 'option');
?>

<footer class="site-footer">

    <div class="footer-container">

        <div class="footer-grid">
            <div class="footer-logo">
                <?php if ($footer_logo = get_theme_mod('footer_logo')) : ?>
                    <img src="<?= esc_url($footer_logo); ?>" alt="Footer Logo">
                <?php endif; ?>

                <p><?=$footer_text;?></p>
            </div>


            <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container' => 'false',
                    'menu_class' => 'footer-menu'
                ])
            ?>

            <?php echo do_shortcode('[wpforms id="148" title="true"]'); ?>

        </div>

        <hr class="footer-hr">
        <p class="absolute-footer">© <?php echo date('Y'); ?> CLEAN. All rights reserved.</p>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>