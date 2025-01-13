<?php

/* 
    NEEDED FOR LOCO TRANSLATE 
*/
// load_theme_textdomain('happy', get_stylesheet_directory() . '/languages');
/*

 ===========================
 Integration ACF and Sierotki
 ===========================

*/

function acf_orphans($value, $post_id, $field) {
    if ( class_exists( 'iworks_orphan' ) ) {
      $orphan = new \iworks_orphan();
      $value = $orphan->replace( $value );
    }
    return $value;
}
add_filter('acf/format_value/type=textarea', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=wysiwyg', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=text', 'acf_orphans', 10, 3);


/*

 =========================
 Sidebar function
 =========================

*/

function happy_widget_setup(){
 
    register_sidebar( array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'class' => 'custom',
      'description' => 'Standard Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
     )
    );
   
}
   
add_action('widgets_init', 'happy_widget_setup');


/*

 =========================
 Global ACF init
 =========================

*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title' => "Opcje dodatkowe",
        'menu_title' => "Opcje dodatkowe",
        'menu_slug' => "global_settings",
        'capability' => "edit_posts",
        'parent_slug' => '',
        'position' => false,
        'icon_url' => false,
    ));

    acf_add_options_sub_page(array(
        'page_title' => "Nagłówek",
        'menu_title' => "Nagłówek",
        'menu_slug' => "global_settings-header",
        'capability' => "edit_posts",
        'parent_slug' => 'global_settings',
        'position' => false,
        'icon_url' => false,
    ));

    acf_add_options_sub_page(array(
        'page_title' => "Stopka",
        'menu_title' => "Stopka",
        'menu_slug' => "global_settings-footer",
        'capability' => "edit_posts",
        'parent_slug' => 'global_settings',
        'position' => false,
        'icon_url' => false,
    ));
    acf_add_options_sub_page(array(
      'page_title' => "Globalne",
      'menu_title' => "Globalne",
      'menu_slug' => "global_settings-global",
      'capability' => "edit_posts",
      'parent_slug' => 'global_settings',
      'position' => false,
      'icon_url' => false,
  ));
}

/*

 ===========================
 Delete author info from links
 ===========================

*/
add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_responsedata' );
function disable_embeds_filter_oembed_responsedata( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}


/*

 ===========================
 Redirect to Homepage
 ===========================

*/


// add_action( 'template_redirect', 'redirect_to_homepage' );

// function redirect_to_homepage() {
//     $homepage_id = get_option('page_on_front');
//     if ( ! is_page( $homepage_id ) ) {                                                                                  
//          wp_redirect( home_url( 'index.php?page_id=' . $homepage_id ) ); 
//     }    
// }


/*

 ====================
 Activate menus
 ==================== 

*/
 
// function happy_theme_setup(){
 add_theme_support( 'menus' );
//  register_nav_menu( 'primary', 'Primary header navigation' );
//  register_nav_menu('secondary', 'Footer navigation');
register_nav_menu( 'languages', 'Menu językowe' );
// }


/*

 ===========================
 Hidden plugins update notification
 ===========================

*/

function hide_specific_plugin_updates( $value ) {
    // Lista wtyczek, dla których chcemy ukryć powiadomienia o aktualizacjach
    $plugins_to_hide = array(
        'advanced-custom-fields-pro/acf.php'
        // Dodaj więcej wtyczek w tym formacie, jeśli potrzebujesz
    );
    
    if ( isset( $value ) && is_object( $value ) && isset( $value->response ) ) {
        foreach ( $plugins_to_hide as $plugin ) {
            if ( isset( $value->response[$plugin] ) ) {
                unset( $value->response[$plugin] ); // Usuń powiadomienia o aktualizacjach dla wybranej wtyczki
            }
        }
    }
    
    return $value;
}
add_filter( 'site_transient_update_plugins', 'hide_specific_plugin_updates' );





