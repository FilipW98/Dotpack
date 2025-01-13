<section class="intro">
    <div class="intro__outer">

        <div class="intro__background-wrap">
            <?php 

            // ta sekcja posiada 3 rzeczy
            // middle - sklada sie z 2 bloków, pierwszy to sam tytuł drugi to tytuł + opis + 2 przyciski
            // Jak oba będą wypełnione to będą się oba pojawiać więc albo uzupełnić jeden blok albo drugi. Elementy z bloku tytuł+opis ... nie będą się pojawiać jeśli będą puste

            // W Przypadku tła, priorytet posiada video, Jak video nie będzie uzupełnione to pokaze się grafika w tle, 
            // Gdy będzie uzupelniona grafika ORAZ video, to grafika będzie sluzyla jako poster dla cideo

                $video_link = get_field('intro_video'); 
                $image_id = get_field('intro_bgimage');
                $image_id_mobile = get_field('intro_bgimage_mobile');

                // displays the video if there is one to show
                if($video_link):
            ?>
            <div class="intro__background-video">
                <video autoplay="true" loop="true" muted="true" playsinline="" id="intro-video"
                    poster="<?php if($image_id){echo wp_get_attachment_image_url( $image_id, 'full' ); } ?>">
                    <source src="" data-src="<?php echo $video_link; ?>" type="video/mp4">
                    Twoja przeglądarka nie wspiera odtwarzania plików wideo.
                </video>
            </div>
            <?php  endif; ?>


            <?php // displays the image whene there is no video
            if($image_id && !$video_link): ?>
            <div class="intro__background-image desktop">
                <?php echo wp_get_attachment_image( $image_id, 'full' );  ?>
            </div>
            <div class="intro__background-image mobile">
                <?php echo wp_get_attachment_image( $image_id_mobile, 'full' );  ?>
            </div>

            <?php  endif; ?>

        </div>
        <div class="intro__inner animate fade">

            <div class="intro__middle">
                <?php
                $add_title = get_field( 'intro_add_title' );
                if($add_title != '' && $add_title != ' '): ?>
                <div class="intro__middle-title-only">
                    <h1 class="intro__middle-title-only-text display-79">
                        <?php echo $add_title; ?>
                    </h1>
                </div>
                <?php endif; ?>

                <?php // this is a GROUP
                    if( have_rows('intro_block') ): ?>
                <?php   while( have_rows('intro_block') ): the_row(); 
                        $block_title  = get_sub_field('block_title');
                        $block_desc  = get_sub_field('block_desc');
                        $block_link_1  = get_sub_field('block_button_link_1');
                        $block_link_2  = get_sub_field('block_button_link_2');

                        // $block_title  = false;
                        // $block_desc  = false;
                        // $block_link_1  = false;
                        // $block_link_2  = false;
                        if(!$block_title && !$block_desc && !$block_link_1 && !$block_link_2):
                    ?>
                <?php else: ?>
                <div class="intro__middle-box ">

                    <?php if($block_title): ?>
                    <div class="intro__middle-box-title">
                        <h1 class="intro__middle-box-title-text display-79">
                            <?php echo $block_title; ?>
                        </h1>
                    </div>
                    <?php endif; ?>

                    <?php if($block_desc): ?>
                    <div class="intro__middle-box-desc">
                        <p class="intro__middle-box-desc-text body-18">
                            <?php echo $block_desc; ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($block_link_1 || $block_link_2): ?>
                    <div class="intro__middle-box-buttons">

                        <?php if($block_link_1):
                            $link = $block_link_1;
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                        <div class="intro__middle-box-buttons-btn">
                            <a href="<?php echo esc_url( $link_url ); ?>"
                                class="intro__middle-box-buttons-btn-link btn-white-to-trans body-16"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                        <?php if($block_link_2): 
                            $link = $block_link_2;
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <div class="intro__middle-box-buttons-btn">
                            <a href="<?php echo esc_url( $link_url ); ?>"
                                class="intro__middle-box-buttons-btn-link btn-trans-to-white body-16"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>


                </div>
                <?php endif; ?>


                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php if(have_rows('intro_firm_data')): ?>
            <div class="intro__bottom splide ">
                <a href="/o-firmie/" class="intro__bottom-inside splide__track">
                    <ul class='intro__bottom-list splide__list'>
                        <?php while( have_rows('intro_firm_data') ): the_row(); ?>
                        <li class='intro__bottom-slide splide__slide'>
                            <div class="intro__bottom-elem">
                                <div class="intro__bottom-elem-wrapper">
                                    <span class="intro__bottom-elem-up body-24">
                                        <?php echo get_sub_field('firm_data_top') ?>
                                    </span>
                                    <span class="intro__bottom-elem-down body-16">
                                        <?php echo get_sub_field('firm_data_bottom') ?>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>