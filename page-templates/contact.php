<?php
    /*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }
?>
<?php get_header(); ?>

<?php
	$social = get_field('social_media', 'option');
?>

<section class="hero">
    <h1>Contact</h1>
</section>

<section class="container">
    <div class="row">
        <div class="col-xl-5 offset-xl-1">
            <h2>GET IN TOUCH</h2>
            <p>Start the conversation and let’s spark change together.</p>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 11, 'title' => false, 'description' => false ) ); ?>
        </div>
        <div class="col-xl-5 contact">
            <img src="/wp-content/themes/catch-fire/img/contact.jpg" alt="">
            <p><a target="_blank" href="<?php echo $social['fb']; ?>">fb— Facebook.com/<span>catchfiredaily</span></a></p>
            <p><a target="_blank" href="<?php echo $social['insta']; ?>"> ig— @<span>catchfiredaily</span></a></p>
            <p><a target="_blank" href="<?php echo $social['linked']; ?>"> in— linked.in/<span>catchfiredaily</span></a></p>
            <p><a target="_blank" href="<?php echo $social['youtube']; ?>"> yt— youtube.com/<span>catchfiredaily</span></a></p>
            <p class="phone"><a href="tel:404-913-6703">(404) 913-6703</a></p>
            <p><a href="mailto:hello@catchfiredaily.com">email— <span>hello@catchfiredaily.com</span></a></p>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>