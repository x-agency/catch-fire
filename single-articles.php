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
        <div class="col-12">
            <h2 class="subtitle">OVERVIEW</h2>
        </div>
        <div class="col-12">
            <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
        </div>
        <?php
            //prepare the_content() to break into separate paragraphs

            $text_array = explode("\n", get_the_content() );
            $length = count($text_array);

            $text_first_half = array_slice($text_array, 0, $length / 2);
            $text_last_half = array_slice($text_array, $length / 2);

        ?>
        <div class="col-lg-6 pe-lg-5">
            <?php 
                // echo the content but not any empty spaces
                foreach($text_first_half as $text) {
                    if ( strlen($text) <= 1 ) {
                        continue;
                    } else {
                        echo '<p>' . $text . '</p>';
                    }
                }
            ?>
        </div>
        <div class="col-lg-6 ps-lg-5">
        <?php 
                // echo the content but not any empty spaces
                foreach($text_last_half as $text) {
                    if ( strlen($text) <= 1 ) {
                        continue;
                    } else {
                        echo '<p>' . $text . '</p>';
                    }
                }
            ?>
        </div>
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