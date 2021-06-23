<?php
    /*
    Template Name: Flash Papers Archive
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>


<section class="container" style="max-width: 900px">
    <?php
        //get_posts to retrieve an array of posts
        $posts = get_posts( array(
                'post_type'   => 'flash-papers'      
            ) 
        );   
    ?>
    <?php //loop through each array object to get the thumbnail ?>
    <?php foreach($posts as $post) : ?>
        <div class="row">
            <div class="col-12 d-xl-flex flex-column justify-content-xl-center text-xl-start text-center">
                <h2><?php echo get_the_title($post->ID); ?></h2>
                <p><?php echo get_the_excerpt($post->ID); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>