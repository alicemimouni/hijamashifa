<!-- PAGE HIJAMATHERAPIE CONTENT -->
<div class="page-content-hijama">
    <!-- introduction -->
<section class="intro">
    <div class="content">
    <?= get_field('introduction_hijamatherapie_page') ?>
    </div>
</section>

<?php if(get_field('titre_premiere_section_hijamatherapie')): ?>
<!-- first section -->
<section class="presentation">
    <div class="container">
        <!-- title for mobile only -->
        <h2 class="d-none-pc"><?= get_field('titre_premiere_section_hijamatherapie') ?></h2>
        <img src="<?= get_field('image_premiere_section_hijamatherapie') ?>" alt="">
        <div class="text-content">
            <!-- title for pc only -->
            <h2 class="d-none-mobile"><?= get_field('titre_premiere_section_hijamatherapie') ?></h2>
            <img class="line d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/line-dark.svg" alt="">
            <div class="content-container">
            <?= get_field('contenu_premiere_section_page_hijamatherapie') ?>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php if(get_field('titre_seconde_section_hijamatherapie')): ?>
<!-- second section -->
<section class="presentation second-section">
    <div class="container">
        <!-- title for mobile only -->
        <h2 class="d-none-pc"><?= get_field('titre_seconde_section_hijamatherapie') ?></h2>
        <img src="<?= get_field('image_seconde_section_hijamatherapie') ?>" alt="<?= get_field('titre_seconde_section_hijamatherapie') ?>">
        <div class="text-content">
            <!-- title for pc only -->
            <h2 class="d-none-mobile"><?= get_field('titre_seconde_section_hijamatherapie') ?></h2>
            <img class="line d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/line-dark.svg" alt="">
            <div class="content-container">
            <?= get_field('contenu_seconde_section_hijamatherapie') ?>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php if(get_field('bouton_lien_page_hijamatherapie')): ?>
<!-- button -->
<a class=" button button-primary" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('nom_de_la_page_liee_hijamatherapie') ) ) ); ?>"><?= get_field('titre_du_bouton_hijamatherapie') ?><img src="<?php echo get_template_directory_uri();?>/img/arrow.svg"></a>
<?php endif ?>
</div>
