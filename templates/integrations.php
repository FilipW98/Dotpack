<?php
/*

Template Name: Integracje

*/

get_header(); ?>


<main class="integrations">
    <?php get_template_part("template-parts/flex-components/intro"); ?>
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <?php get_template_part("template-parts/flex-components/its-simple"); ?>
    <?php get_template_part("template-parts/flex-components/integrations"); ?>
    <?php get_template_part("template-parts/flex-components/integrations-reflection"); ?>
    <!-- <?php //get_template_part("template-parts/integrations/integrations-doubled"); ?> -->
    <?php get_template_part("template-parts/integrations/integrations-doubledV2"); ?>
    <?php get_template_part("template-parts/flex-components/read-more"); ?>


</main>

<?php get_footer(); ?>