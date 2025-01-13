<section class="trust">
    <div class="trust__outer">
        <h2 class="main-title h-40">
            <?php echo $value = apply_filters( 'orphan_replace', 'Poznaj osoby, które <i>zaufały Dotpack</i>' ); ?>
            <?php  //echo $value = apply_filters( 'orphan_replace', 'Kto nam zaufał' ); ?>
            <?php //the_field('trust_title'); ?>
        </h2>
        <div class="trust__inner">
            <div class="trust__wrapper">
                <div class="carousel-border">
                    <div class="carousel-wrapper">
                        <div class="circle-move"></div>
                        <div class="logo-border">
                            <div class="svg-border">
                                <svg class="carousel" width="494" height="494" viewBox="0 0 494 494" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M399.806 53.9412C506.509 138.379 524.558 293.33 440.119 400.033C355.681 506.735 200.731 524.784 94.028 440.346C-12.6747 355.908 -30.7236 200.957 53.7146 94.2546C138.153 -12.4481 293.103 -30.4971 399.806 53.9412Z"
                                        stroke="url(#paint0_linear_799_9136)" stroke-width="0.8" />
                                    <defs>
                                        <linearGradient id="paint0_linear_799_9136" x1="-53.3574" y1="228.915"
                                            x2="587.786" y2="154.233" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7209B7" />
                                            <stop offset="0.328791" stop-color="white" />
                                            <stop offset="0.508765" stop-color="#E4D0F1" />
                                            <stop offset="0.717957" stop-color="white" />
                                            <stop offset="0.861703" stop-color="#7209B7" />
                                            <stop offset="0.952858" stop-color="#A7A2A2" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="center-box">
                                <div class="box-logo center animate"></div>
                            </div>
                            <?php if( have_rows('trust_repeater', 8) ): ?>
                            <?php $logo_count = 1; ?>
                            <?php while( have_rows('trust_repeater', 8) ): the_row(); ?>
                            <div class="box-logo logo-<?php echo $logo_count; ?>">
                                <?php
                                            $image = get_sub_field('trust_dot_logo');
                                            $size = array(100, 9999);
                                            $attr = array('class' => 'logo');
                                            if( $image ) {
                                                echo wp_get_attachment_image( $image, $size, '', array('loading' => 'lazy' ));
                                            }
                                        ?>
                            </div>
                            <?php $logo_count++; endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class='trust__splide splide slide-to-left animate'>
                    <div class="trust__splide-arrows splide__arrows">
                        <button class="trust__splide-arrow splide__arrow trust__splide-arrow--prev splide__arrow--prev">
                            <?php print_svg(1178) ?>
                        </button>
                        <button class="trust__splide-arrow splide__arrow trust__splide-arrow--next splide__arrow--next">
                            <?php print_svg(1178) ?>
                        </button>
                    </div>
                    <div class='trust__track splide__track'>
                        <?php if( have_rows('trust_repeater', 8) ): ?>
                        <ul class='trust__list splide__list'>
                            <?php while( have_rows('trust_repeater', 8) ): the_row(); ?>
                            <li class='trust__slide splide__slide'>
                                <div class='trust__slide-inner'>
                                    <div class="trust__slide-img">
                                        <?php
                                                    $image = get_sub_field('trust_image');
                                                    $size = array(457, 316);
                                                    if( $image ) {
                                                        echo wp_get_attachment_image( $image, $size, '', array('loading' => 'lazy' ));
                                                    }
                                                ?>
                                    </div>
                                    <div class="trust__slide-text-box">
                                        <div class="trust__slide-name-box">
                                            <h3 class="trust__slide-name">
                                                <?php the_sub_field('trust_name') ?>
                                            </h3>
                                            <div class="trust__slide-logo">
                                                <?php
                                                            $image = get_sub_field('trust_logo');
                                                            $size = array(115, 9999);
                                                            if( $image ) {
                                                                echo wp_get_attachment_image( $image, $size, '', array('loading' => 'lazy' ));
                                                            }
                                                        ?>
                                            </div>
                                        </div>
                                        <div class="trust__slide-description-box">
                                            <div class="trust__slide-description">
                                                <?php the_sub_field('trust_desc') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    let homeTrustSplide;
    document.addEventListener("DOMContentLoaded", function() {
        homeTrustSplide = new Splide(".trust__splide", {
            type: "fade",
            pagination: false,
            drag: false,
            classes: {
                arrows: "splide__arrows trust__splide-arrows",
                arrow: "splide__arrow trust__splide-arrow",
                prev: "splide__arrow--prev trust__splide-arrow--prev",
                next: "splide__arrow--next trust__splide-arrow--next",
            },

            // breakpoints: {
            //     1199: { gap: "16px" },
            //     991: { perPage: 2 },
            //     767: {
            //         perPage: 3,
            //         direction: "ttb",
            //         height: "1300px",
            //     },
            // },
        }).mount();
    });


    const ball = document.querySelector('.box-logo.center');
    const container = document.querySelector('.center-box');

    let posY = 0; // Pozycja Y piłki
    let velocity = 0; // Prędkość piłki
    const gravity = 0.5; // Przyspieszenie grawitacyjne
    const bounceFactor = 0.9; // Czynnik odbicia
    let isFalling = true; // Flaga do określenia, czy piłka spada
    let isAnimated = false;

    function animate() {
        if (isFalling) {
            // Zwiększamy prędkość w dół przez grawitację
            velocity += gravity;
            posY += velocity;

            // Sprawdzenie, czy piłka dotyka podłogi
            if (posY >= container.clientHeight - 92) { // 50 to wysokość piłki
                posY = container.clientHeight - 92; // Ustawiamy na poziomie podłogi
                velocity = -velocity * bounceFactor; // Odbicie piłki
                // Sprawdzenie, czy piłka powinna się zatrzymać
                if (Math.abs(velocity) < 1) {
                    velocity = 0; // Zatrzymujemy piłkę
                    isFalling = false; // Zmieniamy flagę
                }
            }
        }

        // Ustawiamy pozycję piłki w kontenerze
        ball.style.bottom = `${container.clientHeight - posY - 50}px`; // Ustawiamy pozycję piłki od dołu

        requestAnimationFrame(animate); // Powtarzamy animację
    }

    // Rozpoczęcie animacji
    </script>
</section>