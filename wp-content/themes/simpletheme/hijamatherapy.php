<?php
/*
  Template Name: Hijamatherapie
  Template Post Type: page
*/
get_header();  

// LOOP
if( have_posts() ) : while( have_posts() ) : the_post(); 

get_template_part( 'template-parts/navbar' ); 

get_template_part( 'template-parts/title' ); ?>


<div class="page-content-hijama">

    <!-- introduction -->
    <section class="intro">
        <div class="content">
        <?= get_field('introduction_hijamatherapy_page') ?>
        </div>
    </section>

    <?php if(get_field('title_first_section_hijamatherapy')): ?>
    <!-- first section -->
    <section class="presentation">
        <div class="container">
            <!-- title for mobile only -->
            <h2 class="d-none-pc"><?= get_field('title_first_section_hijamatherapy') ?></h2>
            <img src="<?= get_field('image_first_section_hijamatherapy') ?>" alt="">
            <div class="text-content">
                <!-- title for pc only -->
                <h2 class="d-none-mobile"><?= get_field('title_first_section_hijamatherapy') ?></h2>
                <img class="line d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/line-dark.svg" alt="line">
                <div class="content-container">
                <?= get_field('content_first_section_page_hijamatherapy') ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>

    <?php if(get_field('title_second_section_hijamatherapy')): ?>
    <!-- seconde section -->
    <section class="presentation second-section">
        <div class="container">
            <!-- title for mobile only -->
            <h2 class="d-none-pc"><?= get_field('title_second_section_hijamatherapy') ?></h2>
            <img src="<?= get_field('image_second_section_hijamatherapy') ?>" alt="<?= get_field('title_second_section_hijamatherapy') ?>">
            <div class="text-content">
                <!-- title for pc only -->
                <h2 class="d-none-mobile"><?= get_field('title_second_section_hijamatherapy') ?></h2>
                <img class="line d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/line-dark.svg" alt="line">
                <div class="content-container">
                <?= get_field('content_second_section_hijamatherapy') ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>

    <?php get_template_part( 'template-parts/links-end-page' ); ?>

</div>


<?php get_template_part( 'template-parts/contact' ); 

get_template_part( 'template-parts/footer' ); 

endwhile; endif; 
// END LOOP

get_footer(); 