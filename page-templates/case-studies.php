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
    <div class="sidebar carousel">
        <div class="track">
            <?php while( have_rows('case_study') ) : the_row();
                $image = get_sub_field('sidebar_image');
            ?>
                <div class="slide">
                    <div class="study <?php if ( get_row_index() == 1) echo 'active'; ?>" id="study-<?php echo get_row_index(); ?>">
                        <img src="<?php echo $image;?>" alt="">
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
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
    </div>
    <div class="case">
        <?php while( have_rows('case_study') ) : the_row(); 
            $image = get_sub_field('feat_image');
            $excerpt = get_sub_field('excerpt');
            $overview = get_sub_field('overview');
            $client = get_sub_field('client');
            $challenge = get_sub_field('challenge');
            $solution = get_sub_field('solution');
            $result = get_sub_field('result');
        ?>
            <div class="content <?php if ( get_row_index() == 1) echo 'active'; ?>" data-study="study-<?php echo get_row_index(); ?>">
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

        <div class="controls my-5 pt-5">
            <div class="prev">
                <div class="arrow">
                    <?php echo file_get_contents(__DIR__ . '/../img/arrow.svg'); ?>
                </div>
                <p>PREV</p>
            </div>
            <div class="next">
                <p>NEXT</p>
                <div class="arrow">
                    <?php echo file_get_contents(__DIR__ . '/../img/arrow.svg'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/contact') ?>
<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>


<script>
jQuery(document).ready(function($) {

    $height = $('#books-pub-hero img').height();

    function activateStudy(target) {
        $('.study, .content').removeClass('active');
        target.addClass('active');
        $('.content[data-study="' + target.attr("id") + '"').addClass('active');
        window.scrollTo(0, $height);
    }

    if ( $(window).width() < 1200 ) {
        $carousel = $('.carousel'),
        $track = $('.track'),
        slideCount = $('.slide').length,
        width = $('.slide').width(),
        carouselWidth = $('.carousel').width(),
        threshold = width / 4;
        dragStart = 0,
        dragEnd = 0,
        count = 1,
        grabbed = false;

        $('.carousel').css("overflow", "hidden");
        $('.track').css("left", "-50vw").css({"display":"flex", "position":"relative"});
        for (var i = 0; i < slideCount; i++) {
            $('.slide').eq(slideCount - 1).clone().prependTo('.track');
        }    

        $('.slide').on('mousedown touchstart', function(e) {
            if ($track.hasClass('transition')) return; //if the carousel is in motion, prevent new movement until complete
            if (e.type == 'touchstart') dragStart = e.originalEvent.touches[0].pageX; 
            if (e.type == 'mousedown') dragStart = e.pageX;
            $target = $(e.target);
            $this = $(this);
            $('.carousel').on('mousemove touchmove', function(e){ 
                grabbed = true;
                if (e.type == 'touchmove') dragEnd = e.originalEvent.touches[0].pageX;
                if (e.type == 'mousemove') dragEnd = e.pageX;
                $('.track').css('transform','translateX('+ dragPos() +'px)');
                $('.slide').css('cursor', 'grabbing');
                dragDistance = dragPos();
            });
            $(document).on('mouseup touchend', function(){
                if (grabbed == true) {
                    count = dragDistance / width;
                    $('.slide').css('cursor', 'grab');
                    if (dragPos() > threshold) { return shiftSlide(1) } //to the left
                    if (dragPos() < -threshold) { return shiftSlide(-1) } //to the right
                } else {
                    activateStudy($this.children('.study'));
                }
                count = 0;
                shiftSlide(0);
            });
        });

        function dragPos() {
            return dragEnd - dragStart;
        }

        function shiftSlide(direction) {
            if($('.track').hasClass('transition')) return;
            grabbed = false;
            dragEnd = dragStart;
            count = direction === -1 ? Math.floor(count) : Math.ceil(count);
            $(document).off('mouseup touchend');
            $('.carousel').off('mousemove touchmove');
            $('.track').addClass('transition').css('transform','translateX(' + (width * count) + 'px)');
            setTimeout(function(){
                if (direction >= 1) { // to the left
                    while (count > 0) {
                        $('.track').find('.slide:first-child').before($('.track').find('.slide:last-child'));
                        count--;
                    }
                } else if (direction <= -1) { //to the right
                    while (count < 0) {
                        $('.track').find('.slide:last-child').after($('.track').find('.slide:first-child'));
                        count++;
                    }
                }
                $('.track').removeClass('transition')
                $('.track').css('transform','translateX(0px)');
            }, 600);
        }

        $('.prev').click(function() {
            $study = $('.study.active').parent('.slide').prev().children('.study');
            activateStudy($study);
            count = 1;
            return shiftSlide(1);
        });

        $('.next').click(function() {
            $study = $('.study.active').parent('.slide').next().children('.study');
            activateStudy($study);
            count = -1;
            return shiftSlide(-1);
        });
    } else {

        $('.slide').click(function() {
            activateStudy($(this).children('.study'));
        });

        $('.prev').click(function() {
            $study = $('.study.active').parent('.slide').prev().children('.study');
            if ( $study.length == 0 ) return;
            activateStudy($study);
        });

        $('.next').click(function() {
            $study = $('.study.active').parent('.slide').next().children('.study');
            if ( $study.length == 0 ) return;
            activateStudy($study);
        });
    }
});
</script>