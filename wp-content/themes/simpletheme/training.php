<?php
/*
  Template Name: Ateliers hijama
  Template Post Type: page
*/

get_header();  

/* Start the Loop */
if ( have_posts() ) : while( have_posts()  ) : the_post();

get_template_part( 'template-parts/navbar' ); 

get_template_part( 'template-parts/title' ); ?>

<div class="page-training">

    <!-- INTRODUCTION -->
    <?php if(get_field('introduction_training_page')): ?>
    <div class="intro">
        <?php the_field('introduction_training_page'); ?>
    </div>
    <?php endif; ?>

    <!-- CONTAINER TRAINING REGISTER -->
    <?php if(get_field('add_first_section_training_page')): ?>
    <div class="container-training">

        <!-- first section -->
        <div class="block-training">
            <h2><?php the_field('title_first_section_training_page'); ?></h2>
            
            <?php // add image with id
            $image_first_part_id = (int) get_field('image_first_part_training_page');
        // wordpress function get img balise
        $img_first_part = wp_get_attachment_image($image_first_part_id, 'full');

        if(get_field('image_first_part_training_page')): ?>
        <div class="img-part">
            <?php echo $img_first_part; 
        endif; ?>
        </div>
            <div class="text-content"><?php the_field('content_first_section_training_page'); ?></div>

            <!-- if button === true -->
            <?php if(get_field('add_button_first_section_training_page')): ?>
            <a class="button button-outline-dark" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('button_link_first_section_training_page') ) ) ); ?>"><?php the_field('button_title_first_section_training_page'); ?>
                <img class="arrow" src="http://localhost/hijamashifa/wp-content/uploads/2022/03/arrow-dark.svg" alt="arrow">
            </a>
            <?php endif; ?>
        </div>

        <!-- second section -->
        <?php if(get_field('add_second_section_training_page')): ?>
        <div class="block-training">
            <h2><?php the_field('title_second_section_training_page'); ?></h2>
            <?php // add image with id
            $image_second_part_id = (int) get_field('image_part_two_training_page');
        // wordpress function get img balise
        $img_second_part = wp_get_attachment_image($image_second_part_id, 'full');

        if(get_field('image_part_two_training_page')): ?>
            <div class="img-part">
            <?php echo $img_second_part; 
             endif; ?>
            </div>
            <div class="text-content"><?php the_field('content_second_section_training_page'); ?></div>

            <!-- if button === true -->
            <?php if(get_field('add_button_second_section_training_page')): ?>
            <a class="button button-outline-dark" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('button_link_second_section_training_page') ) ) ); ?>"><?php the_field('button_title_second_section_training_page'); ?>
                <img class="arrow" src="http://localhost/hijamashifa/wp-content/uploads/2022/03/arrow-dark.svg" alt="arrow">
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php get_template_part( 'template-parts/links-end-page' ); ?>

</div>



<?php get_template_part( 'template-parts/contact' );

get_template_part( 'template-parts/footer' ); 

endwhile; endif;

get_footer();