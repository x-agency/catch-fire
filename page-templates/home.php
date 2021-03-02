<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<div id="hero">
    <div class="hero-wrapper">
        <div class="hero-title"><?php
				echo file_get_contents( get_theme_file_uri( '/img/jason.svg' ) );
				?></div>
        <div class="hero-text">Speaking, Writing, <br>Coaching, and ConsuLting<br> for modern-day leaders</div>
        <div class="hero-scroll">
          <div class="scroll-arrow"><img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt=""></div>
          <div class="scroll-text">scroll</div>
        </div>
    </div>
</div>
<div style="min-height: 500px;">

</div>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>