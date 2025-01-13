<?php
/*

Template Name: Kontakt

*/

get_header(); ?>


<main class="contact">
       <?php get_template_part("template-parts/flex-components/breadcrumbs"); ?>
       <?php get_template_part("template-parts/contact/contact-page-form"); ?>
       <?php get_template_part("template-parts/flex-components/meet-team"); ?>
       <?php get_template_part("template-parts/contact/map"); ?>
</main>

<?php get_footer(); ?>