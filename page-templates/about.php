<?php
   /*
    Template Name: About
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<?php
$hero = get_field('hero');
?>
<section id="about-hero" class="about">
    <img src="/wp-content/themes/catch-fire/img/about-header.jpg" alt="" class="bg">
    
    <div class="hero-inner">
        <h1><?php echo $hero['title']; ?></h1>
        <div class="divider"></div>
        <div class="subtitle"><?php echo $hero['subtitle']; ?></div>
        <div class="title"><?php echo $hero['body']; ?></div>
        <div class="divider"></div>
        <div class="quote">“Jason’s wisdom and experience have been invaluable in developing our guest services. He is simply the best at what he does.”</div>
    </div>
</section>

<section id="about-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 intro__left">
                <?php
                    $intro = get_field('intro');
                ?>
                <div class="title__small"><?php echo $intro['title']; ?></div>
                <?php echo $intro['body']; ?>
                <img src="<?php echo $intro['image']; ?>" alt="">
            </div>
            <div class="col-lg-5 intro__right">
                <?php
                    $about = get_field('about');
                ?>
                <div class="pre-title">CATCHFIRE</div>
                <div class="subtitle">fuel the experience</div>
                <img src="<?php echo $about['image']; ?>" alt="">
                <div class="title"><span>About</span> Dr. Jason Young—</div>
                <?php echo $about['body']; ?>
            </div>
        </div>
    </div>
</section>

<section id="partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner-title">Trusted By:</div>
                <img src="/wp-content/themes/catch-fire/img/logos-row.jpg" alt="">
            </div>
        </div>
</section>
<section id="tools">
    <div class="container">
        <div class="page-divider"></div>
        <?php
            //get_posts to retrieve an array of posts
            /*$training = get_posts( array(
                    'numberposts' => 4,
                    'post_type'   => 'publications'      
                ) 
            );*/

            $books = get_posts( array(
                'numberposts' => 4,
                'post_type'   => 'books'      
            ) 
        );   
        ?>
        <div class="row tools--wrapper">
            <div class="col-12">
                <div class="subtitle subtitle__red">TOOLS FOR LEADERS</div>
            </div>
            <div class="col-lg-4 tools--column">
                <div class="title">Training</div>
                <?php while ( have_rows('training') ) : the_row(); 
                        $text = get_sub_field('link_text');
                        $url = get_sub_field('link_url');
                    ?>
                        <div class="tools--item">
                            <a href="<?php echo $url;?>"><?php echo $text;?></a>
                        </div>
                <?php endwhile; ?>
                <!--div class="tools--item">
                    <a href="<?php echo $training['link_url'];?>">Team Workshops</a>
                </div>
                <div class="tools--item">
                    <a href="<?php echo $training['link_url'];?>">One-on-One Coaching<br><span>*virtual or in person</span></a>
                </div-->
            </div>
            <div class="col-lg-4 tools--column">
                <div class="title">Books</div>
                <?php foreach($books as $book) : ?>
                    <div class="tools--item">
                        <a href="<?php echo get_permalink($book->ID);?>"><?php echo $book->post_title;?></a>
                    </div>
                <?php endforeach; ?>
                <!--div class="tools--item">
                    <a href="">The Volunteer Effect</a>
                </div>
                <div class="tools--item">
                    <a href="">The Volunteer Survivial Guide</a>
                </div>
                <div class="tools--item">
                    <a href="">The Table of Influcence</a>
                </div-->
            </div>
            <div class="col-lg-4 tools--column">
                <div class="title">Resources</div>
                <div class="tools--item">
                    <a href="/resources-for-success/#latest-resources">Leader Resources</a>
                </div>
                <div class="tools--item">
                    <a href="/resources-for-success/#catchfire-podcast">CatchFire Podcast</a>
                </div>
                <div class="tools--item">
                    <a href="/resources-for-success/#flash-paper">Flash Paper</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>