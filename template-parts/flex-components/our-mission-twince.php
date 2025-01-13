<section class="our-mission">
    <div class="our-mission__outer">
        <div class="our-mission__inner">
            <div class="our-mission__wrapper">
                <div class="left__container slide-to-right animate">
                    <div class="left__main-title h-40">
                        <div class="left__bold-title"><?php the_field('mission_title-bold-twince') ?><i
                                class="left__thin-title"><?php the_field('mission_title-slim-twince') ?></i></div>
                    </div>
                    <div class="left__txt-wrapper">
                        <div class="left__first-txt-border">
                            <span class="left__first-txt body-16"> <?php the_field('mission_first-desc-twince') ?>
                            </span>
                        </div>
                        <div class="left__second-txt-border">
                            <span class="left__second-txt body-16"> <?php the_field('mission_second-desc-twince') ?>
                            </span>
                        </div>
                        <div class="left__third-txt-border">
                            <span class="left__third-txt body-16">
                                <?php the_field('mission_third-desc-twince') ?></span>
                        </div>
                    </div>
                    <div class="left__list-border">
                        <div class="left__list-wrapper">
                            <?php if( have_rows('mission_list-sub-item-twince') ): 
                            while( have_rows('mission_list-sub-item-twince') ): the_row(); ?>
                            <div class="left__listOf-sub-item">
                                <svg class="left__sub-item-dot" xmlns="http://www.w3.org/2000/svg" width="8" height="9"
                                    viewBox="0 0 8 9" fill="none">
                                    <circle cx="4" cy="4.67969" r="4" fill="#1D1A05" />
                                </svg>
                                <span class="left__sub-item body-16"><?php the_sub_field('mission_sub-item-twince') ?>
                                </span>
                            </div>
                            <?php endwhile;
                        endif; ?>
                        </div>
                    </div>
                    <div class="left__button-border">
                        <?php 
                        $link = get_field('mission_link-twince');
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
                </div>
                <div class="right">
                    <div class="right__container">
                        <div class="right__image fade animate">
                            <?php 
                            $image = get_field('mission_img-twince');
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