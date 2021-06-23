<?php
    /*
    Template Name: Resources
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
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#latest-resources">
                <?php echo file_get_contents(__DIR__ . '/../img/latest.svg'); ?>
                <button class="btn">LATEST RESOURCES</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#books-and-publications">
                <?php echo file_get_contents(__DIR__ . '/../img/book.svg'); ?>
                <button class="btn">BOOKS & PUBLICATIONS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#catchfire-podcast">
                <?php echo file_get_contents(__DIR__ . '/../img/mic.svg'); ?>
                <button class="btn">CATCHFIRE PODCAST</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#flash-paper">
                <?php echo file_get_contents(__DIR__ . '/../img/flash-paper.svg'); ?>
                <button class="btn">FLASH PAPER</button>
            </a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/covers'); ?>

<?php get_template_part('template-parts/books-pub-books'); ?>

<section class="podcast">
    <img src="/wp-content/themes/catch-fire/img/podcast-hero.jpg" alt="" class="bg">
    <div class="content">
        <h2 class="subtitle">PODCAST</h2>
        <h2>catch<span>fire</span> daily</h2>
        <div class="podcast-links">
            <?php while(have_rows('podcast')) : the_row();
                $url = get_sub_field('url');
                $title = get_sub_field('title');
                $duration = get_sub_field('duration');

                ?>
            <a href="<?php echo $url; ?>" class="mb-3">
                <?php echo file_get_contents(__DIR__ . '/../img/play-btn.svg'); ?>
                <p><?php echo $title; ?><span>&nbsp;<?php echo $duration; ?></span></p>
            </a>
            <?php endwhile; ?>
        </div>
        <a href="" class="more mt-5">
            <p>Listen To More</p>
        </a>
    </div>
</section>

<section class="container flash-papers">
    <div class="row justify-content-center">
        <div class="col-12"><h2 class="subtitle">FLASH PAPERS</h2></div>
        <div class="col-12"><h2>We are all busy and at the same time, we want to be in the know about ideas and insights.</h2></div>
        <?php /*
        $i = 0;  
        while(have_rows('flash')) : the_row();
            $url = get_sub_field('url');
            $title = get_sub_field('title');
            $number = get_sub_field('number');

            ?>

            <?php if ($i == 0) : ?>
                <div class="col-lg-6 col-xl-4">
            <?php endif; ?>
                    <a href="<?php echo $url; ?>" class="mb-4">
                        <div class="flash-paper">
                            <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                            <p><?php echo get_row_index(); ?></p>
                        </div>
                        <p><?php echo $title; ?></p>
                    </a>
            <?php $i++; ?>
            <?php if ($i == 4 ) : ?>
                </div>
                <?php $i = 0; ?>
            <?php endif; ?>
        <?php endwhile; */?>
        
        <?php /*div class="col-lg-6 col-xl-4">
        <?php for($i = 55; $i >= 52; $i--) : ?>
            <a href="" class="mb-4">
                <div class="flash-paper">
                    <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                    <p><?php echo $i; ?></p>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
            </a>
        <?php endfor; ?>
        </div>
        <div class="col-lg-6 col-xl-4">
        <?php for($i = 51; $i >= 48; $i--) : ?>
            <a href="" class="mb-4">
                <div class="flash-paper">
                    <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                    <p><?php echo $i; ?></p>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
            </a>
        <?php endfor; ?>
        </div>
        <div class="col-lg-6 col-xl-4">
        <?php for($i = 47; $i >= 44; $i--) : ?>
            <a href="" class="mb-4">
                <div class="flash-paper">
                    <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                    <p><?php echo $i; ?></p>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
            </a>
        <?php endfor; ?>
        </div */?>

        <?php
            $posts = get_posts( array(
                'numberposts' => 12,
                'post_type'   => 'flash-papers'  
                ) 
            );   
            $i = wp_count_posts('flash-papers')->publish;
        ?>
        <?php foreach($posts as $post) : ?>
            <div class="col-lg-6 col-xl-4">
                <a href="<?php echo get_permalink($pub->ID); ?>" class="mb-4 justify-content-center">
                    <div class="flash-paper">
                        <p><?php echo $i; ?></p>
                    </div>
                    <p><?php echo get_the_title($post->ID); ?></p>
                </a>
            </div>
            <?php $i--; ?>
        <?php endforeach; ?>
    </div>
    <a href="/flash-papers" class="btn d-block" style="max-width: 250px;">View All Flash Papers</a>
</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>