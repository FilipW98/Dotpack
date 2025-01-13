<section class="full-img" id="<?php the_sub_field('full_img_id') ?>">

    <div class="full-img__outer">
        <div class="full-img__inner">

            <div class="full-img__text fade animate">
                <h3 class="full-img__text-title h-40"><?php the_sub_field('full_img_title')?></h3>
                <p class="full-img__text-desc body-16"><?php the_sub_field('full_img_desc')?></p>
            </div>
            <div class="full-img__image">
                <?php   
                            $image = get_sub_field('full_img_image'); 
                            $size = array(1230,554) 
                            ?>
                <?php  if($image){
                            echo wp_get_attachment_image( $image, $size );
                            } 
                        ?>
            </div>
            <div class="full-img__mobile-image">
                <?php
                $image = get_sub_field('full_img_mobile_image'); 
                $size = array(1230,554) 
                ?>
                <?php  if($image){
                            echo wp_get_attachment_image( $image, $size );
                            } 
                ?>
            </div>

        </div>
    </div>
</section>