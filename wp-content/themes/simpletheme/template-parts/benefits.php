 <!-- {{{{   BENEFITS    }}}} -->

 <section class="benefits">

<div class="container">
    <div class="subtitle">
        <h2><?= get_field('titre_bienfaits_hijama') ?></h2>
        <img class="line" src="<?php echo get_template_directory_uri();?>/img/line.svg" alt="">
    </div>
    <div class="main-content">
        <div class="text-content">
            <ul>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_1') ?></li>
                </div>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_2') ?></li>
                </div>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_3') ?></li>
                </div>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_4') ?></li>
                </div>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_5') ?></li>
                </div>
                <?php if(get_field('element_liste_6')): ?>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_6') ?></li>
                </div>
                <?php endif ?>
                <?php if(get_field('element_liste_7')): ?>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_7') ?></li>
                </div>
                <?php endif ?>
                <?php if(get_field('element_liste_8')): ?>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_8') ?></li>
                </div>
                <?php endif ?>
                <?php if(get_field('element_liste_9')): ?>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_9') ?></li>
                </div>
                <?php endif ?>
                <?php if(get_field('element_liste_10')): ?>
                <div><img src="<?php echo get_template_directory_uri();?>/img/ellipse.svg" width="7px" alt="list type">
                    <li><?= get_field('element_liste_10') ?></li>
                </div>
                <?php endif ?>
            </ul>
            <?php if(get_field('bouton_bienfaits_hijama')): ?>
            <a class="button button-outline-primary button-round" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('url_bouton_bienfaits_hijama') ) ) ); ?>"><?= get_field('texte_bouton_bienfaits_hijama') ?>
                <img class="arrow-secondary" src="<?php echo get_template_directory_uri();?>/img/arrow-secondary.svg" alt="">
            </a>
            <?php endif ?>
        </div>
        <img class="d-none-mobile" src="<?= get_field('image_bienfaits_hijama') ?>" alt="">
    </div>
</div>

</section>