<?php
/*
  Template Name: Accueil
  Template Post Type: page
*/

	get_header();  ?>

<?php get_template_part( 'template-parts/navbar' ); ?>

<?php get_template_part( 'template-parts/header-home' ); ?>

<?php get_template_part( 'template-parts/presentation' ); ?>

<?php get_template_part( 'template-parts/benefits' ); ?>

<?php get_template_part( 'template-parts/training' ); ?>

<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_template_part( 'template-parts/footer' ); ?>

<?php get_footer(); ?>