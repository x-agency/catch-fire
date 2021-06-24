<?php
    /*
    Template Name: Flash Papers
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>

<section class="container" style="max-width: 900px;">
   <div class="row">
        <div class="col-12">
            <h1><?php the_title(); ?><span style="float: right;"><?php echo get_the_date(); ?></span></h1>
            <?php the_content(); ?>
        </div>
        <?php while( have_rows('linked_articles') ) : the_row();
                $link = get_sub_field('link');
                $title = get_sub_field('title');
                $body = get_sub_field('body');
                $source = get_sub_field('source');
                $time = get_sub_field('time');
            ?>
            <a class="col-12 card" href="<?php echo $link; ?>" target="_blank">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $body; ?></p>
                <p class="source"><?php echo $source; ?> / <span><?php echo $time; ?></span></p>
            </a>
        <?php endwhile; ?>
   </div>
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