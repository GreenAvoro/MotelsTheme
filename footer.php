<?= wp_footer(); ?>

<footer class="">
    <div class="footer-grid">
        <a href="/">
            <img class="footer-logo" src="<?=get_template_directory_uri()?>/assets/logo_white.png" alt="Roxburgh Motels">
        </a>
        <span></span>
        <div class="footer-col">
            <p class="header-2">Units</p>
            <?php
            $args = [
                'post_type' => 'post',
                'category_name' => 'rooms'
            ];

            $q = new WP_Query($args);
            if($q->have_posts()): while($q->have_posts()): $q->the_post();?>
                <a href="<?=the_permalink()?>"><?= the_title() ?></a>
            <?php endwhile; endif; ?>
        </div>
        <div class="footer-col">
            <p class="header-2">Contact</p>
            <a href="tel:034468093">(03) 4468093</a>
            <a href="tel:0210339314">(021) 0339314</a>
            <a href="mailto:info@roxburghmotels.co.nz">info@roxburghmotels.co.nz</a>
            <a href="https://www.google.com/maps/place/Roxburgh+Motels/@-45.5429898,169.3159785,15z/data=!4m8!3m7!1s0x0:0xa0c44b135f4a534b!5m2!4m1!1i2!8m2!3d-45.5429932!4d169.3159772">1 Liddle Street, Roxburgh 9500</a>
        </div>
    </div>
</footer>
</body>
</html>