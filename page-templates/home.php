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
          <a href="#goal">
            <div class="scroll-arrow"><img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt=""></div>
            <div class="scroll-text">scroll</div>
          </a>
        </div>
    </div>
</section>

<?php
$goal = get_field('goal');
?>
<section id="goal" class="home">
    <div id="goal-sec"class="page-divider"></div>
        <div class="container goal--wrapper">
            <div class="row goal--inner">
                <div class="number">01 —</div>
                <div class="subtitle"><?php echo $goal['title']; ?></div>
                <div class="title"><?php echo $goal['body']; ?></div>
            </div>
        </div>
    <div class="page-divider"></div>
</section>

<?php
$leaders = get_field('leaders');
?>
<section id="leaders" class="home">
    <div class="container leaders--wrapper">
        <div class="row leaders--inner">
            <div class="col-xl-5 leaders--inner__left">
                <div class="title__small"><?php echo $leaders['title']; ?></div>
                <?php echo $leaders['body']; ?>
                <!--img src="/wp-content/themes/catch-fire/img/about-img-2.jpg" alt=""-->
            </div>
            <div class="col-xl-5 offset-lg-2 leaders--inner__right">
                <div class="number">— 02</div>
                <div class="subtitle">for modern-day leaders</div>
                <img src="<?php echo $leaders['image']; ?>" alt="">
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
            <div class="col-12 form">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 10, 'title' => false, 'description' => false ) ); ?>
            </div>
            <div class="col-12 info">*no spam, Just valuable resources for modern-day leaders.</div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>