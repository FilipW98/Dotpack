<section class="problems">
    <div class="problems__outer">
        <div class="problems__inner">
            <div class="problems__wrapper">
                <div class="problems__main-title-border h-40 slide-up animate"><?php the_field('problems_main-title') ?>
                </div>
                <div class="slider-desktop__border">
                    <div class="slider-desktop__first-row slide-up animate">
                        <div class="vertical-line__first">
                            <div class="moving-ball-vertical-first"></div>
                        </div>
                        <div class="slider-desktop__box purple">
                            <div class="slider-desktop__box-inside">
                                <div class="slider-desktop__box-top-border">
                                    <?php if(have_rows('problems_purple-box') ): 
                                     while(have_rows('problems_purple-box') ): the_row(); ?>
                                    <?php 
                                        $link = get_sub_field('problems_purple-box-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <a class="slider-desktop__box-link" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                    <div class="slider-desktop__box-title body-24">
                                        <?php the_sub_field('problems_purple-box-title') ?></div>
                                    <div class="slider-desktop__box-img">
                                        <?php 
                                            $image = get_sub_field('problems_purple-box-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="slider-desktop__box-desc-border">
                                    <span
                                        class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_purple-box-desc') ?></span>
                                </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <?php if(have_rows('problems_box-first') ): 
                        while(have_rows('problems_box-first') ): the_row(); ?>
                        <div class="slider-desktop__box">
                            <div class="slider-desktop__box-inside">
                                <div class="slider-desktop__box-top-border">
                                    <?php 
                                        $link = get_sub_field('problems_box-first-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <a class="slider-desktop__box-link" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                    <div class="slider-desktop__box-title body-24">
                                        <?php the_sub_field('problems_box-first-title') ?></div>
                                    <div class="slider-desktop__box-img">
                                        <?php 
                                            $image = get_sub_field('problems_box-first-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="slider-desktop__box-desc-border">
                                    <span
                                        class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_box-first-desc') ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="slider-desktop__second-row slide-up animate">
                        <div class=" vertical-line__second">
                            <div class="moving-ball-vertical-second"></div>
                        </div>
                        <?php if(have_rows('problems_box-second') ): 
                        while(have_rows('problems_box-second') ): the_row(); ?>
                        <div class="slider-desktop__box">
                            <div class="slider-desktop__box-inside">
                                <div class="slider-desktop__box-top-border">
                                    <?php 
                                        $link = get_sub_field('problems_box-first-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <a class="slider-desktop__box-link" href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                    <div class="slider-desktop__box-title body-24">
                                        <?php the_sub_field('problems_box-first-title') ?></div>
                                    <div class="slider-desktop__box-img">
                                        <?php 
                                            $image = get_sub_field('problems_box-first-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="slider-desktop__box-desc-border">
                                    <span
                                        class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_box-first-desc') ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
                <div class="mobile-slider-arrow-border slide-to-left animate">
                    <button class="splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none"
                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" transform="matrix(-1,0,0,1,0,0)">
                            <circle cx="22.5" cy="22.5" r="22.5" transform="rotate(180 22.5 22.5)" fill="#7C69B7">
                            </circle>
                            <path
                                d="M11.25 22.9609C10.9739 22.9609 10.75 23.1848 10.75 23.4609C10.75 23.7371 10.9739 23.9609 11.25 23.9609L11.25 22.9609ZM34.1036 23.8145C34.2988 23.6192 34.2988 23.3026 34.1036 23.1074L30.9216 19.9254C30.7263 19.7301 30.4097 19.7301 30.2145 19.9254C30.0192 20.1207 30.0192 20.4372 30.2145 20.6325L33.0429 23.4609L30.2145 26.2894C30.0192 26.4846 30.0192 26.8012 30.2145 26.9965C30.4097 27.1917 30.7263 27.1917 30.9216 26.9965L34.1036 23.8145ZM11.25 23.9609L33.75 23.9609L33.75 22.9609L11.25 22.9609L11.25 23.9609Z"
                                fill="#FDFFFC"></path>
                        </svg>
                    </button>
                    <button class="splide__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                            <circle cx="22.5" cy="22.5" r="22.5" transform="rotate(180 22.5 22.5)" fill="#7C69B7" />
                            <path
                                d="M11.25 22.9609C10.9739 22.9609 10.75 23.1848 10.75 23.4609C10.75 23.7371 10.9739 23.9609 11.25 23.9609L11.25 22.9609ZM34.1036 23.8145C34.2988 23.6192 34.2988 23.3026 34.1036 23.1074L30.9216 19.9254C30.7263 19.7301 30.4097 19.7301 30.2145 19.9254C30.0192 20.1207 30.0192 20.4372 30.2145 20.6325L33.0429 23.4609L30.2145 26.2894C30.0192 26.4846 30.0192 26.8012 30.2145 26.9965C30.4097 27.1917 30.7263 27.1917 30.9216 26.9965L34.1036 23.8145ZM11.25 23.9609L33.75 23.9609L33.75 22.9609L11.25 22.9609L11.25 23.9609Z"
                                fill="#FDFFFC" />
                        </svg>
                    </button>
                </div>
                <div class="problems__splide splide">
                    <div class="splide__track fade animate">
                        <ul class="splide__list">
                            <?php
                            if (have_rows('problems_box-second')): 
                                $slides = array();
                                while (have_rows('problems_box-second')): the_row();
                                    ob_start(); 
                                    ?>
                            <li class="splide__slide mirror">
                                <div class="slider-desktop__box">
                                    <div class="slider-desktop__box-inside">
                                        <div class="slider-desktop__box-top-border">
                                            <?php 
                                        $link = get_sub_field('problems_box-first-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <a class="slider-desktop__box-link"
                                                href="<?php echo esc_url( $link_url ); ?>"
                                                target="<?php echo esc_attr( $link_target ); ?>">
                                                <?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                            <div class="slider-desktop__box-title body-24">
                                                <?php the_sub_field('problems_box-first-title') ?></div>
                                            <div class="slider-desktop__box-img">
                                                <?php 
                                            $image = get_sub_field('problems_box-first-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                            </div>
                                        </div>
                                        <div class="slider-desktop__box-desc-border">
                                            <span
                                                class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_box-first-desc') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                                    $slides[] = ob_get_clean();
                                endwhile;

                                $slides = array_reverse($slides);

                                foreach ($slides as $slide) {
                                    echo $slide;
                                }
                            endif;
                            ?>



                            <?php
                            if (have_rows('problems_box-first')): 
                                $slides = array();
                                while (have_rows('problems_box-first')): the_row();
                                    ob_start(); 
                                    ?>
                            <li class="splide__slide mirror2">
                                <div class="slider-desktop__box">
                                    <div class="slider-desktop__box-inside">
                                        <div class="slider-desktop__box-top-border">
                                            <?php 
                                        $link = get_sub_field('problems_box-first-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <a class="slider-desktop__box-link"
                                                href="<?php echo esc_url( $link_url ); ?>"
                                                target="<?php echo esc_attr( $link_target ); ?>">
                                                <?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                            <div class="slider-desktop__box-title body-24">
                                                <?php the_sub_field('problems_box-first-title') ?></div>
                                            <div class="slider-desktop__box-img">
                                                <?php 
                                            $image = get_sub_field('problems_box-first-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                            </div>
                                        </div>
                                        <div class="slider-desktop__box-desc-border">
                                            <span
                                                class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_box-first-desc') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                                    $slides[] = ob_get_clean();
                                endwhile;

                                $slides = array_reverse($slides);

                                foreach ($slides as $slide) {
                                    echo $slide;
                                }
                            endif;
                            ?>



                            <?php if(have_rows('problems_purple-box') ): 
                                     while(have_rows('problems_purple-box') ): the_row(); ?>
                            <li class="splide__slide">
                                <div class="slider-desktop__box purple">
                                    <div class="slider-desktop__box-inside">
                                        <div class="slider-desktop__box-top-border">

                                            <?php 
                                        $link = get_sub_field('problems_purple-box-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <a class="slider-desktop__box-link"
                                                href="<?php echo esc_url( $link_url ); ?>"
                                                target="<?php echo esc_attr( $link_target ); ?>">
                                                <?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                            <div class="slider-desktop__box-title body-24">
                                                <?php the_sub_field('problems_purple-box-title') ?></div>
                                            <div class="slider-desktop__box-img">
                                                <?php 
                                            $image = get_sub_field('problems_purple-box-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                            </div>
                                        </div>
                                        <div class="slider-desktop__box-desc-border">
                                            <span
                                                class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_purple-box-desc') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile;
                                endif; ?>
                            <?php if(have_rows('problems_box-first') ): 
                        while(have_rows('problems_box-first') ): the_row(); ?>
                            <li class="splide__slide">
                                <div class="slider-desktop__box">
                                    <div class="slider-desktop__box-inside">
                                        <div class="slider-desktop__box-top-border">
                                            <?php 
                                        $link = get_sub_field('problems_box-first-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <a class="slider-desktop__box-link"
                                                href="<?php echo esc_url( $link_url ); ?>"
                                                target="<?php echo esc_attr( $link_target ); ?>">
                                                <?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                            <div class="slider-desktop__box-title body-24">
                                                <?php the_sub_field('problems_box-first-title') ?></div>
                                            <div class="slider-desktop__box-img">
                                                <?php 
                                            $image = get_sub_field('problems_box-first-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                            </div>
                                        </div>
                                        <div class="slider-desktop__box-desc-border">
                                            <span
                                                class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_box-first-desc') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile;
                        endif; ?>
                            <?php if(have_rows('problems_box-second') ): 
                        while(have_rows('problems_box-second') ): the_row(); ?>
                            <li class="splide__slide">
                                <div class="slider-desktop__box">
                                    <div class="slider-desktop__box-inside">
                                        <div class="slider-desktop__box-top-border">
                                            <?php 
                                        $link = get_sub_field('problems_box-first-link');
                                        if($link): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <a class="slider-desktop__box-link"
                                                href="<?php echo esc_url( $link_url ); ?>"
                                                target="<?php echo esc_attr( $link_target ); ?>">
                                                <?php echo esc_html( $link_title ); ?></a>
                                            <?php endif; ?>
                                            <div class="slider-desktop__box-title body-24">
                                                <?php the_sub_field('problems_box-first-title') ?></div>
                                            <div class="slider-desktop__box-img">
                                                <?php 
                                            $image = get_sub_field('problems_box-first-img');
                                            $size = 'full';
                                            if($image){
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                            </div>
                                        </div>
                                        <div class="slider-desktop__box-desc-border">
                                            <span
                                                class="slider-desktop__box-desc body-16"><?php the_sub_field('problems_box-first-desc') ?></span>
                                        </div>
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
</section>