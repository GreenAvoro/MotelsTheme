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
<header>
    <img class="main-logo" src="<?=get_template_directory_uri()?>/assets/logo_white.png" alt="Roxburgh Motel">
    <a class="button" href="/book-now/">Book Now</a>
    
</header>

<div class="main-banner-container">
    <div class="main-banner">
        <p class="main-banner-text"><span>Central Otago,</span> New Zealand</p>
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
    if($q->have_posts()){
        ob_start();
        while($q->have_posts()){
            $q->the_post();
            ?>
            <a href="<?=get_the_permalink() ?>" class="card">
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
                        <?= the_content(); ?>
                    </div>
                    
                </div>
            </a>
            <?php
        }
        echo ob_get_clean();
    }
    ?>
</div>

<div class="services-section">
    <div class="services-grid">
        <div class="services-grid-panel">
            <div class="seperator"></div>
            <p class="subheader"><i class="fa-light fa-location-dot"></i>Out and about Roxburgh</p>
            <p class="header-1">Local Services</p>
            <p>Roxburgh has a good variety of local services: Pharmacy, Whole Foods store, Service Station, Cafes, Restaurants and a Medical Centre.</p>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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