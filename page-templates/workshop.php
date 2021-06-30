<?php
    /*
    Template Name: Workshop
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    $id = get_the_id();
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>

<section class="container tools">
    <div class="row">
        <div class="col-lg-6 col-xl-3 offset-xl-2 text-center">
            <a href="#latest-resources">
                <img src="/wp-content/themes/catch-fire/img/speaking.png" alt="">
                <button class="btn">SPEAKING EVENTS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#books-and-publications">
                <img src="/wp-content/themes/catch-fire/img/coaching.png" alt="">
                <button class="btn">COACHING WORKSHOPS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#podcast">
                <img src="/wp-content/themes/catch-fire/img/consulting.png" alt="">
                <button class="btn">IN-DEPTH CONSULTING</button>
            </a>
        </div>
    </div>
</section>

<?php $speaking = get_field('speaking'); ?>
<section class="container speaking">
    <div class="row">
        <div class="col-xl-6">
            <h3><?php echo $speaking['subtitle1']; ?></h3>
            <h4><?php echo $speaking['subtitle2']; ?></h4>
            <h2><?php echo $speaking['title']; ?></h2>
            <p><?php echo $speaking['block']; ?></p>
            <p>Some past topics covered have included:</p>
            <p><?php echo $speaking['topics']; ?></p>
        </div>
        <div class="col-xl-6">
            <img src="<?php echo $speaking['image']; ?>" alt="">
            <a href="<?php echo $speaking['link']; ?>" class="btn"><?php echo $speaking['btn']; ?></a>
        </div>
    </div>
</section>

<?php $coaching = get_field('coaching'); ?>
<section class="container coaching">
    <div class="row">
        <div class="col-xl-6">
            <img src="<?php echo $coaching['image']; ?>" alt="">
            <a href="<?php echo $coaching['link']; ?>" class="btn"><?php echo $coaching['btn']; ?></a>
        </div>
        <div class="col-xl-6">
            <h3><?php echo $coaching['subtitle1']; ?></h3>
            <h4><?php echo $coaching['subtitle2']; ?></h4>
            <h2><?php echo $coaching['title']; ?></h2>
            <p><?php echo $coaching['block']; ?></p>
            <p>Some past topics covered have included:</p>
            <p><?php echo $coaching['topics']; ?></p>
        </div>
    </div>
</section>

<?php $consulting = get_field('consulting'); ?>
<section class="container consulting">
    <div class="row">
        <div class="col-xl-6">
            <h3><?php echo $consulting['subtitle1']; ?></h3>
            <h4><?php echo $consulting['subtitle2']; ?></h4>
            <h2><?php echo $consulting['title']; ?></h2>
            <p><?php echo $consulting['block']; ?></p>
            <p>Some past topics covered have included:</p>
            <p><?php echo $consulting['topics']; ?></p>
        </div>
        <div class="col-xl-6">
            <img src="<?php echo $consulting['image']; ?>" alt="">
            <a href="<?php echo $consulting['link']; ?>" class="btn"><?php echo $consulting['btn']; ?></a>
        </div>
    </div>
</section>

<div class="carousel testimonials">
    <h2>WHAT OTHERS ARE SAYING:</h2>
    <div class="track">
        <?php while(have_rows('testimonials')) : the_row();
            $quote = get_sub_field('quote');
            $author = get_sub_field('author');
            ?>
                <div class="slide">
                    <p class="quote"><?php echo $quote; ?></p>
                    <p class="author"><?php echo $author; ?></p>
                </div>
            <?php endwhile; ?>
    </div>
    <div class="controls">
        <div class="prev"></div>
        <div class="next"></div>
    </div>
</div>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        
    });
</script>