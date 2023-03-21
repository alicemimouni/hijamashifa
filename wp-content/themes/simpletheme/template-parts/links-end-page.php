 
        <!-- SHOW LINKS -->
        <!-- buttons -->
        <div class="buttons-bloc">
            <!-- first link -->
            <?php if(get_field('add_link_page')): ?>
            <a class=" button button-primary" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('link_url_page') ) ) ); ?>"><?= get_field('link_title_page') ?><img src="<?php echo get_template_directory_uri();?>/img/arrow.svg"></a>
            <?php endif; ?>       

            <!-- second link -->
            <?php if(get_field('add_second_link_page')): ?>
                <div class="training-link">
                    <p><?php the_field('catchphrase_link'); ?></p>
                    <?php if(get_field('add_image_second_link')): ?>
                    <picture>
                        <img src="<?php the_field('image_second_link'); ?>" alt="">
                    </picture>
                    <?php endif ?>
                    <div class="button-container">
                        <a class=" button button-round button-dark" href="<?php echo esc_url( get_permalink( get_page_by_title( get_field('second_link_url_page') ) ) ); ?>"><?= get_field('title_second_link') ?><img src="<?php echo get_template_directory_uri();?>/img/arrow.svg" alt="arrow"></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>