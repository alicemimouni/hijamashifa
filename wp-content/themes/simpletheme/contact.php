<?php
/*
Template Name: Contact
Template Post Type: page
*/

get_header();  

/* Start the Loop */
if ( have_posts() ) : while( have_posts()  ) : the_post();

get_template_part( 'template-parts/navbar' ); 

get_template_part( 'template-parts/title' ); ?>

<div class="background-white page-bfw-content">
    <div class="page-form">
        <div class="text-content">
            <p>Pour toute demande de renseignements, remplissez le formulaire ci-dessous&nbsp;!</p>
        </div>
        <?php echo do_shortcode( '[wpforms id="434"]' ); ?>
    </div>
</div>

<?php get_template_part( 'template-parts/contact' );

get_template_part( 'template-parts/footer' ); 

endwhile; endif;

get_footer();