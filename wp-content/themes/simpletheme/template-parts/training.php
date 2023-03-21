 <!-- {{{{   TRAINING    }}}} -->

<section class="presentation">

    <div class="container">
        <!-- title for mobile only -->
        <h2 class="d-none-pc"><?= get_field('titre_nos_formations') ?></h2>
        <img src="<?= get_field('image_nos_formations') ?>" alt="Anciennes ventouses de hijama thérapie">
        <div class="text-content ">
            <!-- title for pc only -->
            <h2 class="d-none-mobile"><?= get_field('titre_nos_formations') ?></h2>
            <img class="line d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/line-white.svg" alt="">
            <p class=""><?= get_field('contenu_nos_formation') ?></p>
            <a class="button button-outline-white" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('url_bouton_nos_formations') ) ) ); ?>"><?= get_field('texte_bouton_nos_formations') ?><img src="<?php echo get_template_directory_uri();?>/img/arrow.svg"></a>
        </div>
    </div>

</section>