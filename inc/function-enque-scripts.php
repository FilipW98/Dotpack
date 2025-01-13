<?php

function happy_script_enqueue(){
 
    wp_enqueue_script("jquery");      
   
    wp_enqueue_script( 'splide-script', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide.min.js', array(), '1.0.0', true);

    wp_enqueue_style( 'photoswipe', get_template_directory_uri() . '/dist/libraries/photoswipe/css/photoswipe.css', false, '1.0', 'all' );  
        wp_register_script( 'swiper-script', get_template_directory_uri() . '/dist/libraries/swiper/js/swiper.min.js', array(), '8.4.6', true);
    wp_register_style( 'swiper-styles', get_template_directory_uri() . '/dist/libraries/swiper/css/swiper.min.css', false, '1.0', 'all' );

        wp_register_script('jQueryMaskPlugin', get_template_directory_uri() . '/dist/libraries/jQueryMaskPlugin/js/jquery.mask.min.js', array('jquery'), '1.0.0', true);
       
    wp_enqueue_script('jQueryMaskPlugin');

    // wp_enqueue_script( 'splide-extension-intersection', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide-extension-intersection.min.js', array(), '1.0.0', true);
    
    wp_enqueue_script( 'happy', get_template_directory_uri() . '/src/js/happy.js', array(), '1.0.0', true);
    wp_enqueue_script( 'happy-header', get_template_directory_uri() . '/src/js/happy-header.js', array(), '1.0.0', true);
    wp_enqueue_script( 'happy-animations', get_template_directory_uri() . '/src/js/happy-animations.js', array(), '1.0.0', true);
    
    wp_enqueue_style( 'splide-style', get_template_directory_uri() . '/dist/libraries/splide-slider/css/splide.min.css', false, '1.0', 'all' );  
    wp_enqueue_style( 'live-stylesheet', get_template_directory_uri() . '/dist/css/live.css', false, '1.0', 'all' );  
  

    wp_enqueue_script( 'photoswpiwe-script-1', get_template_directory_uri() . '/dist/libraries/photoswipe/js/photoswipe-lightbox.esm.js', array(), '1.0.0', true);
    wp_enqueue_script( 'photoswpiwe-script-2', get_template_directory_uri() . '/dist/libraries/photoswipe/js/photoswipe.esm.js', array(), '1.0.0', true);

    // Styles and scripts for solutions page
    if(is_page_template( 'templates/solutions.php' )){
        wp_enqueue_style( 'solutions-stylesheet', get_template_directory_uri() . '/dist/css/solutions.css', false, '1.0', 'all' );
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);
    }

    // Styles and scripts for about-us page
    if(is_page_template( 'templates/about-us.php' )){
        wp_enqueue_style( 'solutions-stylesheet', get_template_directory_uri() . '/dist/css/solutions.css', false, '1.0', 'all' );
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);
        wp_enqueue_script( 'happy-f', get_template_directory_uri() . '/src/js/happy-f.js', array(), '1.0.0', true);
        wp_enqueue_style( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/css/splide.min.css', false, '1.0', 'all' ); 
        wp_enqueue_script( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide.min.js', array(), '1.0.0', true);
        wp_enqueue_style( 'about-us-stylesheet', get_template_directory_uri() . '/dist/css/about-us.css', false, '1.0', 'all' );  
    }

    // Styles and scripts for career page
    if(is_page_template( 'templates/career.php' )){
        wp_enqueue_style( 'solutions-stylesheet', get_template_directory_uri() . '/dist/css/solutions.css', false, '1.0', 'all' );
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);
        wp_enqueue_script( 'happy-f', get_template_directory_uri() . '/src/js/happy-f.js', array(), '1.0.0', true); 
        wp_enqueue_script('swiper-script');
        wp_enqueue_style('swiper-styles');
        wp_enqueue_style( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/css/splide.min.css', false, '1.0', 'all' ); 
        wp_enqueue_script( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide.min.js', array(), '1.0.0', true);
        wp_enqueue_style( 'career-stylesheet', get_template_directory_uri() . '/dist/css/career.css', false, '1.0', 'all' ); 
    }

    // Styles and scripts for services page
    if(is_page_template( 'templates/services.php' )){
        wp_enqueue_style( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/css/splide.min.css', false, '1.0', 'all' ); 
        wp_enqueue_script( 'splide-script', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide.min.js', array(), '1.0.0', true);
        wp_enqueue_style( 'solutions-stylesheet', get_template_directory_uri() . '/dist/css/solutions.css', false, '1.0', 'all' );
        wp_enqueue_style( 'services-stylesheet', get_template_directory_uri() . '/dist/css/services.css', false, '1.0', 'all' );
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);
        // wp_enqueue_style( 'career-stylesheet', get_template_directory_uri() . '/dist/css/career.css', false, '1.0', 'all' );  
        
    }


    // Styles for 404
    wp_enqueue_style( '404-stylesheet', get_template_directory_uri() . '/dist/css/404.css', false, '1.0', 'all' );

    // wp_register_script('jQueryMaskPlugin', get_template_directory_uri() . '/dist/libraries/jQueryMaskPlugin/js/jquery.mask.min.js', array(), '1.0.0');
    // wp_enqueue_script('jQueryMaskPlugin');
    // wp_register_script('lottiefiles-player', get_template_directory_uri() . '/dist/libraries/lottiefiles/js/lottie-player.js', array(), '1.7.0', true);
    // wp_enqueue_script('lottiefiles-player'); 
    // wp_register_script('lottie-min', get_template_directory_uri() . '/dist/libraries/lottiefiles/js/lottie.min.js', array(), '5.7.3', true);
    // wp_enqueue_script('lottie-min'); 


    // // Styles and scripts for Homepage
    if(is_page_template( 'templates/home.php' )){
        wp_enqueue_style( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/css/splide.min.css', false, '1.0', 'all' ); 
        wp_enqueue_script( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide.min.js', array(), '1.0.0', true);
        wp_enqueue_style( 'home-stylesheet', get_template_directory_uri() . '/dist/css/home.css', false, '1.0', 'all' );
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);

          
    }
    if(is_page_template( 'templates/contact.php' )){
        wp_enqueue_style( 'contact-stylesheet', get_template_directory_uri() . '/dist/css/contact.css', false, '1.0', 'all' );
    wp_enqueue_script( 'happy-map', get_template_directory_uri() . '/src/js/happy-map.js', array(), '1.0.0', true);
    wp_enqueue_script( 'happy-f', get_template_directory_uri() . '/src/js/happy-f.js', array(), '1.0.0', true);

    }

    if(is_page_template( 'templates/integrations.php' )){
        wp_enqueue_style( 'integrations-stylesheet', get_template_directory_uri() . '/dist/css/integrations.css', false, '1.0', 'all' );
        wp_enqueue_style( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/css/splide.min.css', false, '1.0', 'all' ); 
        wp_enqueue_script( 'splide', get_template_directory_uri() . '/dist/libraries/splide-slider/js/splide.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);

    }
    if(is_page_template( 'templates/faq.php' )){
        wp_enqueue_style( 'faq-stylesheet', get_template_directory_uri() . '/dist/css/faq.css', false, '1.0', 'all' );
        wp_enqueue_script( 'happy-pw', get_template_directory_uri() . '/src/js/happy-pw.js', array(), '1.0.0', true);
        wp_enqueue_script( 'list', get_template_directory_uri() . '/dist/libraries/list/js/list.min.js', array(), '1.0.0', true);
    }
    if(is_page_template( 'templates/privacy-policy.php' )){
        wp_enqueue_style( 'privacy-policy-stylesheet', get_template_directory_uri() . '/dist/css/privacy-policy.css', false, '1.0', 'all' );
    }
    
            // Wpis blogowy
            if(is_single() ){
                wp_enqueue_style( 'blog-post-stylesheet', get_template_directory_uri() . '/dist/css/blog_post.css', false, '1.0', 'all' );  
            }
            //Strona Blogu, wypisane blogi
            if(get_post_type() == 'post'){
                wp_enqueue_style( 'blog-page-stylesheet', get_template_directory_uri() . '/dist/css/blog_page.css', false, '1.0', 'all' );  
          
            }
            wp_enqueue_script('my-ajax-script', get_template_directory_uri() . '/src/js/my-ajax-script.js', array('jquery'), null, true);
            wp_localize_script('my-ajax-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
            // Strona Blogu REALIZACJI 
            // if(is_archive('realizations')){ 
            //     wp_enqueue_style( 'realizations-stylesheet', get_template_directory_uri() . '/dist/css/realizations.css', false, '1.0', 'all' ); 
            //     wp_register_script('isotope-min', get_template_directory_uri() . '/dist/libraries/isotope/js/isotope.pkgd.min.js', array(), '2.0.1', true);
            //     wp_enqueue_script('isotope-min'); 
            // }

            // Wpis Realizacji
            // if(is_singular('realizations') ){
            //     wp_enqueue_style( 'flex-components-stylesheet', get_template_directory_uri() . '/dist/css/flex-components.css', false, '1.0', 'all' );  
            //     wp_enqueue_script('jQueryMaskPlugin');
            // }
   
}
   
  
add_action( 'wp_enqueue_scripts', 'happy_script_enqueue');