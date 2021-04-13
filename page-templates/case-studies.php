<?php
   /*
    Template Name: Case Studies
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>

<section>
    <div class="sidebar">
        <?php while( have_rows('case_study') ) : the_row();
            $image = get_sub_field('sidebar_image');
        ?>
            <div class="study active">
                <img src="<?php echo $image;?>" alt="">
            </div>
        <?php endwhile; ?>
    </div>
    <?php while( have_rows('case_study') ) : the_row(); 
        $image = get_sub_field('feat_image');
        $excerpt = get_sub_field('excerpt');
        $overview = get_sub_field('overview');
        $client = get_sub_field('client');
        $challenge = get_sub_field('challenge');
        $solution = get_sub_field('solution');
        $result = get_sub_field('result');
    ?>
        <div class="content active">
            <h2 class="subtitle">CASE STUDY</h2>
            <img src="<?php echo $image;?>" alt="">
            <h2><?php echo $excerpt; ?></h2>

            <h2 class="subtitle">OVERVIEW</h2>
            <?php echo $overview; ?>

            <h2 class="subtitle">CLIENT:</h2>
            <?php echo $client; ?>

            <h2 class="subtitle">CHALLENGE:</h2>
            <?php echo $challenge; ?>

            <h2 class="subtitle">SOLUTION:</h2>
            <?php echo $solution; ?>

            <h2 class="subtitle">RESULT:</h2>
            <?php echo $result; ?>
        </div>
    <?php endwhile; ?>
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

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>