<?php /*
Template Name: Ateliers différés
Template Post Type: page
*/
?>

<?php get_header(); 

/* Start the Loop */
if ( have_posts() ) : while( have_posts()  ) : the_post();

get_template_part( 'template-parts/navbar' ); 

get_template_part( 'template-parts/title' ); ?>


<div class="background-white page-bfw-content">
    <div class="page-form">
        <div class="text-content">
            <p class="big-font-size">Pour vous préinscrire à l’un de nos ateliers e-learning, remplissez le formulaire ci-dessous.</p>
            <p>A réception de votre demande, nous vous enverrons un email contenant notre RIB pour le règlement ainsi que le contrat de formation à nous retourner signé.</p>
            <p>Votre inscription sera confirmée à la réception du contrat signé et de votre règlement.</p>
        </div>
        <?php echo do_shortcode( '[wpforms id="440"]' ); ?>
    </div>
</div>


<?php get_template_part( 'template-parts/contact' );

get_template_part( 'template-parts/footer' ); 

endwhile; endif;

get_footer();