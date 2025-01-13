<?php 
/*

Template Name: Rozwiązania

*/

get_header(); ?>

<main class="solutions">
    <?php get_template_part("template-parts/flex-components/intro"); ?>
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <?php get_template_part('template-parts/solutions/acceptance-of-products') ?>
    <?php get_template_part('template-parts/solutions/learn-more') ?>
    <?php get_template_part('template-parts/flex-components/additional-services') ?>
    <?php get_template_part('template-parts/flex-components/contact-form') ?>
</main>

<?php get_footer(); ?>