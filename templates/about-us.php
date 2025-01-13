<?php
/*

Template Name: O nas

*/

get_header(); ?>


<main class="about-us">
    <?php get_template_part("template-parts/flex-components/intro"); ?>
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <?php get_template_part('template-parts/flex-components/our-mission') ?>
    <?php get_template_part('template-parts/flex-components/its-simple') ?>
    <?php get_template_part('template-parts/flex-components/our-mission-twince') ?>
    <?php get_template_part('template-parts/flex-components/meet-team') ?>
    <?php get_template_part('template-parts/about-us/we-believe') ?>
    <?php get_template_part('template-parts/flex-components/additional-services') ?>
    <?php get_template_part("template-parts/home/people-trust"); ?>
    <?php get_template_part('template-parts/flex-components/working-video') ?>
    <?php get_template_part('template-parts/flex-components/globe') ?>
    <?php get_template_part('template-parts/flex-components/read-more') ?>
    <?php get_template_part('template-parts/flex-components/contact-form') ?>
</main>

<?php get_footer(); ?>