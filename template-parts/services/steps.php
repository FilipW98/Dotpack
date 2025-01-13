<section id="steps" class="steps">
    <div class="steps__outer">
        <div class="steps__inner">
            <div class="steps__title slide-to-right animate">
                <h2 class="steps__title-text h-40"><?php the_field('steps_title')?></h2>
            </div>
            <div class="steps__items">
                <?php if(have_rows('steps_items')): 
                $step_counter = 1;
                $reverse_item_class = '';
            
                while(have_rows('steps_items')): 
                the_row(''); ?>

                <?php
                if($step_counter % 2 == 0){
                    $reverse_item_class = 'reverse-item';
                } else {
                    $reverse_item_class = '';
                } ?>

                <div class="steps__items-item <?php echo $reverse_item_class; ?>"
                    id="<?php the_sub_field('step_item_id') ?>">
                    <div class="steps__items-item-img fade animate">
                        <?php   
                            $image = get_sub_field('steps_item_img'); 
                            $size = array(622, 489) ?>
                        <?php  if($image){
                            echo wp_get_attachment_image( $image, $size );
                            } 
                        ?>
                        <div class="steps__items-item-img-circle">
                            <span class="steps__items-item-img-circle-text body-16">
                                <?php 
                         echo apply_filters('orphan_replace', __('Krok ', 'happy')); 
                         echo " ";
                         echo  $step_counter;
                        ?>
                            </span>
                        </div>
                    </div>
                    <div class="steps__items-item-content clip-right animate">
                        <p class="steps__items-item-content-title h-32"><?php the_sub_field('steps_item_title'); ?></p>
                        <p class="steps__items-item-content-desc body-16"><?php the_sub_field('steps_item_desc'); ?></p>
                        <div class="steps__items-item-content-btn">
                            <?php
                        $link = get_sub_field('steps_item_btn');
                        if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                            <a class="steps__items-item-content-btn-link btn-purple-to-trans-black"
                                target="<?php echo esc_attr( $link_target );?>"
                                href="<?php echo esc_url( $link_url ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php $step_counter++;?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>