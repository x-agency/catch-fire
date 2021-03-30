<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="hero">
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
</section>

<section id="goal" class="home">
    <div class="page-divider"></div>
        <div class="container goal--wrapper">
            <div class="row goal--inner">
                <div class="number">01 —</div>
                <div class="subtitle">the goal</div>
                <div class="title">We help leaders to engage their team members, boost brand likability with guests, and ignite a culture that can’t be extinguished. This is CatchFire.</div>
            </div>
        </div>
    <div class="page-divider"></div>
</section>
<section id="leaders" class="home">
    <div class="container leaders--wrapper">
        <div class="row leaders--inner">
            <div class="col-xl-5 leaders--inner__left">
                <div class="title__small">Remarkable organizations and guest experiences begin right here—with you.</div>
                <p>Being a remarkable organization can be challenging. You and your team want to get it right. And that’s where we come in. </p>
                <p>Imagine if a few simple and intentional decisions gave your organization permission to create an experience for guests and team members alike. Identifying the feeling you want each person to feel can help you create an experience they will not only come back for but share with other people.</p>
                <p>This is how you Catch Fire.</p>
                <img src="/wp-content/themes/catch-fire/img/about-img-2.jpg" alt="">
            </div>
            <div class="col-xl-5 offset-lg-2 leaders--inner__right">
                <div class="number">— 02</div>
                <div class="subtitle">for modern-day leaders</div>
                <img src="/wp-content/themes/catch-fire/img/home-img-1.jpg" alt="">
            </div>
        </div>
        <div class="row icon-wrapper">
            <div class="icon">
                <div class="icon-inner">
                    <img src="/wp-content/themes/catch-fire/img/guests.svg" alt="">
                    <div class="icon-text">guest<br>experience</div>
                </div>
            </div>
            <div class="icon">
                <div class="icon-inner">
                    <img src="/wp-content/themes/catch-fire/img/team.svg" alt="">
                    <div class="icon-text">team<br>culture</div>
                </div>
            </div>
            <div class="icon">
                <div class="icon-inner">
                    <img src="/wp-content/themes/catch-fire/img/growth.svg" alt="">
                    <div class="icon-text">organizational<br>growth</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page-divider"></div>






<?php get_template_part('template-parts/covers'); ?>

<section id="contact">
    <div class="container">
        <div class="row contact--wrapper">
            <div class="col-12 title">
                get updates direct to your inbox:
            </div>
            <div class="col-12 form"></div>
            <div class="col-12 info">*no spam, Just valuable resources for modern-day leaders.</div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>