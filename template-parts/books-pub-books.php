<?php
    //get_posts to retrieve an array of posts
    $pubs = get_posts( array(
            'numberposts' => 4,
            'post_type'   => 'books'      
        ) 
    );   
?>

<section class="container books-pubs">
    <div class="anchor" id="books-and-publications"></div>
    <div class="row pb-5 justify-content-center">
        <div class="col-12"><a href="/books" target="_blank"><h2 class="subtitle">BOOKS</h2></a></div>
        <?php foreach($pubs as $pub) : ?>
            <div class="col-lg-6 col-xl-3 book">
                <a href="<?php echo get_permalink($pub->ID);?>" target="_blank">
                    <img src="<?php  the_field('cover', $pub->ID);?>" alt="">
                </a>
            </div>
        <?php endforeach; ?>
        <!-- <div class="col-lg-6 col-xl-3 book">
            <a href="/books/volunteer-effect/" target="_blank">
                <img src="/wp-content/themes/catch-fire/img/book-come-back.png" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 book">
            <a href="/books/volunteer-effect/" target="_blank">
                <img src="/wp-content/themes/catch-fire/img/book-volunteer-survival.png" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 book">
            <a href="/books/volunteer-effect/" target="_blank">
                <img src="/wp-content/themes/catch-fire/img/book-volunteer-effect.png" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 book">
            <a href="/books/volunteer-effect/" target="_blank">
                <img src="/wp-content/themes/catch-fire/img/book-table-influence.png" alt="">
            </a>
        </div> -->
    </div>
</section>