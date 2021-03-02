$(document).ready(function () {
    $(".hamburger-menu").click(function () {
        $(this).toggleClass("is-active");
    });

    // Close modal on button click
    $(".menu-item").click(function () {
        $("#nav-menu").modal('hide');
    });

    // when the modal is opened autoplay it
    $(".video-modal")
    .on("shown.bs.modal", function (e) {
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        var $modalVideoFrame = $(this).find(".modal-video-frame");
        var videoSrc = $modalVideoFrame.attr("src");
        $modalVideoFrame.attr(
        "src",
        videoSrc.replace("autoplay=0", "autoplay=1")
        );
    })
    .on("hidden.bs.modal", function (e) {
        // stop playing the youtube video when I close the modal
        var $modalVideoFrame = $(this).find(".modal-video-frame");
        var videoSrc = $modalVideoFrame.attr("src");
        $modalVideoFrame.attr(
        "src",
        videoSrc.replace("autoplay=1", "autoplay=0")
        );
    });
});

//this is immediately invoked, separate from the document ready status
(function ($) {
    // Scroll navbar
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass("scrolled", $(this).scrollTop() > 10);
    });

    // Smooth Scroll to Anchor
    var scrollToTarget = function (target, clickEvent) {
        // Does a scroll target exist?
        if (target.length) {
            // Support custom offset values if the target provides the 'data-offset' attribute
            var offsetAdjustment = target[0].dataset.offset ? target[0].dataset.offset : 1;
            // Only prevent default if animation is actually gonna happen
            if (clickEvent) {
                clickEvent.preventDefault();
                offsetAdjustment = 50;
            }
            $("html, body").animate({
                scrollTop: target.offset().top - offsetAdjustment
                },
                1000,
                function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    }
                }
            );
        }
    };

    // Scroll on load
    if (window.location.hash !== '') {
        $hashIdTarget = $(window.location.hash);
        scrollToTarget($hashIdTarget);
    }

    // Scroll on click
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (e) {
        // On-page links
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var $target = $(this.hash);
            $target = $target.length ?
            $target :
            $("[name=" + this.hash.slice(1) + "]");
            scrollToTarget($target, e);
        }
    });

    function stopVideo() {
        var $frame = $('iframe#mainvideo');

        // saves the current iframe source
        var vidsrc = $frame.attr('src');

        // sets the source to nothing, stopping the video
        $frame.attr('src', '');

        // sets it back to the correct link so that it reloads immediately on the next window open
        $frame.attr('src', vidsrc);
    }

    $('.video-modal').on('hidden.bs.modal', function (e) {
        stopVideo();
    })
});