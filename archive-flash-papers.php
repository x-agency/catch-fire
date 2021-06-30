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
        $i = wp_count_posts('flash-papers')->publish;
    ?>
    <?php //loop through each array object to get the thumbnail ?>
    <?php foreach($posts as $post) : ?>
        <div class="row">
            <a href="<?php echo get_permalink($post->ID);?>">
                <div class="col-12 d-xl-flex flex-column justify-content-xl-center text-xl-start text-center mb-4">
                    <h2><span><?php echo $i; ?></span>&nbsp;<?php echo get_the_title($post->ID); ?></h2>
                    <p><?php echo get_the_excerpt($post->ID); ?></p>
                </div>
            </a>
        </div>
        <?php $i--; ?>
    <?php endforeach; ?>
</section>

<section id="contact">
    <div class="container">
        <div class="row contact--wrapper">
            <div class="col-12 title">
                get updates direct to your inbox:
            </div>
            <div class="col-12 form">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 10, 'title' => false, 'description' => false ) ); ?>
            </div>
            <div class="col-12 info">*no spam, Just valuable resources for modern-day leaders.</div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>