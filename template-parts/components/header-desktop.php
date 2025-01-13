<div class="header__desktop header-desktop">
    <div class="header-desktop__outer">
        <div class="header-desktop__top">
            <div class="header-desktop__top-inner">
                <div class="header-desktop__top-side-contacts">
                    <a href="tel:<?php delete_spaces('header_phone', 'option'); ?>" class="header-desktop__contact-el">
                        <span class="header-desktop__icon-container">
                            <?php print_svg(382) ?>
                        </span>
                        <span class="header-desktop__contact-text">
                            <?php the_field('header_phone', 'option'); ?>
                        </span>
                    </a>
                    <a href="mailto:<?php delete_spaces('header_mail_adress', 'option'); ?>"
                        class="header-desktop__contact-el">
                        <span class="header-desktop__icon-container">
                            <?php print_svg(381) ?>
                        </span>
                        <span class="header-desktop__contact-text">
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
                    <a class="header-desktop__contact-el" href="<?php echo esc_url( $link_url ); ?>" target="_blank">

                        <span class="header-desktop__icon-container">
                            <?php print_svg(380) ?>
                        </span>
                        <span class="header-desktop__contact-text">
                            <?php echo esc_html( $link_title ); ?>
                        </span>

                    </a>
                    <?php endif; ?>
                </div>
                <div class="header-desktop__lang-menu ">
                    <?php
                    wp_nav_menu(array(
                                  'theme_location' => 'languages',
                                  'menu_class' => 'header-desktop__languages-menu languages-menu',
                                  'menu_id' => 'languages-menu',
                                  'add_li_class' => 'languages-menu__el',
                                  'container' => false
                                  )); 
                        ?>

                    <div
                        class="header-desktop__lang-switcher <?php echo (pll_current_language() !== 'pl') ? 'other-lang' : ''; ?>">
                        <span class="header-desktop__lang-left">PL</span>
                        <div class="header-desktop__lang-slider ">
                            <span
                                class="header-desktop__lang-dot <?php echo (pll_current_language() !== 'pl') ? 'other-lang' : ''; ?>"></span>
                        </div>
                        <span class="header-desktop__lang-right">ENG</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-desktop__bottom">
            <div class="header-desktop__bottom-inner">
                <div class="header-desktop__left-side">
                    <div class="header-desktop__logo-container">
                        <a href="/" class="header-desktop__logo-link">
                            <?php $custom_logo_id = get_theme_mod('custom_logo'); 
                                //   echo wp_get_attachment_image($custom_logo_id, array(160, 32)); 
                                  print_svg($custom_logo_id);
                            ?>
                        </a>
                    </div>
                </div>
                <div class="header-desktop__menu-side">
                    <nav class="header-desktop__menu">
                        <?php if (have_rows('header_menu', 'option')) :
                                while (have_rows('header_menu', 'option')) : the_row(); 
                                    $link = get_sub_field('header_link_lvl_1');
                                    $submenu_type = get_sub_field('submenu_type');
                                    $submenu_class = ($submenu_type === 'horizontal') ? 'submenu-horizontal' : 'submenu-vertical';
                                    $submenu_headline = get_sub_field('submenu_lvl_1_headline');
                                    // $submenu_count = count(get_sub_field('submenu_lvl_1')); // Sprawdzamy liczbę elementów w submenu

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
                        <div class="header-desktop__menu-item">
                            <a class="header-desktop__menu-simple-link <?php echo ($submenu_count) ? 'has-submenu' : ''; ?>"
                                href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                                <?php if (have_rows('submenu_lvl_1')) : ?>
                                <span class="arrow-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.50195 5.74902L8.00293 10.25L12.5039 5.74902" stroke="#FDFFFC"
                                            stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span> <!-- Ikona strzałki -->
                                <?php endif; ?>
                            </a>
                            <?php if (have_rows('submenu_lvl_1')) : ?>
                            <div class="header-desktop__submenu <?php echo $submenu_class; ?>">
                                <?php if ($submenu_headline) : 
                                    $link_headline = $submenu_headline;
                                    // if( $link ):
                                        $link_url = $link_headline['url'];
                                        $link_title = $link_headline['title'];
                                        $link_target = $link_headline['target'] ? $link_headline['target'] : '_self';
                                    ?>
                                <a href='<?php echo esc_url( $link_url ); ?>'
                                    target='<?php echo esc_attr( $link_target ); ?>'
                                    class="header-desktop__submenu-headline">
                                    <?php echo esc_html($link_title); ?>
                                </a>
                                <?php endif; ?>


                                <div class="header-desktop__submenu-links-container">
                                    <?php while (have_rows('submenu_lvl_1')) : the_row();
                                                        $sub_link = get_sub_field('header_link_lvl_2');
                                                        if ($sub_link) :
                                                            $sub_link_url = $sub_link['url'];
                                                            $sub_link_title = $sub_link['title'];
                                                            $sub_link_target = $sub_link['target'] ? $sub_link['target'] : '_self'; ?>
                                    <a class="header-desktop__submenu-link" href="<?php echo esc_url($sub_link_url); ?>"
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
                <div class="header-desktop__side-contact">
                    <?php
                        $link = get_field('header_button_link', 'option');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <a class="header-desktop__contact-button btn-purple-to-trans-white"
                        href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>