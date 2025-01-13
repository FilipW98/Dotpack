<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('-'); ?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#7C69B7">
    <?php wp_head(); ?>

    <script>
    function gtag_report_conversion(url) {
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-16764390064/nhGaCPGXvOwZELCV8bk-',
            'event_callback': callback
        });
        return false;
    }
    </script>
</head>

<body <?php body_class(); ?>>
    <header class="header <?php echo 'page-id-' . get_the_ID();  ?>">
        <?php get_template_part('/template-parts/components/header-desktop') ?>
        <?php get_template_part('/template-parts/components/header-mobile') ?>
    </header>