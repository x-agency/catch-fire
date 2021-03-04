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

<section class="container tools">
    <div class="row">
        <div class="col-12">
            <h2 class="subtitle">TOOLS FOR SUCCESS</h2>
            <h2>Resources and information for the modern-day leader.</h2>
        </div>
        <div class="col-lg-6 col-xl-3">
            <a href="#latest-resources">
                <?php echo file_get_contents(__DIR__ . '/../img/latest.svg'); ?>
                <button class="btn">LATEST RESOURCES</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3">
            <a href="#books-and-publications">
                <?php echo file_get_contents(__DIR__ . '/../img/book.svg'); ?>
                <button class="btn">BOOKS & PUBLICATIONS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3">
            <a href="#catchfire-podcast">
                <?php echo file_get_contents(__DIR__ . '/../img/mic.svg'); ?>
                <button class="btn">CATCHFIRE PODCAST</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3">
            <a href="#flash-paper">
                <?php echo file_get_contents(__DIR__ . '/../img/flash-paper.svg'); ?>
                <button class="btn">FLASH PAPER</button>
            </a>
        </div>
    </div>
</section>

<section class="container latest-resources">
    <div class="row">
        <div class="col-md-6 order-1">
            <h2 class="subtitle">LATEST RESOURCES</h2>
        </div>
        <div class="col-md-6 order-3 order-lg-2 text-end pe-5">
            <div class="prev">
                <img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt="">
            </div>
            <div class="next">
                <img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt="">
            </div>
        </div>
        <div class="col-12 order-2 order-lg-3">
            <div class="carousel">
                <div class="track">
                    <?php
                        //get_posts to retrieve an array of posts
                        $pubs = get_posts( array(
                                'numberposts' => 6,
                                'post_type'   => 'publications'      
                            ) 
                        );   
                    ?>
                    <?php //loop through each array object to get the thumbnail ?>
                    <?php foreach($pubs as $pub) : ?>
                    <div class="slide">
                        <img src="<?php echo get_the_post_thumbnail_url($pub->ID, '')?>" alt="">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container books-pubs">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-lg-6 col-xl-3">
            <img src="/wp-content/themes/catch-fire/img/book-come-back.png" alt="">
        </div>
        <div class="col-lg-6 col-xl-3" style="transform: scale(1.5); transform-origin: 50% 30%;">
            <img src="/wp-content/themes/catch-fire/img/book-volunteer-survival.png" alt="">
        </div>
        <div class="col-lg-6 col-xl-3">
            <img src="/wp-content/themes/catch-fire/img/book-volunteer-effect.png" alt="">
        </div>
        <div class="col-lg-6 col-xl-3">
            <img src="/wp-content/themes/catch-fire/img/book-table-influence.png" alt="">
        </div>
    </div>
</section>

<section class="podcast">
    <img src="/wp-content/themes/catch-fire/img/podcast-hero.jpg" alt="" class="bg">
    <div class="content">
        <h2 class="subtitle">PODCAST</h2>
        <h2>catch<span>fire</span> daily</h2>
        <div class="podcast-links">
            <a href="">
                <?php echo file_get_contents(__DIR__ . '/../img/play-btn.svg'); ?>
                <p>Title<span>&nbsp;[12:32]</span></p>
            </a>
            <a href="">
                <p><span></span></p>
            </a>
            <a href="">
                <p><span></span></p>
            </a>
            <a href="">
                <p><span></span></p>
            </a>
            <a href="">
                <p><span></span></p>
            </a>
        </div>
        <a href="">
            <p>LISTEN TO MORE</p>
            <?php // Arrow is after pseudo element of p tag ?>
        </a>
    </div>
</section>

<section class="container flash-papers">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-12"></div>
        <div class="col-lg-6 col-xl-4">
            <div class="flash-paper">
                <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                <p>55</p>
            </div>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>