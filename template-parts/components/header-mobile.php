<div class="header__mobile header-mobile">
    <div class="header-mobile__outer">
        <div class="header-mobile__inner">

            <div class="header-mobile__logo-container">
                <a href="/" class="header-mobile__logo-link">
                    <?php $custom_logo_id = get_theme_mod('custom_logo'); 
                                //   echo wp_get_attachment_image($custom_logo_id, array(160, 32)); 
                                  print_svg($custom_logo_id);
                            ?>
                </a>
            </div>
            <div class="header-mobile__menu-button-container">
                <div class="header-mobile__menu-button-container-inner">
                    <div class="header-mobile__hamburger">
                        <span class="header-mobile__hamburger-line"></span>
                        <span class="header-mobile__hamburger-line"></span>
                        <span class="header-mobile__hamburger-line"></span>
                    </div>
                    <span class="header-mobile__hamburger-text">
                        MENU
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile__menu-container">
        <div class="header-mobile__menu-top">
            <a class="header-mobile__logo-link logo-in-menu" href="<?php echo home_url(); ?>">
                <?php $custom_logo_id = 350; 
                                echo wp_get_attachment_image( $custom_logo_id , array(125, 30) );
                            ?>
            </a>

            <div class="header-mobile__close-button">
                <span class="header-mobile__close-button-line-1 header-mobile__close-button-line"></span>
                <span class="header-mobile__close-button-line-2 header-mobile__close-button-line"></span>
            </div>

        </div>
        <div class="header-mobile__menu-bottom">

            <div class="header-mobile__menu-side">
                <nav class="header-mobile__menu">
                    <?php if (have_rows('header_menu', 'option')) :
                    while (have_rows('header_menu', 'option')) : the_row(); 
                    $link = get_sub_field('header_link_lvl_1');
                    $submenu_type = get_sub_field('submenu_type');
                    $submenu_class = ($submenu_type === 'horizontal') ? 'submenu-horizontal' : 'submenu-vertical';
                    $submenu_headline = get_sub_field('submenu_lvl_1_headline');
                    
                    // Sprawdzanie istnienia submenu
                    $submenu_count = false;
                    if (have_rows('submenu_lvl_1')) {
                        while (have_rows('submenu_lvl_1')) {
                            the_row();
                            $submenu_count = true;
                        }
                    }

                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <div class="header-mobile__menu-item">
                        <?php if($submenu_count): ?>
                        <div class="header-mobile__link-wrapper">
                            <a class="header-mobile__menu-simple-link <?php echo ($submenu_count) ? 'has-submenu' : ''; ?>"
                                href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                            <span class="arrow-icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.50195 5.74951L8.00293 10.2505L12.5039 5.74951" stroke="#1D1A05"
                                        stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span> <!-- Ikona strzałki -->
                        </div>
                        <?php else: ?>
                        <a class="header-mobile__menu-simple-link <?php echo ($submenu_count) ? 'has-submenu' : ''; ?>"
                            href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                        <?php endif; ?>
                        <?php if (have_rows('submenu_lvl_1')) : ?>
                        <div class="header-mobile__submenu <?php echo $submenu_class; ?>">
                            <div class="header-mobile__submenu-links-container">
                                <?php while (have_rows('submenu_lvl_1')) : the_row();
                                    $sub_link = get_sub_field('header_link_lvl_2');
                                    if ($sub_link) :
                                        $sub_link_url = $sub_link['url'];
                                        $sub_link_title = $sub_link['title'];
                                        $sub_link_target = $sub_link['target'] ? $sub_link['target'] : '_self'; ?>
                                <a class="header-mobile__submenu-link" href="<?php echo esc_url($sub_link_url); ?>"
                                    target="<?php echo esc_attr($sub_link_target); ?>">
                                    <?php echo esc_html($sub_link_title); ?>
                                </a>
                                <?php endif;
                                endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif;
            endwhile;
        endif; ?>
                </nav>
            </div>


            <div class="header-mobile__lang-menu ">
                <?php
                    wp_nav_menu(array(
                                  'theme_location' => 'languages',
                                  'menu_class' => 'header-mobile__languages-menu languages-menu',
                                  'menu_id' => 'languages-menu',
                                  'add_li_class' => 'languages-menu__el',
                                  'container' => false
                                  )); 
                        ?>

                <div
                    class="header-mobile__lang-switcher <?php echo (pll_current_language() !== 'pl') ? 'other-lang' : ''; ?>">
                    <span class="header-mobile__lang-left">PL</span>
                    <div class="header-mobile__lang-slider ">
                        <span
                            class="header-mobile__lang-dot <?php echo (pll_current_language() !== 'pl') ? 'other-lang' : ''; ?>"></span>
                    </div>
                    <span class="header-mobile__lang-right">ENG</span>
                </div>
            </div>

            <div class="header-mobile__contact">
                <a href="tel:<?php delete_spaces('header_phone', 'option'); ?>" class="header-mobile__contact-el">
                    <span class="header-mobile__icon-container">
                        <?php print_svg(382) ?>
                    </span>
                    <span class="header-mobile__contact-text">
                        <?php the_field('header_phone', 'option'); ?>
                    </span>
                </a>
                <a href="mailto:<?php delete_spaces('header_mail_adress', 'option'); ?>"
                    class="header-mobile__contact-el">
                    <span class="header-mobile__icon-container">
                        <?php print_svg(381) ?>
                    </span>
                    <span class="header-mobile__contact-text">
                        <?php the_field('header_mail_adress', 'option'); ?>
                    </span>
                </a>

                <?php 
                        $link = get_field('header_localization', 'option');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                <a class="header-mobile__contact-el" href="<?php echo esc_url( $link_url ); ?>" target="_blank">

                    <span class="header-mobile__icon-container">
                        <?php print_svg(380) ?>
                    </span>
                    <span class="header-mobile__contact-text">
                        <?php echo esc_html( $link_title ); ?>
                    </span>

                </a>
                <?php endif; ?>

                <?php
                        $link = get_field('header_button_link', 'option');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="header-mobile__contact-button btn-purple-to-trans-white"
                    href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <?php echo esc_html($link_title); ?>
                </a>
                <?php endif; ?>
            </div>


        </div>
    </div>
</div>