<footer class='footer'>
    <?php //by:ZS ?>
    <div class='footer__outer'>
        <div class='footer__inner'>
            <div class="footer__main-bar">
                <div class="footer__contact-box">
                    <div class="footer__logo-box">
                        <a href="/">
                            <?php print_svg(350); ?>
                        </a>
                    </div>
                    <div class="footer__contact-box">
                        <div class='footer__phone-button'>
                            <?php
                            $link = get_field('phone_global', 'option');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <a class='footer__phone-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'>
                                <?php print_svg(382) ?>
                                <?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <div class='footer__email-button'>
                            <?php
                            $link = get_field('email_global', 'option');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <a class='footer__email-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'>
                                <?php print_svg(381) ?>
                                <?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <div class='footer__address-button'>
                            <?php
                            $link = get_field('adsress_global', 'option');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <a class='footer__address-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'>
                                <?php print_svg(380) ?>
                                <span><?php echo esc_html( $link_title ); ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="footer__social-contact-box">
                        <div class='footer__messenger-button'>
                            <?php
                            $link = get_field('messenger_global', 'option');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <a class='footer__messenger-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'>
                                <?php print_svg(351) ?></a>
                            <?php endif; ?>
                        </div>
                        <div class='footer__whatsapp-button'>
                            <?php
                            $link = get_field('whatsapp_global', 'option');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <a class='footer__whatsapp-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'>
                                <?php print_svg(68) ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="footer__company-data-box">
                        <h3 class="footer__company-date-text">
                            <?php $value  = apply_filters( 'orphan_replace', 'Dane firmy' );?>
                            <?php _e("$value", 'happy') ?>
                        </h3>
                        <p class="footer__krs">
                            <?php  echo "KRS: " . get_field('footer_krs', 'option') ?>
                        </p>
                        <p class="footer__nip">
                            <?php echo "NIP: " . get_field('footer_nip', 'option') ?>
                        </p>
                        <p class="footer__regon">
                            <?php echo "REGON: " . get_field('footer_regon', 'option') ?>
                        </p>
                    </div>
                </div>
                <div class="footer__navs-box">
                    <?php if( have_rows('footer_pages_navigations_group', 'option') ): ?>
                    <?php while( have_rows('footer_pages_navigations_group', 'option') ): the_row(); ?>
                    <?php if( have_rows('footer_services_repeater', 'option') ): ?>
                    <nav class="footer__services-nav">
                        <?php while( have_rows('footer_services_repeater', 'option') ): the_row(); ?>
                        <div class='footer__service-button'>
                            <?php
                                            $link = get_sub_field('footer_service_btn', 'option');
                                            if( $link ):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                            <a class='footer__service-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </nav>
                    <?php endif; ?>
                    <?php if( have_rows('footer_solutions_repeater', 'option') ): ?>
                    <nav class="footer__solutions-nav">
                        <?php while( have_rows('footer_solutions_repeater', 'option') ): the_row(); ?>
                        <div class='footer__solution-button'>
                            <?php
                                            $link = get_sub_field('footer_solution_btn', 'option');
                                            if( $link ):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                            <a class='footer__solution-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </nav>
                    <?php endif; ?>
                    <?php if( have_rows('footer_company_repeater', 'option') ): ?>
                    <nav class="footer__company-nav">
                        <?php while( have_rows('footer_company_repeater', 'option') ): the_row(); ?>
                        <div class='footer__company-button'>
                            <?php
                                            $link = get_sub_field('footer_company_btn', 'option');
                                            if( $link ):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                            <a class='footer__company-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </nav>
                    <?php endif; ?>
                    <?php if( have_rows('footer_pages_repeater', 'option') ): ?>
                    <nav class="footer__pages-nav">
                        <?php while( have_rows('footer_pages_repeater', 'option') ): the_row(); ?>
                        <div class='footer__page-button'>
                            <?php
                                            $link = get_sub_field('footer_page_btn', 'option');
                                            if( $link ):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                            <a class='footer__page-link' href='<?php echo esc_url( $link_url ); ?>'
                                target='<?php echo esc_attr( $link_target ); ?>'><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </nav>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer__black-bar">
                <span class="footer__copyright-box">
                    <?php $value  = apply_filters( 'orphan_replace', 'Wszelkie prawa zastrzeżone.' ); ?>
                    <?php _e('©'.date("Y")." Dotpack. ".$value, 'happy') ?>
                </span>
                <div class="footer__socials-box">
                    <div class='footer__facebook-button'>
                        <?php
                        $link = get_field('facebook_global', 'option');
                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class='footer__facebook-link' href='<?php echo esc_url( $link_url ); ?>'
                            target='<?php echo esc_attr( $link_target ); ?>'>
                            <?php print_svg(348) ?></a>
                        <?php endif; ?>
                    </div>
                    <div class='footer__instagram-button'>
                        <?php
                        $link = get_field('instagram_global', 'option');
                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class='footer__instagram-link' href='<?php echo esc_url( $link_url ); ?>'
                            target='<?php echo esc_attr( $link_target ); ?>'>
                            <?php print_svg(347) ?></a>
                        <?php endif; ?>
                    </div>
                    <div class='footer__linkedin-button'>
                        <?php
                        $link = get_field('linkedin_global', 'option');
                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class='footer__linkedin-link' href='<?php echo esc_url( $link_url ); ?>'
                            target='<?php echo esc_attr( $link_target ); ?>'>
                            <?php print_svg(346) ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="footer__right-box">
                    <div class="footer__privacy-btn">
                        <?php $original_page_id = 3;
                        $current_language_page_id = pll_get_post( $original_page_id ); ?>
                        <a href="<?php echo get_permalink( $current_language_page_id ); ?>"
                            class="footer__privacy-link">
                            <?php $value  = apply_filters( 'orphan_replace', 'Polityka prywatności i regulamin' );?>
                            <?php _e("$value", 'happy') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__code-bar">
                <div class="footer__code-btn">
                    <a href="https://code-hi.pl/?link-src=dotpack" class="footer__code-link" target="_blank">
                        <span class="footer__code-text">
                            <?php $value  = apply_filters( 'orphan_replace', 'Strona stworzona przez' );?>
                            <?php _e("$value", 'happy') ?>
                        </span>
                        <span class="footer__code-svg">
                            <?php print_svg(345) ?>
                        </span>
                    </a>
                </div>

                <a href="https://piotrkaleta.pl/" class="footer__code-content" target="_blank">
                    <span class="footer__code-content-text">
                        <?php $value  = apply_filters( 'orphan_replace', 'Treść przygotował');?>
                        <?php _e("$value", 'happy') ?>
                    </span>
                    <span class="footer__code-content-svg">
                        <?php print_svg(1635) ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
