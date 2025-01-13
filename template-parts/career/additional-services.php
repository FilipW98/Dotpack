<section class="additional-services">
    <div class="additional-services__outer">
        <div class="additional-services__inner">
            <div class="additional-services__wrapper">
                <div class="additional-services__left-box">
                    <div class="title-txt">
                        <div class="main-title h-40"><?php the_field('additional-services_main-title-bold') ?> <i
                                class="thin-text"><?php the_field('additional-services_main-title-slim') ?></i></div>
                        <span class="main-desc body-16"><?php the_field('additional-services_main-desc') ?></span>
                    </div>
                    <div class="images image-wrapper">
                        <?php if( have_rows('additional_services') ): 
                    while( have_rows('additional_services') ): the_row(); ?>
                        <div class="image" data-index="<?php echo get_row_index(); ?>">
                            <?php 
                            $image = get_sub_field('additional-services-img');
                            $size = array(464, 358);
                            if($image){
                            echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <?php endwhile;
                    endif; ?>
                    </div>
                </div>
                <div class="additional-services__right-box">
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
                                <span class="desc-txt body-16">
                                    <?php the_sub_field('additional-services_desc') ?>
                                </span>
                                <span
                                    class="desc-txt-second body-16"><?php the_sub_field('additional-services_second-desc') ?></span>
                                <a href=""
                                    class="read-more body-16"><?php the_sub_field('additional-services_link-txt') ?></a>
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