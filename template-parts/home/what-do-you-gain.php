<section class="what-do-you-gain">
    <div class="what-do-you-gain__outer">
        <div class="what-do-you-gain__inner">
            <div class="what-do-you-gain__wrapper">
                <div class="what-do-you-gain__img-border">
                    <div class="what-do-you-gain__img-wrapper">
                        <?php 
                            $image = get_field('what-do-you-gain_image-background');
                            $size = 'full';
                            $attr = array('class' => 'img-big');
                            if($image){
                                echo wp_get_attachment_image($image, $size, false, $attr);
                            }
                        ?>
                        <div class="inside">
                            <div class="left__container">
                                <div class="left__txt-wrapper slide-to-right animate">
                                    <div class="left__title-border display-79">
                                        <span
                                            class="left__title"><?php the_field('what-do-you-gain_main-title') ?></span>
                                    </div>
                                    <div class="left__desc-border body-24">
                                        <span class="left__desc"><?php the_field('what-do-you-gain_main-desc') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="right__containerlist desktop">
                                <div class="right__first-column slide-to-left animate">
                                    <?php if( have_rows('what-do-you-gain_first-column') ):
                                    while( have_rows('what-do-you-gain_first-column') ): the_row(); ?>
                                    <div class="right__box desktop">
                                        <div class="right__box-inside">
                                            <div class="txt-first-row">
                                                <div class="txt-title">
                                                    <span
                                                        class="txt-title body-16"><?php the_sub_field('what-do-you-gain_title') ?></span>
                                                </div>
                                                <?php 
                                                    $image = get_sub_field('what-do-you-gain_img');
                                                    $size = 'full';
                                                    if($image){
                                                        echo wp_get_attachment_image($image, $size);
                                                    }
                                                ?>
                                            </div>
                                            <div class="txt-second-row">
                                                <span
                                                    class="body-14"><?php the_sub_field('what-do-you-gain_desc') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                                <div class="right__second-column slide-to-left animate">
                                    <?php if( have_rows('what-do-you-gain_second-column') ):
                                    while( have_rows('what-do-you-gain_second-column') ): the_row(); ?>
                                    <div class="right__box desktop">
                                        <div class="right__box-inside">
                                            <div class="txt-first-row">
                                                <div class="txt-title">
                                                    <span
                                                        class="txt-title body-16"><?php the_sub_field('what-do-you-gain_title-second') ?></span>
                                                </div>
                                                <?php 
                                                    $image = get_sub_field('what-do-you-gain_img-second');
                                                    $size = 'full';
                                                    if($image){
                                                        echo wp_get_attachment_image($image, $size);
                                                    }
                                                ?>
                                            </div>
                                            <div class="txt-second-row">
                                                <span
                                                    class="body-14"><?php the_sub_field('what-do-you-gain_desc-second') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                            <div class="what-do-you-gain__splide splide slide-up animate">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <?php if( have_rows('what-do-you-gain_first-column') ):
                                    while( have_rows('what-do-you-gain_first-column') ): the_row(); ?>
                                        <li class="splide__slide">
                                            <div class="right__box-mobile">
                                                <div class="right__box-inside mobile">
                                                    <div class="txt-first-row mobile">
                                                        <div class="txt-title mobile">
                                                            <span
                                                                class="txt-title mobile body-16"><?php the_sub_field('what-do-you-gain_title') ?></span>
                                                        </div>
                                                        <?php 
                                                    $image = get_sub_field('what-do-you-gain_img');
                                                    $size = 'full';
                                                    if($image){
                                                        echo wp_get_attachment_image($image, $size);
                                                    }
                                                ?>
                                                    </div>
                                                    <div class="txt-second-row mobile">
                                                        <span
                                                            class="mobile body-14"><?php the_sub_field('what-do-you-gain_desc') ?></span>
                                                    </div>
                                                </div>
                                        </li>
                                        <?php endwhile;
                                    endif; ?>
                                        <?php if( have_rows('what-do-you-gain_second-column') ):
                                    while( have_rows('what-do-you-gain_second-column') ): the_row(); ?>
                                        <li class="splide__slide">
                                            <div class="right__box-mobile">
                                                <div class="right__box-inside mobile">
                                                    <div class="txt-first-row mobile">
                                                        <div class="txt-title mobile">
                                                            <span
                                                                class="txt-title mobile body-16"><?php the_sub_field('what-do-you-gain_title-second') ?></span>
                                                        </div>
                                                        <?php 
                                                    $image = get_sub_field('what-do-you-gain_img-second');
                                                    $size = 'full';
                                                    if($image){
                                                        echo wp_get_attachment_image($image, $size);
                                                    }
                                                ?>
                                                    </div>
                                                    <div class="txt-second-row mobile">
                                                        <span
                                                            class="mobile body-14"><?php the_sub_field('what-do-you-gain_desc-second') ?></span>
                                                    </div>
                                                </div>
                                        </li>
                                        <?php endwhile;
                                    endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>