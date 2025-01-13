<section class="learn-more">
    <div class="learn-more__outer">
        <div class="learn-more__inner">
            <div class="learn-more__wrapper">
                <div class="learn-more__desktop-img">
                    <?php 
                        $image = get_field('learn-more_img-desktop');
                        $size = array(1230, 554);
                        if($image){
                            echo wp_get_attachment_image($image, $size);
                        }
                    ?>
                    <div class="image-txt fade animate">
                        <div class="image-title h-40"><?php the_field('learn-more_main-title-bold') ?><i
                                class="image-desc h-40"><?php the_field('learn-more_main-title-slim') ?></i></div>
                        <?php 
                                        $link = get_field('learn-more_link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                        <a class="button-desktop btn-purple-to-trans-white" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="26" height="24"
                                viewBox="0 0 26 24" fill="none">
                                <path d="M13.8398 22.9387L24.8492 11.9996L13.8398 1.06055" stroke="#FDFFFC"
                                    stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M23.3252 11.9971L1 11.9971" stroke="#FDFFFC" stroke-width="1.00189"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="learn-more__mobile-img">
                    <?php 
                        $image = get_field('learn-more_img-mobile');  
                        $size = array(358, 571);
                        if($image){
                            echo wp_get_attachment_image($image, $size);
                        }
                    ?>
                    <div class="image-txt-mobile">
                        <div class="image-title h-40"><?php the_field('learn-more_main-title-bold') ?><i
                                class="image-desc h-40"><?php the_field('learn-more_main-title-slim') ?></i></div>
                        <?php 
                                        $link = get_field('learn-more_link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                        <a class="button-desktop btn-purple-to-trans-white" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="26" height="24"
                                viewBox="0 0 26 24" fill="none">
                                <path d="M13.8398 22.9387L24.8492 11.9996L13.8398 1.06055" stroke="#FDFFFC"
                                    stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M23.3252 11.9971L1 11.9971" stroke="#FDFFFC" stroke-width="1.00189"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>