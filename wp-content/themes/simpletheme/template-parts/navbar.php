<!-- top bar -->
<div class="top-bar">
    <img src="<?php echo get_template_directory_uri();?>/img/logo-hijama-shifa.svg" alt="Hijama Shifa logo">
    <div><span>Institut de soin & massage avec les ventouses,&nbsp;</span>
        <span>la phytothérapie et l'aromathérapie.</span>
    </div>
</div>

<!-- navbar logo -->
<nav>
    <!-- logo -->
    <a class="" href="<?php echo get_option('home'); ?>/">
        <img src="<?php echo get_template_directory_uri();?>/img/logo-rm-bckgd.png" alt="Hijama Shifa ateliers, cours en ligne">
    </a>
    <!-- menu -->
    <a id="link" href="#"><span id="burger"></span></a>
    <?php wp_nav_menu(array(
    'theme_location' => 'nav'
    )); ?>
</nav>