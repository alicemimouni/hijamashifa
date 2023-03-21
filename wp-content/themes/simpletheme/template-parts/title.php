<!-- {{ title }} -->
<header>
  <?php if( get_the_title() ) : ?>
  <h1 class="reveal"><?php the_title(); ?></h1>
  <?php endif; ?>
  <img class="wave" src="<?php echo get_template_directory_uri();?>/img/wave-header.svg" alt="">
  <img class="sheet" src="<?php echo get_template_directory_uri();?>/img/feuilles-gouttes.jpg" alt="">
</header>