function ajax_search() {
    $keyword = sanitize_text_field($_POST['keyword']);
    $args = array(
        's' => $keyword,
        'post_type' => 'post',
        'posts_per_page' => 5
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        echo '<div class="search-results__list">';
        while ($query->have_posts()) {
            $query->the_post();
            $thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'search-results__thumbnail', 'style' => 'width: 100px; height: 100px; object-fit: cover;'));
            echo '<div class="search-results__item">';
            if ($thumbnail) {
                echo '<div class="search-results__thumbnail-container">' . $thumbnail . '</div>';
            }
            echo '<div class="search-results__title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<div class="search-results__no-results">Brak wyników wyszukiwania.</div>';
    }
    wp_die();
}

add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');
add_action('wp_ajax_ajax_search', 'ajax_search');


// Niestandardowa strona logowania

if (!function_exists('happy_custom_login_customizer')) {
    // Dodanie sekcji "Panel logowania" do customizera
    function happy_custom_login_customizer($wp_customize) {
        $wp_customize->add_section('custom_login_section', array(
            'title' => 'Panel logowania',
            'description' => 'Ustawienia ekranu logowania',
            'priority' => 30,
        ));
      
        // Pole dla logo
        $wp_customize->add_setting('happy_custom_login_logo', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'happy_custom_login_logo', array(
            'label' => 'Logo',
            'section' => 'custom_login_section',
            'settings' => 'happy_custom_login_logo',
            'description' => 'Jeśli pole jest puste, będzie używane logo z „Tożsamości witryny”.',
        )));
      
        // Pole dla ikony telefonu
        // $wp_customize->add_setting('custom_phone_icon', array(
        //     'default' => '',
        //     'transport' => 'refresh',
        // ));
        // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_phone_icon', array(
        //     'label' => 'Ikona telefonu',
        //     'section' => 'custom_login_section',
        //     'settings' => 'custom_phone_icon',
        //     'description' => 'Dodaj ikonę dla numeru telefonu.',
        // )));
      
        // // Pole dla ikony e-maila
        // $wp_customize->add_setting('custom_email_icon', array(
        //     'default' => '',
        //     'transport' => 'refresh',
        // ));
        // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_email_icon', array(
        //     'label' => 'Ikona e-maila',
        //     'section' => 'custom_login_section',
        //     'settings' => 'custom_email_icon',
        //     'description' => 'Dodaj ikonę dla adresu e-mail.',
        // )));
      
        // Kolor tła
        $wp_customize->add_setting('custom_login_bg_color', array(
            'default' => '#f0f0f0',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_bg_color', array(
            'label' => 'Kolor tła',
            'section' => 'custom_login_section',
            'settings' => 'custom_login_bg_color',
        )));
      
        // Kolor przycisku
        $wp_customize->add_setting('custom_login_button_color', array(
            'default' => '#0073aa',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_button_color', array(
            'label' => 'Wiodący kolor logowania',
            'section' => 'custom_login_section',
            'settings' => 'custom_login_button_color',
        )));
    }
    add_action('customize_register', 'happy_custom_login_customizer');
}

// Stylizacja logowania
if (!function_exists('happy_custom_login_styles')) {
    function happy_custom_login_styles() {
        $bg_color = get_theme_mod('custom_login_bg_color', '#f0f0f0');
        $button_color = get_theme_mod('custom_login_button_color', '#0073aa');
        $logo_url = get_theme_mod('happy_custom_login_logo') ?: wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');

        echo '<style>
            body.login {
                background-color: ' . esc_html($bg_color) . ';
            }
      
            #login {
            }
            /* Usuniecie podstawowego logo */
            .login h1 a {
                display: none;
            }
      
            .login .button-primary {
                background-color: ' . esc_html($button_color) . ';
                border-color: ' . esc_html($button_color) . ';
                transition: 0.4s ease;
            }
      
            /* Style dla przycisku po najechaniu */
            .login .button-primary:hover {
                color: #1d1a05;
                border: 1px solid #1d1a05;
                background: rgba(253, 255, 252, 0.1);
                backdrop-filter: blur(10px);
            }
      
            /* Style dla przycisku po kliknieciu */
            .login .button-primary:focus,
            .login .button-primary:active {
                border: 1px solid #1d1a05;
                background: rgba(253, 255, 252, 0.1);
                color: #1d1a05;
                outline: none;
                box-shadow: none;
            }
            /* Style dla formularza z logowaniem */
            #loginform {
                border-radius: 25px;
                box-shadow: 0px 0px 5px ' . esc_html($button_color) . ';
                border: 0px;
            }
            /* Usuniecie zmiany jezyka i polityki prywatnosci - WP */
            .privacy-policy-page-link,
            .language-switcher {
                display: none;
            }
      
            #wp-submit {
                border-radius: 25px;
                cursor: pointer;
            }
                
            #login-message {
                border-left: 4px solid ' . esc_html($button_color) . ';
                margin-top: 20px;
            }
        </style>';
    }
    add_action('login_head', 'happy_custom_login_styles');
}

