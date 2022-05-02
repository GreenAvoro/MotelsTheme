<?php get_header() ;?>

<div class="content-container">
    <div class="seperator show"></div>
    <p class="single-title">
        <?= get_the_title(); ?>
    </p>
    <?php the_content(); ?>
    <a href="/book-now/" class="book-now">Book Now</a>
</div>

<?php get_footer(); ?>