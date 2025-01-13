<section class="additional-services">
    <div class="additional-services__outer">
        <div class="additional-services__inner">
            <div class="additional-services__wrapper">
                <div class="additional-services__left-box slide-to-right animate">
                    <div class="title-txt">
                        <div class="main-title h-40"><?php the_field('additional-services_main-title-bold') ?>
                        </div>
                        <span class="main-desc body-16"><?php the_field('additional-services_main-desc') ?></span>
                    </div>
                    <div class="images image-wrapper">
                        <?php if( have_rows('additional_services') ): 
                    while( have_rows('additional_services') ): the_row(); ?>
                        <div class="image" data-index="<?php echo get_row_index(); ?>">
                            <?php 
                            $image = get_sub_field('additional-services-img');
                            $size = 'full';
                            if($image){
                            echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <?php endwhile;
                    endif; ?>
                    </div>
                </div>
                <div class="additional-services__right-box slide-to-left animate">
                    <div class="container">
                        <?php if( have_rows('additional_services') ): 
                            while( have_rows('additional_services') ): the_row(); ?>
                        <div class="title">
                            <label class="txt-label">
                                <div class="label-title body-24">
                                    <?php the_sub_field('additional-services_title-bold') ?>
                                    <i><?php the_sub_field('additional-services_title-slim') ?></i>
                                </div>
                                <span class="dot"></span>
                            </label>
                            <div class="content">
                                <?php $additional_services_desc = get_sub_field('additional-services_desc');  
                                if (!empty($additional_services_desc)) : ?>
                                <span class="desc-txt body-16">
                                    <?php the_sub_field('additional-services_desc') ?>
                                </span>
                                <?php endif; ?>
                                <?php $additional_services_second_desc = get_sub_field('additional-services_second-desc');  
                                if (!empty($additional_services_second_desc)) : ?>
                                <span class="desc-txt-second body-16">
                                    <?php the_sub_field('additional-services_second-desc') ?>
                                </span>
                                <?php endif; ?>
                                <?php $additional_services_link_txt = get_sub_field('additional-services_link-txt'); 
                                if (!empty($additional_services_link_txt)) : ?>
                                <div class="link-none-border">
                                    <?php
                                        $link = get_sub_field('additional-services_link-txt');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <a class="none-border body-16" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                <?php $additional_services_link_txt_border = get_sub_field('additional-services_link-txt-border'); 
                                if (!empty($additional_services_link_txt_border)) : ?>
                                <div class="read-more-fill-border">
                                    <?php 
                                        $link = get_sub_field('additional-services_link-txt-border');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <a class="read-more-fill btn-purple-to-trans-black body-16"
                                        href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>