if (!function_exists('happy_custom_login_logo')) {
    function happy_custom_login_logo() {
        $logo_url = get_theme_mod('happy_custom_login_logo') ?: wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');
        $your_logo_url = get_template_directory_uri() . '/assets/images/Logo-code-color.svg';

        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    if (!document.querySelector(".custom-login-logo-wrapper")) {
                        const logoContainer = document.createElement("div");
                        logoContainer.innerHTML = `<div class="custom-login-logo-wrapper" style="display: flex; align-items: center; justify-content: center; padding: 5% 0 0;">
                            <div style="display: flex; align-items: center; height: 60px;">
                              <img src="' . esc_url($logo_url) . '" alt="Site Logo" />
                            </div>
                            <span style="font-size: 40px; font-weight: bold; color: #333; padding: 0 25px; height: 60px;">X</span>
                            <div style="display: flex; align-items: center; height: 60px;">
                              <img src="' . esc_url($your_logo_url) . '" alt="Your Logo" />
                            </div>
                          </div>`;
                        document.querySelector("#login h1").after(logoContainer);
                    }
                });
              </script>';
    }
    add_action('login_header', 'happy_custom_login_logo');
}

if (!function_exists('happy_login_help_section')) {
    function happy_login_help_section() {
        $phone_icon_url = get_template_directory_uri() . '/assets/images/telephone.png';
        $email_icon_url = get_template_directory_uri() . '/assets/images/mail.png';
        $website_icon_url = get_template_directory_uri() . '/assets/images/world-wide-web.png';

        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    if (!document.querySelector(".login-help")) {
                        const helpContainer = document.createElement("div");
                        helpContainer.className = "login-help";
                        helpContainer.style = "text-align: center; margin-top: 20px; padding: 0 16px;";
                        helpContainer.innerHTML = `<p style="font-size: 20px; font-weight: bold;">Jeśli potrzebujesz pomocy, skontaktuj się z nami:</p>
                            <div style="display: grid; justify-content: center; font-size: 18px; padding-top: 10px; gap: 15px;">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="' . esc_url($phone_icon_url) . '" alt="Phone Icon" style="width: 20px; margin-right: 8px; display: flex;">
                                    +48 531 422 602
                                </div>
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="' . esc_url($email_icon_url) . '" alt="Email Icon" style="width: 20px; margin-right: 8px; display: flex;">
                                    <a href="mailto:code@happy-island.pl" style="color: #333; text-decoration: none;">code@happy-island.pl</a>
                                </div>
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="' . esc_url($website_icon_url) . '" alt="Website Icon" style="width: 20px; margin-right: 8px; display: flex;">
                                    <a href="https://code-hi.pl/" target="_blank" style="color: #333; text-decoration: none;">https://code-hi.pl/</a>
                                </div>
                            </div>`;
                        document.querySelector("#login").appendChild(helpContainer);
                    }
                });
              </script>';
    }
    add_action('login_footer', 'happy_login_help_section');
}

// Niestandardowa strona logowania - KONIEC






function disable_feed() {
    wp_die( __( 'RSS feed is disabled on this site.' ) );
}
add_action( 'do_feed', 'disable_feed', 1 );
add_action( 'do_feed_rdf', 'disable_feed', 1 );
add_action( 'do_feed_rss', 'disable_feed', 1 );
add_action( 'do_feed_rss2', 'disable_feed', 1 );
add_action( 'do_feed_atom', 'disable_feed', 1 );