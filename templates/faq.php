<?php
/*

Template Name: Najczęściej zadawane pytania
*/

get_header(); ?>


<main class="faq">
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <?php get_template_part("template-parts/faq/faq"); ?>
    <?php get_template_part("template-parts/flex-components/read-more"); ?>
    <?php get_template_part("template-parts/flex-components/contact-form"); ?>
</main>

<?php get_footer(); ?>