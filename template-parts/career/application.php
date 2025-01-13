<section class="application" id="formularz">
    <div class="application__outer">
        <div class="application__inner">
            <div class="application__img fade animate">
                <div class="application__img-circle">
                    <span class="application__img-circle-text body-14"><?php the_field('img_info') ?></span>
                </div>
                <div class="application__img-text">

                    <span class="application__img-text-name"><?php the_field('name_img') ?></span>
                    <span class="application__img-text-position"><?php the_field('position_img') ?></span>
                </div>
                <?php 
            $image = get_field('form_img');
            $size = 'full';
            
            if($image){
                echo  wp_get_attachment_image($image,$size);
            }
            ?>
            </div>

            <div class="application__img-big">
                <div class="application__img-circle">
                    <span class="application__img-circle-text body-14"><?php the_field('img_info') ?></span>
                </div>
                <div class="application__img-text">

                    <span class="application__img-text-name"><?php the_field('name_img') ?></span>
                    <span class="application__img-text-position"><?php the_field('position_img') ?></span>
                </div>
                <?php 
            $image = get_field('form_img_big');
            $size = 'full';
            
            if($image){
                echo  wp_get_attachment_image($image,$size);
            }
            ?>
            </div>
            <div class="application__application-box form-validation fade animate">
                <?php
                        if(get_locale() == 'pl_PL') {
                            echo do_shortcode('[contact-form-7 id="283d70d" title="Formularz zgłoszeniowy"]');
                        } 
                    ?>
            </div>

            <?php 
            if(have_rows('positions')): while(have_rows('positions')): the_row();
            ?>

            <p class="application-position"><?php the_sub_field('position') ?></p>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>