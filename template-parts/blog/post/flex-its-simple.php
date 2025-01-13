<section class="simple" id="<?php the_sub_field('its_simple_id') ?>">
    <div class="simple__outer">
        <div class="simple__inner">
            <div class="simple__wrapper">
                <div class="box-wrapper">
                    <div class="circle-wrapper">
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                        <div class="circle-4"></div>
                    </div>
                    <div class="center">
                       
                        <div class="center__wrapper">
                            <div class="center__left-container slide-to-right animate">
                                <div class="center__left-main-title h-32"><?php the_sub_field('simple_title-bold') ?>
                                    <i class="center__slim-title"><?php the_sub_field('simple_title-slim') ?></i>
                                </div>
                            </div>
                            <div class="list-wrapper slide-to-left animate">
                                <?php $simple_first_desc = get_sub_field('simple_first-desc');
                            if(!empty($simple_first_desc)) : ?>
                                <div class="center__first-txt">
                                    <span class="body-16"><?php the_sub_field('simple_first-desc') ?></span>
                                </div>
                                <?php endif;  ?>

                                <?php $simple_second_desc= get_sub_field('simple_second-desc');
                            if(!empty($simple_second_desc)) : ?>
                                <div class="center__second-txt">
                                    <span class="body-16"><?php the_sub_field('simple_second-desc') ?></span>
                                </div>
                                <?php endif;?>
                                <?php $simple_list = get_sub_field('simple_list');
                            if(!empty($simple_list)) : ?>
                                <div class="center__list-border">
                                    <?php if (have_rows('simple_list') ) :
                                while(have_rows('simple_list') ) : the_row(); ?>
                                    <div class="center__listOf-sub-item">
                                        <div class="center__dot">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                viewBox="0 0 6 6" fill="none">
                                                <circle cx="3" cy="3" r="3" fill="#7C69B7" />
                                            </svg>
                                        </div>
                                        <span
                                            class="center__sub-item body-16"><?php the_sub_field('simple_sub-item') ?></span>
                                    </div>
                                    <?php endwhile;
                                endif; ?>
                                </div>
                                <?php endif;?>
                                <?php $simple_link = get_field('simple_link');
                            if(!empty($simple_link)) : ?>
                                <div class="center__button-border">
                                    <?php 
                                $link = get_field('simple_link');
                                if($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a class="center__button  btn-purple-to-trans-black body-16"
                                        href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>