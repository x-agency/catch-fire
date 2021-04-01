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
        <div class="carousel">
            <div class="track">
                <div class="quote slide">“Jason’s wisdom and experience have been invaluable in developing our guest services. He is simply the best at what he does.”</div>
            </div>
            <div class="controls">
                <div class="dots"></div>
            </div>
        </div>
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

<script>
jQuery(document).ready(function($) {
    //$('.slide').clone().appendTo('.track');
    //$('.slide').clone().appendTo('.track');
    /*$('.slide:last-child').addClass('last').prependTo('.track');
    $('.slide:nth-child(1)').clone().appendTo('.track').addClass('two');
    $('.slide:nth-child(1)').clone().appendTo('.track').addClass('three');
    $('.slide:nth-child(1)').clone().appendTo('.track').addClass('four');
    $('.slide:nth-child(1)').clone().appendTo('.track').addClass('five');*/

    $carousel = $('.carousel'),
    $track = $('.track'),
    slideCount = $('.slide').length,
    width = parseFloat($('.slide').css("width")),
    threshold = width / 4,
    dragStart = 0,
    dragEnd = 0,
    count = 1,
    $item = $('.slide');

    $carousel.css("overflow", "hidden");
    $track.css("left", ( ( slideCount * -1 ) + "00%")).css({"display":"flex", "position":"relative"});
    for (var i = 0; i < slideCount; i++) {
        $('.controls .dots').append('<span class="dot"></span>');
        $('.slide').eq(slideCount - 1).clone().prependTo('.track');
        $('.slide').eq(slideCount - 1).clone().appendTo('.track');
    }

    $('.dot').eq(0).addClass('active');
    $('.dots').css("max-width", (slideCount * 25) + "px");
    $('.controls').css("max-width", (slideCount * 25 + 100) + "px");
    //$track.css("width", (100 * ( slideCount * 2 ) + "vw")); dont set width, since track should be set to 100vw, and slide should be set to flex-shrink: 0 so that it obeys whatever width you set within display flex

    $('.slide').on('mousedown touchstart', function(e) {
        if ($track.hasClass('transition')) return; //if the carousel is in motion, prevent new movement until complete
        if (e.type == 'touchstart') dragStart = e.originalEvent.touches[0].pageX; 
        if (e.type == 'mousedown') dragStart = e.pageX;
        $target = $(e.target);
        $carousel.on('mousemove touchmove', function(e){ 
            grabbed = true;
            if (e.type == 'touchmove') dragEnd = e.originalEvent.touches[0].pageX;
            if (e.type == 'mousemove') dragEnd = e.pageX;
            $track.css('transform','translateX('+ dragPos() +'px)');
            $item.css('cursor', 'grabbing');
            dragDistance = dragPos();
        });
        $(document).on('mouseup touchend', function(){
            count = dragDistance / width;
            $item.css('cursor', 'grab');
            if (dragPos() > threshold) { return shiftSlide(1) } //to the left
            if (dragPos() < -threshold) { return shiftSlide(-1) } //to the right
            count = 0;
            shiftSlide(0);
        });
    });

    function dragPos() {
        return dragEnd - dragStart;
    }

    function shiftSlide(direction) {
        if($track.hasClass('transition')) return;
        dragEnd = dragStart;
        count = direction === -1 ? Math.floor(count) : Math.ceil(count);
        $(document).off('mouseup touchend');
        $carousel.off('mousemove touchmove');
        $track.addClass('transition').css('transform','translateX(' + (width * count) + 'px)');
        if (direction >= 1) { // to the left
            while (count > 0) {
                if ($('.dot.active').is(".dot:first-child")) {
                    $('.dot.active').removeClass('active')
                    $('.dot').last().addClass('active');
                } else {
                    $('.dot.active').removeClass('active').prev().addClass('active');
                }
                count--;
            }
        } else if (direction <= -1) { //to the right
            while (count < 0) {
                if ($('.dot.active').is(".dot:last-child")) {
                    $('.dot.active').removeClass('active')
                    $('.dot').first().addClass('active');
                } else {
                    $('.dot.active').removeClass('active').next().addClass('active');
                }
                count++;
            }
        }
        count = direction;
        setTimeout(function(){
            if (direction >= 1) { // to the left
                while (count > 0) {
                    $track.find('.slide:first-child').before($track.find('.slide:last-child'));
                    count--;
                }
            } else if (direction <= -1) { //to the right
                while (count < 0) {
                    $track.find('.slide:last-child').after($track.find('.slide:first-child'));
                    count++;
                }
            }
            $track.removeClass('transition')
            $track.css('transform','translateX(0px)');
        }, 600);
    }

    $('.prev').click(function() {
        count = 1;
        return shiftSlide(1);
    });

    $('.next').click(function() {
        count = -1;
        return shiftSlide(-1);
    });

    $('.dot').click(function() {
        if($(this).hasClass('active')) return;
        count = $('.active').index() - $(this).index();
        //console.log(count);
        if ( count < ( ( $('.dot').length / 2 ) * -1) ) count = count + $('.dot').length; 
        if ( count > ( $('.dot').length / 2 ) ) count = ($('.dot').length - count) * -1;
        if ( count <= ( ( $('.dot').length - 1 ) * -1 ) ) count = 1;
        if ( count >= ( $('.dot').length - 1 ) ) count = -1;
        //console.log(count);
        return shiftSlide(count);
    });
});
</script>
<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>