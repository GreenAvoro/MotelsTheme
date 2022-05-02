<?= wp_footer(); ?>

<footer class="">
    <div class="footer-grid">
        <img class="footer-logo" src="<?=get_template_directory_uri()?>/assets/logo_white.png" alt="Roxburgh Motels">
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
            <p>0238540285</p>
            <p>something@gmail.com</p>
            <p>12 West Road, Roxburgh, New Zealand 0123</p>
        </div>
    </div>
</footer>
</body>
</html>