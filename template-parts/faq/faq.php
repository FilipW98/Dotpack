<section class="faq">
    <div class="faq__outer">
        <div class="faq__inner">
            <div class="faq__wrapper">
                <div class="main-title-border">
                    <span class="main-title h-40 slide-to-right animate"><?php the_field('faq_main-title') ?></span>
                    <div class="search slide-to-left animate">
                        <div class="search__border">
                            <!-- <span class="search__txt body-16">Szukaj</span> -->
                            <input type="text" class="search__input" placeholder="Szukaj">

                            <svg class="search__peel" xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                viewBox="0 0 17 16" fill="none">
                                <g clip-path="url(#clip0_794_3027)">
                                    <path
                                        d="M16.3045 14.8628L12.3252 10.8835C13.4096 9.55723 13.9428 7.86489 13.8144 6.15654C13.6861 4.44819 12.906 2.85452 11.6356 1.70518C10.3652 0.555838 8.70158 -0.0612406 6.98895 -0.0184194C5.27632 0.0244018 3.64566 0.723847 2.43426 1.93524C1.22287 3.14663 0.523425 4.77729 0.480604 6.48993C0.437783 8.20256 1.05486 9.86614 2.2042 11.1366C3.35354 12.407 4.94721 13.187 6.65556 13.3154C8.36392 13.4438 10.0563 12.9106 11.3825 11.8262L15.3619 15.8055C15.4876 15.9269 15.656 15.9941 15.8308 15.9926C16.0056 15.9911 16.1728 15.921 16.2964 15.7974C16.42 15.6738 16.4901 15.5066 16.4916 15.3318C16.4932 15.157 16.426 14.9886 16.3045 14.8628ZM7.16652 12.0008C6.11169 12.0008 5.08054 11.688 4.20348 11.102C3.32642 10.516 2.64283 9.68301 2.23916 8.70848C1.8355 7.73394 1.72988 6.66158 1.93567 5.62702C2.14145 4.59245 2.64941 3.64214 3.39529 2.89626C4.14117 2.15038 5.09147 1.64243 6.12604 1.43664C7.1606 1.23085 8.23296 1.33647 9.2075 1.74014C10.182 2.14381 11.015 2.82739 11.601 3.70446C12.1871 4.58152 12.4999 5.61266 12.4999 6.6675C12.4983 8.0815 11.9359 9.43713 10.936 10.437C9.93615 11.4368 8.58052 11.9992 7.16652 12.0008Z"
                                        fill="#1A202C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_794_3027">
                                        <rect width="16" height="16" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="faq-list">
                    <div class="faq-list__wrapper" id="faqList">
                        <ul class="list">
                            <?php if( have_rows('faq') ): ?>
                            <?php while( have_rows('faq') ): the_row(); ?>
                            <li class="faq-list__box">
                                <div class="faq-list__desc-wrapper fade animate">
                                    <div class="faq-list__txt-wrapper">
                                        <div class="faq-list__title-border">
                                            <span
                                                class="faq-list__title body-18 name"><?php the_sub_field('faq_title') ?></span>
                                            <span class="faq-dot"></span>
                                        </div>
                                        <?php $faq_desc = get_sub_field('faq_desc'); if (!empty($faq_desc)) : ?>
                                        <div class="faq-list__desc-border" id="desc-<?php echo get_row_index(); ?>">
                                            <span
                                                class="faq-list__desc body-16 desc"><?php the_sub_field('faq_desc') ?></span>
                                        </div>
                                        <?php endif; ?>
                                        <div class="button-border">
                                            <span class="button-border__title body-16"><i>Nie dostałeś odpowiedzi na
                                                    swoje pytania?</i></span>
                                            <div class="button-border__button-border">
                                                <a href="https://dot.hiforyou.pl/kontakt/"
                                                    class="button-border__button btn-purple-to-trans-black">Skontaktuj
                                                    się z nami</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script> -->
    <script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const options = {
    //         valueNames: ['name', 'desc'], // Używamy klasy .name i .desc do filtrowania
    //         searchClass: 'fuzzy-search' // Używamy fuzzy search
    //     };
    //     const faqList = new List('faqList', options);

    //     // Dodajemy obsługę inputu do wyszukiwania
    //     const searchInput = document.querySelector('.search__input');
    //     searchInput.addEventListener('keyup', function() {
    //         const searchString = searchInput.value;
    //         faqList.fuzzySearch(searchString);
    //     });
    // });

    document.addEventListener('DOMContentLoaded', function() {
        const options = {
            valueNames: ['name', 'desc'], // Używamy klasy .name i .desc do filtrowania
            searchClass: 'fuzzy-search' // Używamy fuzzy search
        };
        const faqList = new List('faqList', options);

        // Dodajemy obsługę inputu do wyszukiwania
        const searchInput = document.querySelector('.search__input');
        let firstFocus = true;

        searchInput.addEventListener('keyup', function() {
            const searchString = searchInput.value;
            faqList.fuzzySearch(searchString);
        });

        // Dodajemy obsługę klasy 'active' dla pola input
        searchInput.addEventListener('focus', function() {
            searchInput.classList.add('active');
            if (firstFocus) {
                const animateElements = document.querySelectorAll('.animate');
                animateElements.forEach(el => el.classList.add('active'));
                firstFocus = false;
            }
        });

        searchInput.addEventListener('blur', function() {
            searchInput.classList.remove('active');
        });
    });
    </script>


</section>