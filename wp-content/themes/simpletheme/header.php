<!DOCTYPE html>
<!-- Displays the language attributes for the 'html' tag -->
<html <?php language_attributes(); ?>>

<head>
    <!-- Displays information about the current site -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/logo.ico" type="images/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
    <?php if(get_permalink( get_page_by_title('Atelier présentiel') )) : ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
    <!-- Starts the wp_head action which prints scripts or data in the head tag on the front end -->
    <?php wp_head(); ?>
</head>

<!-- ############### BODY ################ -->
<!-- get css class names -->
<body <?php body_class(); ?>>
    <div id="bloc-page">
        <!-- Starts the wp_body_open action triggered before the body is opened -->
        <?php wp_body_open(); ?>