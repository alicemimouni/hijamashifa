<!-- {{{{   CONTACT    }}}} -->

<?php
?>
<section class="contact">

<div class="container">
    <h2>Contact</h2>
    <img class="line" src="<?php echo get_template_directory_uri();?>/img/line-white.svg" alt="">
    <address>
        <a href=""
            target="_blank"><?= get_option('contact_adress'); ?><br><?= get_option('contact_pc_city'); ?></a> 
        <br>
        <a href=""><?= get_option('contact_phone'); ?></a>
        <br>
        <a href="mailto: <?= get_option('contact_email'); ?>" class="primary-text-color"><?= get_option('contact_email'); ?></a>
    </address>
</div>

</section>
