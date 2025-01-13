<?php  
/*

Template Name: Usługi

*/

get_header(); ?>

<main class="services">
    <?php get_template_part("template-parts/flex-components/intro"); ?>
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <?php get_template_part('template-parts/services/steps') ?>
    <?php get_template_part('template-parts/flex-components/additional-services') ?>
    <?php get_template_part("template-parts/home/people-trust"); ?>
    <?php get_template_part('template-parts/flex-components/working-video') ?>
    <?php get_template_part('template-parts/flex-components/globe') ?>
    <?php get_template_part('template-parts/flex-components/read-more') ?>
    <?php get_template_part('template-parts/flex-components/contact-form') ?>
</main>

<?php get_footer(); ?>