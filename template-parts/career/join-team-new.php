<section class="join-team">
    <div class="join-team__outer">
        <div class="join-team__inner">
            <h3 class="join-team__title h-40 fade animate">
                <?php the_field('join_team_title') ?>
            </h3>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php if( have_rows('persons') ): ?>
                    <?php while( have_rows('persons') ): the_row(); ?>
                    <div class='swiper-slide swiper-slide--one'>
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
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true
        },
        keyboard: {
            enabled: true
        },
        mousewheel: {
            thresholdDelta: 70
        },
        spaceBetween: 50,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });
});
</script>