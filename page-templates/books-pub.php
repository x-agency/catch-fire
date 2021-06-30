<?php
    /*
    Template Name: Resources
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    $id = get_the_id();
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>

<section class="container tools">
    <div class="row">
        <div class="col-12">
            <h2 class="subtitle">TOOLS FOR SUCCESS</h2>
            <h2>Resources and information for the modern-day leader.</h2>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#latest-resources">
                <?php echo file_get_contents(__DIR__ . '/../img/latest.svg'); ?>
                <button class="btn">LATEST RESOURCES</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#books-and-publications">
                <?php echo file_get_contents(__DIR__ . '/../img/book.svg'); ?>
                <button class="btn">BOOKS & PUBLICATIONS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#podcast">
                <?php echo file_get_contents(__DIR__ . '/../img/mic.svg'); ?>
                <button class="btn">CATCHFIRE PODCAST</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#flash-paper">
                <?php echo file_get_contents(__DIR__ . '/../img/flash-paper.svg'); ?>
                <button class="btn">FLASH PAPER</button>
            </a>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/covers'); ?>

<?php get_template_part('template-parts/books-pub-books'); ?>

<section class="podcast">
    <div class="anchor" id="podcast"></div>
    <img src="/wp-content/themes/catch-fire/img/podcast-hero.jpg" alt="" class="bg">
    <div class="content text-center text-lg-start">
        <h2 class="subtitle">PODCAST</h2>
        <h2>catch<span>fire</span> daily</h2>
        <div class="podcast-links">
            <?php while(have_rows('podcast')) : the_row();
                $apple = get_sub_field('apple');
                $spotify = get_sub_field('spotify');
                $google = get_sub_field('google');
                $title = get_sub_field('title');

                ?>
                <div class="podcast-link mb-3 justify-content-lg-start justify-content-center">
                    <p><?php echo $title; ?></p>
                    <a href="<?php echo $apple; ?>">
                        <img src="/wp-content/themes/catch-fire/img/apple-podcasts.png">
                    </a>
                    <a href="<?php echo $spotify; ?>">
                        <img src="/wp-content/themes/catch-fire/img/spotify.png">
                    </a>
                    <a href="<?php echo $google; ?>">
                        <img src="/wp-content/themes/catch-fire/img/google-podcasts.png">
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="more">
            <p class="mt-5">Listen to all episodes on:</p>
            <a href="">
                <img src="/wp-content/themes/catch-fire/img/apple-podcasts.png">
                <span>Apple <br>Podcasts</span>
            </a>
            <a href="">
                <img src="/wp-content/themes/catch-fire/img/spotify.png">
                <span>Spotify</span>
            </a>
            <a href="">
                <img src="/wp-content/themes/catch-fire/img/google-podcasts.png">
                <span>Google <br>Podcasts</span>
            </a>
        </div>
    </div>
</section>

<section class="container flash-papers">
<div class="anchor" id="flash-paper"></div>
    <div class="row justify-content-start">
        <div class="col-12"><a href="/flash-papers" target="_blank"><h2 class="subtitle">FLASH PAPERS</h2></a></div>
        <div class="col-12"><h2>We are all busy and at the same time, we want to be in the know about ideas and insights.</h2></div>
        <?php /*
        $i = 0;  
        while(have_rows('flash')) : the_row();
            $url = get_sub_field('url');
            $title = get_sub_field('title');
            $number = get_sub_field('number');

            ?>

            <?php if ($i == 0) : ?>
                <div class="col-lg-6 col-xl-4">
            <?php endif; ?>
                    <a href="<?php echo $url; ?>" class="mb-4">
                        <div class="flash-paper">
                            <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                            <p><?php echo get_row_index(); ?></p>
                        </div>
                        <p><?php echo $title; ?></p>
                    </a>
            <?php $i++; ?>
            <?php if ($i == 4 ) : ?>
                </div>
                <?php $i = 0; ?>
            <?php endif; ?>
        <?php endwhile; */?>
        
        <?php /*div class="col-lg-6 col-xl-4">
        <?php for($i = 55; $i >= 52; $i--) : ?>
            <a href="" class="mb-4">
                <div class="flash-paper">
                    <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                    <p><?php echo $i; ?></p>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
            </a>
        <?php endfor; ?>
        </div>
        <div class="col-lg-6 col-xl-4">
        <?php for($i = 51; $i >= 48; $i--) : ?>
            <a href="" class="mb-4">
                <div class="flash-paper">
                    <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                    <p><?php echo $i; ?></p>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
            </a>
        <?php endfor; ?>
        </div>
        <div class="col-lg-6 col-xl-4">
        <?php for($i = 47; $i >= 44; $i--) : ?>
            <a href="" class="mb-4">
                <div class="flash-paper">
                    <?php echo file_get_contents(__DIR__ . '/../img/document.svg'); ?>
                    <p><?php echo $i; ?></p>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
            </a>
        <?php endfor; ?>
        </div */?>

        <?php
            $posts = get_posts( array(
                'numberposts' => 12,
                'post_type'   => 'flash-papers'  
                ) 
            );   
            $i = wp_count_posts('flash-papers')->publish;
        ?>
        <?php foreach($posts as $post) : ?>
            <div class="col-lg-6 col-xl-4">
                <a href="<?php echo get_permalink($pub->ID); ?>" class="mb-4 justify-content-center">
                    <div class="flash-paper">
                        <p><?php echo $i; ?></p>
                    </div>
                    <p><?php echo get_the_title($post->ID); ?></p>
                </a>
            </div>
            <?php $i--; ?>
        <?php endforeach; ?>
    </div>
    <a href="/flash-papers" class="btn d-block mt-5" style="max-width: 250px;">View All Flash Papers</a>
