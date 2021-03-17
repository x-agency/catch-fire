<?php
    /*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }
?>
<?php get_header(); ?>

<section class="hero">
    <h1>Contact</h1>
</section>

<section class="container">
    <div class="row">
        <div class="col-xl-5 offset-xl-1">
            <h2>GET IN TOUCH</h2>
            <p>Start the conversation and let’s spark change together.</p>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 10, 'title' => false, 'description' => false ) ); ?>
        </div>
        <div class="col-xl-5 contact">
            <img src="/wp-content/themes/catch-fire/img/contact.jpg" alt="">
            <p><a target="_blank" href="https://www.Facebook.com/catchfiredaily">fb— Facebook.com/<span>catchfiredaily</span></a></p>
            <p><a target="_blank" href="https://www.instagram.com/catchfiredaily/"> ig— @<span>catchfiredaily</span></a></p>
            <p><a target="_blank" href="https://www.linked.in/catchfiredaily"> in— linked.in/<span>catchfiredaily</span></a></p>
            <p class="phone"><a href="tel:8645551234">(864) 555-1234</a></p>
            <p><a href="mailto:hello@catchfiredaily.com">email— <span>hello@catchfiredaily.com</span></a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>