<section class="join-team">
    <div class="join-team__outer">
        <div class="join-team__inner">
            <h3 class="join-team__title h-40 fade animate">
                <?php the_field('join_team_title') ?>
            </h3>
            <!-- <div class="join-team__swiper-container"> -->
                <div class='join-team__splide splide'>
                    <div class='join-team__splide-track splide__track'>
                        <?php if( have_rows('persons') ): ?>
                            <ul class='join-team__splide-list splide__list'>
                                <?php while( have_rows('persons') ): the_row(); ?>
                                    <li class='join-team__splide-slide splide__slide'>
                                        <div class='join-team__slide-inner'>
                                            <div class="join-team__slide-img">
                                            <?php
                                                $image = get_sub_field('person');
                                                $size = array(392, 550);
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size, '', array('loading' => 'lazy' ));
                                                }
                                            ?>
                                            </div>
                                            <div class="join-team__slide-content">
                                                <div>
                                                    <p class="join-team__contetn-name body-18">
                                                        <?php the_sub_field('person_name') ?></p>
                                                    <p class="join-team__content-position body-16">
                                                        <?php the_sub_field('person_position') ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

            <!-- </div> -->
        </div>
    </div>
</section>

