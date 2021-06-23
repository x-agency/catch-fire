<section class="container latest-resources">
    <div class="anchor" id="latest-resources"></div>
    <div class="row">
        <div class="col-lg-6 order-1 text-center text-lg-start">
            <a href="/publications" target="_blank"><h2 class="subtitle">LATEST RESOURCES</h2></a>
        </div>
        <div class="col-lg-6 order-3 order-lg-2 text-center text-lg-end mt-lg-0 mt-5">
            <div class="prev me-lg-0 me-5">
                <img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt="">
            </div>
            <div class="next ms-5">
                <img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt="">
            </div>
        </div>
        <div class="col-12 order-2 order-lg-3 mt-5 px-0">
            <div class="carousel">
                <div class="track">
                    <?php
                        //get_posts to retrieve an array of posts
                        $pubs = get_posts( array(
                                'numberposts' => 6,
                                'post_type'   => 'publications'      
                            ) 
                        );   
                    ?>
                    <?php //loop through each array object to get the thumbnail ?>
                    <?php foreach($pubs as $pub) : ?>
                    <div class="slide">
                        <a href="<?php echo get_permalink($pub->ID);?>" target="_blank">
                            <img src="<?php echo get_the_post_thumbnail_url($pub->ID, '')?>" alt="">
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {

    $carousel = $('.carousel'),
    $track = $('.track'),
    slideCount = $('.slide').length,
    width = $('.slide').width(),
    carouselWidth = $('.carousel').width(),
    threshold = width / 4;
    dragStart = 0,
    dragEnd = 0,
    count = 1,
    $item = $('.slide');

    for (var i = 0; i < (slideCount * 2); i++) {
        $('.slide').eq(slideCount - 1).clone().prependTo('.track');
    }

    slideCountTotal = $('.slide').length;
    if ( $(window).width() > 1439 ) {
        space = ( carouselWidth - ( width * 3 )) / 2;
        $('.track').css("width", (carouselWidth * (slideCountTotal / 3)) + space + "px");
    } else if ( $(window).width() > 991 ) {
        space = ( carouselWidth - ( width * 2 )) / 2;
        $('.track').css("width", (carouselWidth * (slideCountTotal / 2)) + "px");
    } else {
        $('.track').css("width", (width * slideCountTotal) + "px");
    }

    offsetWidth = $('.slide')[1].offsetLeft - $('.slide')[0].offsetLeft;
    if ( $(window).width() > 1439 ) {
        $track.css("left", ( (-offsetWidth * (slideCount) ) + "px"));
    } else if ( $(window).width() > 991 ) {
        $track.css("left", ( (-offsetWidth * (slideCount) ) - ((offsetWidth - width) / 2) + "px"));
    } else {
        $track.css("left", ( (-offsetWidth * (slideCount) ) + "px"));
    }
    

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
        $track.addClass('transition').css('transform','translateX(' + (offsetWidth * count) + 'px)');
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