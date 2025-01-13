<section class="img-text">
    <div class="img-text__outer">
        <div class="img-text__inner">
                 <div class="img-text__content slide-to-right animate">
                    <h3 class="img-text__content-title h-32"><?php the_sub_field('img_text_title') ?></h3>
                    <p class="body-16 img-text__content-desc"><?php the_sub_field('img_text_desc') ?></p>
                 </div>
                 <div class="img-text__image fade animate">
                     <?php   
                            $image = get_sub_field('img_text_img'); 
                            $size = array(622, 480) 
                            ?>
                            <?php  if($image){
                            echo wp_get_attachment_image( $image, $size );
                            } 
                        ?>
                 </div>
        </div>
    </div>
</section>