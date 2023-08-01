
    <!-- {{{{   FOOTER    }}}} -->

    <footer>
            <img class="sheet d-none-mobile" src="<?php echo get_template_directory_uri();?>/img/feuilles-gouttes.jpg" alt="">
            <div class="container">
                <div class="block-menu">
                <?php wp_nav_menu(array('theme_location' => 'nav_footer_one')); ?>
                    <?php wp_nav_menu(array('theme_location' => 'nav_footer_two')); ?>
                </div>
                <p>2023 - <a href="https://bforweb.fr" target="_blank">© Bforweb</a></p>
            </div>

        </footer>