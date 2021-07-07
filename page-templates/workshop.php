<?php
    /*
    Template Name: Workshop
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    $id = get_the_id();
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>

<section class="container tools">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-3 offset-xl-2 text-center my-5">
            <a href="#speaking">
                <img src="/wp-content/themes/catch-fire/img/speaking.png" alt="">
                <button class="btn">SPEAKING EVENTS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center my-5">
            <a href="#coaching">
                <img src="/wp-content/themes/catch-fire/img/coaching.png" alt="">
                <button class="btn">COACHING WORKSHOPS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center my-5">
            <a href="#consulting">
                <img src="/wp-content/themes/catch-fire/img/consulting.png" alt="">
                <button class="btn">IN-DEPTH CONSULTING</button>
            </a>
        </div>
    </div>
</section>

<?php $speaking = get_field('speaking'); ?>
<section class="container speaking">
    <div class="anchor" id="speaking"></div>
    <div class="row">
        <div class="col-xl-6 text-xl-start text-center">
            <h3><?php echo $speaking['subtitle1']; ?></h3>
            <h4><?php echo $speaking['subtitle2']; ?></h4>
            <h2><?php echo $speaking['title']; ?></h2>
            <img class="mobile-only" src="<?php echo $speaking['image']; ?>" alt="">
            <p><?php echo $speaking['block']; ?></p>
            <p>Some past topics covered have included:</p>
            <p><?php echo $speaking['topics']; ?></p>
        </div>
        <div class="col-xl-6 text-center">
            <img class="desktop-only" src="<?php echo $speaking['image']; ?>" alt="">
            <a href="<?php echo $speaking['link']; ?>" class="btn mt-5"><?php echo $speaking['btn']; ?></a>
        </div>
    </div>
</section>

<?php $coaching = get_field('coaching'); ?>
<section class="container coaching">
    <div class="anchor" id="coaching"></div>
    <div class="row">
        <div class="col-xl-6 text-center order-2 order-xl-1">
            <img class="desktop-only" src="<?php echo $coaching['image']; ?>" alt="">
            <a href="<?php echo $coaching['link']; ?>" class="btn"><?php echo $coaching['btn']; ?></a>
        </div>
        <div class="col-xl-6 order-1 order-xl-2 text-xl-start text-center">
            <h3><?php echo $coaching['subtitle1']; ?></h3>
            <h4><?php echo $coaching['subtitle2']; ?></h4>
            <h2><?php echo $coaching['title']; ?></h2>
            <img class="mobile-only" src="<?php echo $coaching['image']; ?>" alt="">
            <p><?php echo $coaching['block']; ?></p>
            <p>Some past topics covered have included:</p>
            <p><?php echo $coaching['topics']; ?></p>
        </div>
    </div>
</section>

<?php $consulting = get_field('consulting'); ?>
<section class="container consulting">
    <div class="anchor" id="consulting"></div>
    <div class="row">
        <div class="col-xl-6 text-xl-start text-center">
            <h3><?php echo $consulting['subtitle1']; ?></h3>
            <h4><?php echo $consulting['subtitle2']; ?></h4>
            <h2><?php echo $consulting['title']; ?></h2>
            <img class="mobile-only" src="<?php echo $consulting['image']; ?>" alt="">
            <p><?php echo $consulting['block']; ?></p>
            <p>Some past topics covered have included:</p>
            <p><?php echo $consulting['topics']; ?></p>
        </div>
        <div class="col-xl-6 text-center">
            <img class="desktop-only" src="<?php echo $consulting['image']; ?>" alt="">
            <a href="<?php echo $consulting['link']; ?>" class="btn"><?php echo $consulting['btn']; ?></a>
        </div>
    </div>
</section>

<section class="testimonials">
    <h2>WHAT OTHERS ARE SAYING:</h2>
    <div class="carousel">
        <div class="track">
            <?php while(have_rows('testimonials')) : the_row();
                $quote = get_sub_field('quote');
                $author = get_sub_field('author');
                $i = get_row_index();
                ?>
                    <div class="slide">
                        <p class="quote"><?php echo $quote; ?></p>
                        <p class="author"><?php echo $author; ?></p>
                    </div>
                <?php endwhile; ?>
        </div>
        <?php if ($i >= 2) : //only create controls if there is more than one slide?>
            <div class="controls">
                <div class="prev">
                    <div class="arrow">
                        <?php echo file_get_contents(__DIR__ . '/../img/arrow.svg'); ?>
                    </div>
                </div>
                <div class="next">
                    <div class="arrow">
                        <?php echo file_get_contents(__DIR__ . '/../img/arrow.svg'); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
    //init variables
    $carousel = $('.carousel'),
    $track = $('.track'),
    slideCount = $('.slide').length,
    width = parseInt($('.slide').css("width")),
    carouselWidth = parseInt($('.carousel').css("width")),
    threshold = width / 4,
    dragStart = 0,
    dragEnd = 0,
    dragDistance = 0,
    count = 1,
    resizeId = '';

    //clone slides
    for (var i = 0; i < slideCount * 2; i++) {
        $('.slide').eq(slideCount - 1).clone().prependTo('.track');
    }
    //$('.controls').css("max-width", (slideCount * 25 + 100) + "px");

    //reinit variables on screen resize
    function resize() {
        threshold = width / 4;
        slideCountTotal = $('.slide').length;

        $('.carousel').css({"width":"100%", "overflow":"hidden"});
        carouselWidth = parseFloat($('.carousel').css("width"));

        $track.css({"display":"flex", "position":"relative"});        

        width = parseInt($('.slide').css("width"));
        $('.slide').css({"cursor":"grab", "max-width":carouselWidth});
        $('.slide *').css("pointer-events", "none");
        offsetWidth = $('.slide')[1].offsetLeft - $('.slide')[0].offsetLeft;

        if ($(window).width() > 1920) {
            threshold = 480;
            $('.carousel').css("width", "1459px");
            $('.track').css({"width":"1459px", "left":"-1459px"});
            $('.slide').css("max-width", "1459px");
            width = 1459;
        } else if ( $(window).width() > 1439 ) {
            width = parseInt($('.slide').css("width"));
            $('.track').css("width", (carouselWidth * (slideCountTotal / 3)) + "px");
            $('.track').css("left", "-" + width + "px");

            offsetWidth = $('.slide')[1].offsetLeft - $('.slide')[0].offsetLeft;
        } else if ( $(window).width() > 991 ) {
            width = parseInt($('.slide').css("width"));
            $('.track').css("width", (carouselWidth * slideCountTotal) + "px");
            $('.track').css("left", "-" + width + "px");

            offsetWidth = $('.slide')[1].offsetLeft - $('.slide')[0].offsetLeft;
        } else {
            width = parseInt($('.slide').css("width"));
            $('.track').css("width", (carouselWidth * slideCountTotal) + "px");
            $('.track').css("left", "-" + ((parseFloat($('.track').css("width")) / 3) + ((carouselWidth - width) / slideCountTotal)) + "px");

            offsetWidth = $('.slide')[1].offsetLeft - $('.slide')[0].offsetLeft;
        }
    } resize();

    //listen and wait until screen is done resizing
    $(window).on('resize', function() {
        clearTimeout(resizeId);
        resizeId = setTimeout(resize, 500);
    });  

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
            $('.slide').css('cursor', 'grabbing');
            dragDistance = dragPos();
        });
        $(document).on('mouseup touchend', function(){
            count = dragDistance / width;
            $('.slide').css('cursor', 'grab');
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
});
</script>