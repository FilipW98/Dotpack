<?php
/*

Template Name: Strona główna

*/

get_header(); ?>


<main class="home-main">
    <?php get_template_part("template-parts/flex-components/intro"); ?>
    <?php get_template_part("template-parts/flex-components/its-simple"); ?>
    <?php get_template_part("template-parts/home/problems"); ?>
    <?php //get_template_part("template-parts/flex-components/meet-people"); ?>
    <?php get_template_part("template-parts/home/people-trust"); ?>
    <?php get_template_part("template-parts/home/what-do-you-gain"); ?>
    <div style="overflow: hidden;">
        <?php get_template_part("template-parts/flex-components/globe"); ?>
        <?php get_template_part("template-parts/flex-components/integrations"); ?>
        <?php get_template_part("template-parts/flex-components/integrations-reflection"); ?>
    </div>
    <?php get_template_part("template-parts/flex-components/read-more"); ?>
    <?php get_template_part("template-parts/flex-components/contact-form"); ?>

</main>

<?php get_footer(); ?>