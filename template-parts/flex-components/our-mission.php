<section class="our-mission">
    <div class="our-mission__outer">
        <div class="our-mission__inner">
            <div class="our-mission__wrapper">
                <div class="left__container slide-to-right animate">
                    <div class="left__main-title">
                        <div class="left__bold-title h-40"><?php the_field('mission_title-bold') ?>
                            <i class="left__thin-title"><?php the_field('mission_title-slim') ?></i>

                        </div>
                    </div>
                    <div class="left__txt-wrapper">
                        <?php $mission_first_desc = get_field('mission_first-desc');
                        if (!empty($mission_first_desc)) :  ?>
                        <div class="left__first-txt-border">
                            <span class="left__first-txt body-16"> <?php the_field('mission_first-desc') ?> </span>
                        </div>
                        <?php endif; ?>
                        <?php $mission_second_desc = get_field('mission_second-desc');
                        if (!empty($mission_second_desc)) : ?>
                        <div class="left__second-txt-border">
                            <span class="left__second-txt body-16"> <?php the_field('mission_second-desc') ?> </span>
                        </div>
                        <?php endif;?>
                        <?php $mission_third_desc = get_field('mission_third-desc');
                        if (!empty($mission_third_desc)) : ?>
                        <div class="left__third-txt-border">
                            <span class="left__third-txt body-16"> <?php the_field('mission_third-desc') ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="left__list-border">
                        <?php $mission_lis_sub_item = get_field('mission_list-sub-item');
                        if(!empty($mission_lis_sub_item)) : ?>
                        <div class="left__list-wrapper">
                            <?php if( have_rows('mission_list-sub-item') ): 
                            while( have_rows('mission_list-sub-item') ): the_row(); ?>
                            <div class="left__listOf-sub-item">
                                <svg class="left__sub-item-dot" xmlns="http://www.w3.org/2000/svg" width="8" height="9"
                                    viewBox="0 0 8 9" fill="none">
                                    <circle cx="4" cy="4.67969" r="4" fill="#1D1A05" />
                                </svg>
                                <span class="left__sub-item body-16"><?php the_sub_field('mission_sub-item') ?> </span>
                            </div>
                            <?php endwhile;
                        endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php $mission_link = get_field('mission_link');
                    if(!empty($mission_link)) : ?>
                    <div class="left__button-border">
                        <?php 
                        $link = get_field('mission_link');
                        if($link): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="left__button btn-purple-to-trans-black body-16"
                            href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <div class="right__container">
                        <div class="right__image fade animate">
                            <?php 
                            $image = get_field('mission_img');
                            $size = array(622, 480);
                            if($image){
                            echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>