<?php

// add sub menu coordonnées in réglages
class InfosContactPage {

    const GROUP = 'contact_options';

    public static function register() {
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class, 'registerSettings']);
    }

    // register settings
    public static function registerSettings() {
        register_setting(self::GROUP, 'contact_adress');
        register_setting(self::GROUP, 'contact_pc_city');
        register_setting(self::GROUP, 'contact_phone');
        register_setting(self::GROUP, 'contact_email');
        add_settings_section('contact_section', 'Paramètres', function() {
            echo 'Vous pouvez ici ajouter vos coordonnées.';
        }, self::GROUP);

        // add adress
        add_settings_field('contact_adress', "Adresse", function() {
            ?>
            <!-- <textarea name="" id="" cols="30" rows="10"><?= get_option('contact_adress')?></textarea> -->
            <input type="text" class="regular-text" name="contact_adress" value="<?= get_option('contact_adress')?>">
            <?php
        }, self::GROUP, 'contact_section');
        // add city and postal code
        add_settings_field('contact_pc_city', "Code postal et ville", function() {
            ?>
            <input type="text" class="regular-text" name="contact_pc_city" value="<?= get_option('contact_pc_city')?>">
            <?php
        }, self::GROUP, 'contact_section');
        // add phone number
        add_settings_field('contact_phone', "Téléphone", function() {
            ?>
            <input type="text" class="regular-text" name="contact_phone" value="<?= get_option('contact_phone')?>">
            <?php
        }, self::GROUP, 'contact_section');
        // add email adress
        add_settings_field('contact_email', "Adresse email", function() {
            ?>
            <input type="text" class="regular-text" name="contact_email" value="<?= get_option('contact_email')?>">
            <?php
        }, self::GROUP, 'contact_section');
    }

    // add menu
    public static function addMenu() {
        add_options_page("Gestion des coordonnées", "Coordonnées", "manage_options", self::GROUP, [self::class, 'render']);
    }

    // render
    public static function render() {
       ?>
       <h1>Gestion des coordonnées</h1>
       <form action="options.php" method="post">
        <?php 
        settings_fields(self::GROUP); 
        do_settings_sections(self::GROUP);
        submit_button() 
        ?>
       </form>
    <?php
    }
}