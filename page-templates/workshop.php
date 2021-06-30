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
    <div class="row">
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#latest-resources">
                <?php echo file_get_contents(__DIR__ . '/../img/latest.svg'); ?>
                <button class="btn">SPEAKING EVENTS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#books-and-publications">
                <?php echo file_get_contents(__DIR__ . '/../img/book.svg'); ?>
                <button class="btn">COACHING WORKSHOPS</button>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 text-center">
            <a href="#podcast">
                <?php echo file_get_contents(__DIR__ . '/../img/mic.svg'); ?>
                <button class="btn">IN-DEPTH CONSULTING</button>
            </a>
        </div>
    </div>
</section>

<section class="container speaking">
    <div class="row">
        <div class="col-xl-6">
            <h3></h3>
            <h2></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptatum voluptatem, beatae quod esse id modi adipisci neque assumenda eveniet labore, ipsam magni aperiam dolorum veniam tempora unde. Velit ex dolores, nulla blanditiis iusto magnam cum sapiente similique necessitatibus temporibus libero iure quidem molestiae nesciunt officia obcaecati quibusdam nam vel repudiandae alias! Blanditiis magni tempore inventore officiis quae, nobis saepe accusantium voluptate adipisci quam nam deserunt repellat sint voluptatum recusandae facilis, pariatur ducimus, sequi tempora. Repudiandae rem alias quia, doloremque, voluptate praesentium, quasi velit dolore laudantium excepturi reprehenderit pariatur rerum. Quas, voluptates! Tenetur facere voluptatibus cum! Officia velit, quasi quam repudiandae quibusdam impedit voluptatum ipsa qui accusamus delectus similique quisquam labore, laborum perferendis nobis, molestiae tempora itaque iure quod eius recusandae facere possimus vel in. Expedita est ipsa vel placeat unde ad. Quaerat minus dolores quidem eos praesentium delectus voluptas autem minima corporis, aperiam laudantium asperiores sit deleniti ducimus ex.</p>
        </div>
        <div class="col-xl-6">
            <img src="" alt="">
            <a href="" class="btn">GET MORE INFO</a>
        </div>
    </div>
</section>

<section class="container coaching">
    <div class="row">
        <div class="col-xl-6">
            <img src="" alt="">
            <a href="" class="btn">GET MORE INFO</a>
        </div>
        <div class="col-xl-6">
            <h3></h3>
            <h2></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptatum voluptatem, beatae quod esse id modi adipisci neque assumenda eveniet labore, ipsam magni aperiam dolorum veniam tempora unde. Velit ex dolores, nulla blanditiis iusto magnam cum sapiente similique necessitatibus temporibus libero iure quidem molestiae nesciunt officia obcaecati quibusdam nam vel repudiandae alias! Blanditiis magni tempore inventore officiis quae, nobis saepe accusantium voluptate adipisci quam nam deserunt repellat sint voluptatum recusandae facilis, pariatur ducimus, sequi tempora. Repudiandae rem alias quia, doloremque, voluptate praesentium, quasi velit dolore laudantium excepturi reprehenderit pariatur rerum. Quas, voluptates! Tenetur facere voluptatibus cum! Officia velit, quasi quam repudiandae quibusdam impedit voluptatum ipsa qui accusamus delectus similique quisquam labore, laborum perferendis nobis, molestiae tempora itaque iure quod eius recusandae facere possimus vel in. Expedita est ipsa vel placeat unde ad. Quaerat minus dolores quidem eos praesentium delectus voluptas autem minima corporis, aperiam laudantium asperiores sit deleniti ducimus ex.</p>
        </div>
    </div>
</section>

<section class="container consulting">
    <div class="row">
        <div class="col-xl-6">
            <h3></h3>
            <h2></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptatum voluptatem, beatae quod esse id modi adipisci neque assumenda eveniet labore, ipsam magni aperiam dolorum veniam tempora unde. Velit ex dolores, nulla blanditiis iusto magnam cum sapiente similique necessitatibus temporibus libero iure quidem molestiae nesciunt officia obcaecati quibusdam nam vel repudiandae alias! Blanditiis magni tempore inventore officiis quae, nobis saepe accusantium voluptate adipisci quam nam deserunt repellat sint voluptatum recusandae facilis, pariatur ducimus, sequi tempora. Repudiandae rem alias quia, doloremque, voluptate praesentium, quasi velit dolore laudantium excepturi reprehenderit pariatur rerum. Quas, voluptates! Tenetur facere voluptatibus cum! Officia velit, quasi quam repudiandae quibusdam impedit voluptatum ipsa qui accusamus delectus similique quisquam labore, laborum perferendis nobis, molestiae tempora itaque iure quod eius recusandae facere possimus vel in. Expedita est ipsa vel placeat unde ad. Quaerat minus dolores quidem eos praesentium delectus voluptas autem minima corporis, aperiam laudantium asperiores sit deleniti ducimus ex.</p>
        </div>
        <div class="col-xl-6">
            <img src="" alt="">
            <a href="" class="btn">GET MORE INFO</a>
        </div>
    </div>
</section>

<div class="carousel testimonials">
    <div class="row">
        <div class="slide"></div>
    </div>
</div>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        
    });
</script>