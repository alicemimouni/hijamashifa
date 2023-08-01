<?php
/*
Default template
Template Post Type: page
*/

get_header();  

/* Start the Loop */
if ( have_posts() ) : while( have_posts()  ) : the_post();

get_template_part( 'template-parts/navbar' ); 

get_template_part( 'template-parts/title' ); ?>

<div class="background-white page-bfw-content margin-default">

<?php the_content(); ?>

</div>

<?php get_template_part( 'template-parts/contact' );

get_template_part( 'template-parts/footer' ); 

endwhile; endif;

get_footer();