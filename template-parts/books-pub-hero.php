<section id="books-pub-hero">
    <img src="/wp-content/themes/catch-fire/img/books-hero.jpg" alt="" class="bg">
    <h1><?php single_post_title(); ?></h1>
    <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="featured">
    <?php endif; ?>
    <div class="arrow">
        <?php echo file_get_contents(__DIR__ . '/../img/arrow.svg'); ?>
    </div>
</section>