</section>

<section class="container videos" id="videos">
    <div class="row mb-5">
        <div class="col-12"><a href="https://www.youtube.com/channel/UCGpM37SRr3NXLml84rWxE2A" target="_blank"><h2 class="subtitle">Videos</h2></a></div>
        <div class="col-12"><h2>We are all busy and at the same time, we want to be in the know about ideas and insights.</h2></div>
        <?php while( have_rows('videos', $id) ) : the_row(); 
            $url = get_sub_field('url');
            $thumbnail = get_sub_field('thumbnail');
            $title = get_sub_field('title');

            //https://coderwall.com/p/nihgwq/get-a-thumbnail-from-a-youtube-video
            preg_match('/(?<=v=).*/', $url, $matches);
            if ( $thumbnail == "" ) {
                $thumbnail = "https://img.youtube.com/vi/" . $matches[0] . "/0.jpg";
            }
            ?>

            <?php if ( get_row_index() % 3 == 1 ) {
                echo '<div class="row mb-5">';
            } ?>

                <div class="col-lg-4 video">
                    <div class="thumbnail">
                        <img src="<?php echo $thumbnail; ?>" data-src="<?php echo "https://www.youtube.com/embed/" . $matches[0] . "?autoplay=1"; ?>">
                        <?php echo file_get_contents(__DIR__ . '/../img/play-btn.svg'); ?>
                    </div>
                    <p><?php echo $title; ?></p>
                </div>

            <?php if ( get_row_index() % 3 == 0 ) {
                echo '</div>';
            } ?>

        <?php endwhile; ?>
    </div>
    <a href="https://www.youtube.com/channel/UCGpM37SRr3NXLml84rWxE2A" target="_blank" class="btn d-block" style="max-width: 250px;">Visit Youtube Channel</a>
</section>

<div class="modal videoModal">
    <div class="content">
        <div class="modal-close">+</div>
        <iframe src="" frameborder="0" width="100%" height="100%" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<section class="container resources" id="resources">
    <div class="row mb-5">
        <div class="col-12"><a href="https://www.youtube.com/channel/UCGpM37SRr3NXLml84rWxE2A" target="_blank"><h2 class="subtitle">Christian Resources</h2></a></div>
        <div class="col-12"><h2>We are all busy and at the same time, we want to be in the know about ideas and insights.</h2></div>

        <div class="col-6"><a href="/wp-content/themes/catch-fire/img/Foundational_Teachings.pdf" target="_blank" class="btn">Foundational Teachings</a></div>
        <div class="col-6"><a href="/wp-content/themes/catch-fire/img/Old_and_New_Testament_Hospitality.pdf" target="_blank" class="btn">Old and New Testament Hospitality</a></div>
    </div>
    <a href="https://www.youtube.com/channel/UCGpM37SRr3NXLml84rWxE2A" target="_blank" class="btn d-block" style="max-width: 250px;">All Resources</a>
</section>

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

<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        $('.video').click(function() {
            src = $(this).children('img').attr("data-src");
            $(".videoModal").css({
                "opacity":"1",
                "pointer-events":"auto"
            });
            $('.videoModal iframe').attr("src", src);
        });

        $(".modal-close").click(function() {
            $(".videoModal").css({
                "opacity":"0",
                "pointer-events":"none"
            });
            $('.videoModal iframe').attr("src", "");
        })
    });
</script>