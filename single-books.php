<?php
    /*
    Template Name: Books and Publications
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>

<section class="container">
    <div class="row">
        <div class="col-lg-6 content">
            <h2 class="subtitle">OVERVIEW</h2>
            <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
            <p><?php echo strip_tags( get_the_content() ); ?></p>
        </div>
        <div class="col-lg-6 buy-now">
            <h2 class="subtitle">BUY NOW:</h2>
            <a href="" class=""><?php echo file_get_contents(__DIR__ . '/img/baker-book-house.svg'); ?></a>
            <a href="" class=""><img src="/wp-content/themes/catch-fire/img/amazon.png" alt=""></a>
            <a href="" class="btn">GET FREE CHAPTER</a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>