<?= get_header() ?>

<?php if(current_user_can('administrator')): ?>
<style>
    header {
        top: 32px;
    }
    header * {
        top: 32px;
    }
    @media only screen and (max-width: 1000px) {
        header {
            top: 0px;
        }
        header * {
            top: 0px;
        }
    }
</style>
<?php endif; ?>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>



<header>
    <img class="main-logo" src="<?=get_template_directory_uri()?>/assets/logo_white.png" alt="Roxburgh Motel">
    <a class="button" href="/book-now/">Book Now</a>
    
</header>

<div class="main-banner-container">
    <div class="main-banner">
        <p class="main-banner-text"><span>Central Otago,</span> New Zealand</p>
        <br>
        <div>
            <div class="banner-grid">
                <i class="fa-solid fa-location-dot"></i>
                <a href="https://www.google.com/maps/place/Roxburgh+Motels/@-45.5429898,169.3159785,15z/data=!4m8!3m7!1s0x0:0xa0c44b135f4a534b!5m2!4m1!1i2!8m2!3d-45.5429932!4d169.3159772">1 Liddle Street, Roxburgh 9500</a>
            </div>
            <div class="banner-grid">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:info@roxburghmotels.co.nz">info@roxburghmotels.co.nz</a>
            </div>
            <div class="banner-grid">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <a href="tel:034468093">(03) 4468093</a>
                    <a href="tel:0210339314">(021) 0339314</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <img src="<?= $image[0] ?>"    alt="" class="header-img">
<?php endif; ?>


<div class="card-grid">

    <?php
    $args = [
        'post_type'     => 'post',
        'post_status'   => 'publish',
        'posts_per_page'=>  6,
        'category_name' => 'rooms'

    ];
    $q = new WP_Query($args);
    $i = 0;
    if($q->have_posts()){
        ob_start();
        while($q->have_posts()){
            $i++;
            $q->the_post();
            ?>
            <a href="<?=get_the_permalink() ?>" class="card" <?= $i > 3 ? 'data-aos="fade-up" data-aos-delay="'.($i*100).'"' : '' ?>>
                <div class="card-img">
                    <?php if(get_the_post_thumbnail()){
                        echo get_the_post_thumbnail();
                    }else{ ?>
                        <div class="placeholder-img" style=" width: 100%; background: #ddd; display: flex; justify-content: center; align-items: center; color: #bbb">
                            <p>No Image</p>
                        </div>
                    <?php } ?>
                </div>
                <div class="card-content">
                    <div class="seperator"></div>
                    <p class="card-header"><?= get_the_title() ?></p>
                    <div class="card-desc">
                        <?= the_excerpt(); ?>
                    </div>
                    
                </div>
            </a>
            <?php
        }
        echo ob_get_clean();
    }
    ?>

</div>
<div class="special-button-container">
    <a href="/book-now/" class="special-button">See all availability</a>
</div>
<div class="banner-grid-container">
    <h3>Contact Us</h3>
    <div class="banner-grid grid-2">
        <i class="fa-solid fa-location-dot"></i>
        <a href="https://www.google.com/maps/place/Roxburgh+Motels/@-45.5429898,169.3159785,15z/data=!4m8!3m7!1s0x0:0xa0c44b135f4a534b!5m2!4m1!1i2!8m2!3d-45.5429932!4d169.3159772">1 Liddle Street, Roxburgh 9500</a>
    </div>
    <div class="banner-grid grid-2">
        <i class="fa-solid fa-envelope"></i>
        <a href="mailto:info@roxburghmotels.co.nz">info@roxburghmotels.co.nz</a>
    </div>
    <div class="banner-grid grid-2">
        <i class="fa-solid fa-phone"></i>
        <div>
            <a href="tel:034468093">(03) 4468093</a>
            <a href="tel:0210339314">(021) 0339314</a>
        </div>
    </div>
</div>

<div class="services-section" data-aos="fade-up">
    <div class="services-grid">
        <div class="services-grid-panel">
            <div class="seperator"></div>
            <p class="subheader"><i class="fa-light fa-location-dot"></i>Out and about Roxburgh</p>
            <p class="header-1">Local Services</p>
            <p>Roxburgh has a good variety of local services: Pharmacy, Whole Foods store, Service Station, Cafes, Restaurants and a Medical Centre.</p>
            <br>
            <p>We're also home to the famous Jimmy's Pies.</p>
        </div>
        <div class="services-img-grid">
            <img src="<?= get_template_directory_uri()?>/assets/services.jpg" alt="">
            <img src="<?= get_template_directory_uri()?>/assets/services_2.jpg" alt="">

        </div>
    </div>
</div>

<div class="activities-section">
    <div class="activities-section-container">
        <p class="subheader"><i class="fa-light fa-person-biking"></i>Things to do</p>
        <p class="header-1">Activities around Roxburgh</p>
        <p>
        The warmer climate of the sheltered Teviot Valley, flanked by rocky tussock-clad high country, create a lush valley floor of green and gold farmland and orchards. Roxburgh is a small town in the Teviot Valley, blessed with world-class fruit, produce, farming and salt-of-the-earth folk who care deeply for their community, work together and always have time for a yarn.
        <br><br>
        Boasting two of the nation's Great Rides (the Roxburgh Gorge and Clutha Gold trails) and an abundance of walking and back country mountain biking trails close by, you???ll need some good grub to fuel your adventures. Fortunately, Roxburgh is home to the family run and legendary Jimmy's Pies. The recipe is kept under wraps; their reputation runs wild.
        </p>
        <div class="activities-grid">
            <div class="activities-grid-column">
                <div class="activity">
                    <img src="<?=get_template_directory_uri()?>/assets/activity1.jpeg" alt="">
                    <div class="activity-content-container">
                        <p>Bike Riding</p>
                    </div>
                </div>
            </div>
            <div class="activities-grid-column">
                <div class="activity">
                    <img src="<?=get_template_directory_uri()?>/assets/activity2.jpg" alt="">
                    <div class="activity-content-container">
                        <p>Walking Trails</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= get_footer() ?>