</footer>


<script type="module">
document.addEventListener('DOMContentLoaded', function() {
    console.log('test2');
    if (document.querySelector('.page-template-contact') || document.querySelector(
            '.page-template-about-us')) {

        const btns = document.querySelectorAll('.meet-team__items-item-content-btn');
        const arrow = document.querySelector('.meet-team__splide-arrows .splide__arrow--next');

        const clickSliderBtn = () => {
            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                    arrow.click();
                })
            });
        };

        const meetTeamSliderElement = document.querySelector('.meet-team__splide');

        if (meetTeamSliderElement) {
            const meetTeamSlider = new Splide('.meet-team__splide', {

                perPage: 1,
                focus: 'center',
                pagination: false,
                arrows: true,
                loop: true,
                perMove: 1,
                gap: '1rem',
                updateOnMove: true,
                type: 'fade',
                rewind: true,

                breakpoints: {

                    767: {
                        perPage: 2
                    },
                    575: {
                        perPage: 1
                    },
                },
            });

            meetTeamSlider.on('mounted', () => {
                const totalSlides = meetTeamSlider.Components.Elements.slides.length;

                meetTeamSlider.Components.Elements.slides.forEach((slide, index) => {
                    const counterContainer = document.createElement('div');
                    counterContainer.className = 'splide__counter';
                    counterContainer.innerHTML =
                        `<span class="splide__current-slide">${index + 1}</span>/<span class="splide__total-slides">${totalSlides}</span>`;
                    const bottomContent = slide.querySelector(
                        '.meet-team__items-item-content-bottom');
                    if (bottomContent) {
                        bottomContent.appendChild(counterContainer);
                    }
                });

                meetTeamSlider.on('move', () => {
                    const currentIndex = meetTeamSlider.Components.Controller.getIndex() + 1;
                    const currentSlideEl = meetTeamSlider.Components.Elements.slides[
                        currentIndex - 1].querySelector('.splide__current-slide');
                    currentSlideEl.innerHTML = currentIndex;
                });
            });
            meetTeamSlider.mount();

        }
        clickSliderBtn();
    }


    if (document.querySelector('.page-template-career')) {

        const joinTeamSwiper = new Splide(".join-team__splide", {
            pagination: false,
            arrows: false,
            // perPage: 3,
            gap: '16px',
            type: 'loop',
            focus: 'center',
            autoWidth: true,
            autoHeight: true,
            perMove: 1,


            //     on: {
            // init: function() {
            //     document.querySelectorAll('.swiper-slide').forEach(slide => {
            //         slide.style.width = '324px';
            //         slide.style.height = '454px';
            //     });
            //     document.querySelectorAll('.swiper-slide.swiper-slide-active').forEach(slide => {
            //         slide.style.width = '392px';
            //         slide.style.height = '550px';
            //     });
            // }
            // }
            // effect: "coverflow",
            // coverflowEffect: {
            //     rotate: 0,
            //     stretch: 0,
            //     depth: 100,
            //     modifier: 2.5,
            // },
            // keyboard: {
            //     enabled: true
            // },
            // mousewheel: {
            //     thresholdDelta: 70
            // },
            // breakpoints: {
            //     640: {
            //         slidesPerView: 3
            //     },
            //     767: {
            //         spaceBetween: 36,
            //     },
            //     1024: {
            //         slidesPerView: 3
            //     }
            // }
        });
        // joinTeamSwiper.slideTo(1, false, false);
        joinTeamSwiper.mount();
    }


    if (document.querySelector('.page-template-about-us') || document.querySelector('.page-template-home') ||
        document.querySelector('.page-template-services') || document.querySelector(
            '.page-template-integrations') || document.querySelector('.page-template-privacy-policy') ||
        document.querySelector('.page-template-faq') || document.querySelector('.single-post')) {

        const readMoreSliderElement = document.querySelector('.read-more__splide');

        if (readMoreSliderElement) {
            const readMoreSlider = new Splide('.read-more__splide', {

                perPage: 2,
                focus: 'center',
                pagination: false,
                arrows: false,
                loop: true,
                perMove: 2,
                gap: '1rem',
                drag: true,
                grabCursor: true,
                breakpoints: {
                    767: {
                        perPage: 2
                    },
                    575: {
                        perPage: 1
                    },
                },
            });

            readMoreSlider.on('mounted move', () => {
                const slides = document.querySelectorAll('.splide__slide');
                const currentIndex = readMoreSlider.Components.Controller.getIndex();
                slides.forEach((slide, index) => {
                    slide.classList.remove('large', 'normal');
                    if (index === currentIndex) {
                        slide.classList.add('large');
                    } else {
                        slide.classList.add('normal');
                    }
                });
            });
            readMoreSlider.mount();
        }
    }

    if (document.querySelector('.page-template-home')) {

        const readMoreSliderElement = document.querySelector('.what-do-you-gain__splide');

        if (readMoreSliderElement) {
            const readMoreSlider = new Splide('.what-do-you-gain__splide', {

                // perPage: 1,
                focus: 'center',
                pagination: false,
                arrows: false,
                loop: true,
                perMove: 1,
                gap: '16px',
                drag: true,
                grabCursor: true,
                type: 'loop',
                autoplay: true,


                // updateOnMove: true,
                // type: 'fade',
                // rewind: true,

                breakpoints: {

                    767: {
                        perPage: 2
                    },
                    575: {
                        perPage: 1
                    },
                },
            });

            readMoreSlider.on('mounted move', () => {
                const slides = document.querySelectorAll('.mobile-slider__splide');
                const currentIndex = readMoreSlider.Components.Controller.getIndex();
                slides.forEach((slide, index) => {
                    slide.classList.remove('large', 'normal');
                    if (index === currentIndex) {
                        slide.classList.add('large');
                    } else {
                        slide.classList.add('normal');
                    }
                });
            });
            readMoreSlider.mount();

        }


    }

    if (document.querySelector('.page-template-home')) {

        const readMoreSliderElement = document.querySelector('.problems__splide');

        if (readMoreSliderElement) {
            const readMoreSlider = new Splide('.problems__splide', {
                focus: 'center',
                pagination: false,
                arrows: false,
                loop: false,
                perMove: 1,
                gap: '16px',
                drag: true,
                grabCursor: true,
                // type: 'loop',
                autoplay: false,

                breakpoints: {
                    767: {
                        perPage: 2
                    },
                    575: {
                        perPage: 1
                    },
                },
            });

            document.querySelector('.splide__arrow--prev').addEventListener('click', () => {
                readMoreSlider.go('<');
            });

            document.querySelector('.splide__arrow--next').addEventListener('click', () => {
                readMoreSlider.go('>');
            });

            readMoreSlider.on('mounted', () => {
                for (let i = 0; i < 4; i++) {
                    readMoreSlider.go('>');
                }

                const slides = document.querySelectorAll('.mobile-slider__splide');
                const currentIndex = readMoreSlider.Components.Controller.getIndex();
                slides.forEach((slide, index) => {
                    slide.classList.remove('large', 'normal');
                    if (index === currentIndex) {
                        slide.classList.add('large');
                    } else {
                        slide.classList.add('normal');
                    }
                });
            });

            readMoreSlider.mount();
        }
    }
})
</script>



<?php wp_footer( ); ?>
</body>

</html>