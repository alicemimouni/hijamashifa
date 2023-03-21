<?php /*
Template Name: A propos
Template Post Type: page
*/
?>

<?php get_header(); 

/* Start the Loop */
if ( have_posts() ) : while( have_posts()  ) : the_post();

get_template_part( 'template-parts/navbar' ); 

get_template_part( 'template-parts/title' ); ?>


<div class="background-white page-bfw-content">
    <div class="page-about-main">

        
        <!--  SHOW CONTENT -->
        <?php if(get_field('page_about_content')): ?>
            <section class="content-page-about">
                <div class="container-page-about">
                    <?php the_field('page_about_content') ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- SHOW IMAGE -->
        <?php if(get_field('image_page_about')): ?>
        <div class="image">
            <picture>
                <img src="<?php the_field('image_page_about_url') ?>" alt="" width="280px">
            </picture>
        </div>
        <?php endif; ?>

        <?php get_template_part( 'template-parts/links-end-page' ); ?>
    </div>
</div>


<?php get_template_part( 'template-parts/contact' );

get_template_part( 'template-parts/footer' ); 

endwhile; endif;

get_footer();