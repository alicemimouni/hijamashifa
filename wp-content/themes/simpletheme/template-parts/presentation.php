
<!-- {{{{   PRESENTATION    }}}} -->

<section class="presentation">
    <div class="container">
        <!-- title for mobile only -->
        <h2 class="d-none-pc"><?= get_field('titre_de_la_section') ?></h2>
        <img src="<?= get_field('image') ?>"
            alt="Anciennes ventouses de hijama thérapie">
        <div class="text-content">
            <!-- title for pc only -->
            <h2 class="d-none-mobile"><?= get_field('titre_de_la_section') ?></h2>
            <img class="line d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/line-white.svg" alt="">
            <p><?= get_field('contenu') ?></p>
            <a class="button button-outline-white" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('page_liee') ) ) ); ?>"><?= get_field('texte_du_bouton') ?><img src="<?php echo get_template_directory_uri();?>/img/arrow.svg"
                    alt="<?= get_field('texte_du_bouton') ?>"></a>
        </div>
    </div>
</section>