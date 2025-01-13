<?php get_header(); ?>

<?php get_template_part('template-parts/flex-components/breadcrumbs') ?>

<section class="page-404">
    <div class="page-404__outer">
        <div class="page-404__inner">
            <div class="page-404__inner-container">
                <div class="page-404__top fade animate">
                    <div class="page-404__heading-container h-48">
                        <span class="page-404__heading">Strona niestety <i class="page-404__description">nie
                                istnieje</i></span>
                    </div>
                    <div class="page-404__desc-container">
                        <div class="text-404 body-24"><span class="page-404__desc-txt">Przejdź na stronę główną bądź
                                skontaktuj się z nami.</span>
                        </div>
                    </div>
                    <div class="page-404__controls">
                        <div class="page-404__contact-border">
                            <?php 
                                $link = get_field('error_link', 'option');
                                if($link): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="page-404__contact btn-purple-to-trans-black"
                                href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="page-404__home-border">
                            <a class="page-404__home btn-white-to-purple" href="<?php echo home_url(); ?>"><span
                                    class="home-txt"> Przejdź
                                    na
                                    stronę główną</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-404__error-border">
                        <div class="page-404__four-left">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 319 418" fill="none" width="100%"
                                height="100%">
                                <path
                                    d="M198.66 417.896V323.862H0.607422V269.008L195.871 0.896484H261.144V269.008H318.607V323.862H261.144V417.896H198.66ZM49.1443 293.076L38.5443 269.008H198.66V53.5113L216.513 59.1086L49.1443 293.076Z"
                                    fill="#7C69B7" />
                            </svg>
                        </div>
                        <div class="page-404__circle-border">
                            <div class="page-404__circle-wrapper">
                                <div class="circle-1">
                                    <div class="moving-circle-404"></div>
                                </div>
                                <div class="circle-2"></div>
                                <div class="circle-3"></div>
                                <div class="circle-4"></div>
                            </div>
                        </div>
                        <div class="page-404__four-right">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 319 418" fill="none" width="100%"
                                height="100%">
                                <path
                                    d="M198.66 417.896V323.862H0.607422V269.008L195.871 0.896484H261.144V269.008H318.607V323.862H261.144V417.896H198.66ZM49.1443 293.076L38.5443 269.008H198.66V53.5113L216.513 59.1086L49.1443 293.076Z"
                                    fill="#7C69B7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php get_template_part('template-parts/flex-components/contact-form') ?>

<?php get_footer(); ?>