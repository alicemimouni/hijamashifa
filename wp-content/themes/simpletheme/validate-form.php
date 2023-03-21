<?php
/*
  Template Name: Validation formulaire
  Template Post Type: page
*/

get_header();  

/* Start the Loop */
if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>

<div class="validate-form">
    <h1>Votre message à bien été envoyé&nbsp;!</h1>
    <p>Nous revenons vers vous très rapidement.</p>
    <a class="button" href="http://localhost">Revenir à l'accueil du site</a>
</div>

<?php endwhile; endif;

get_footer();