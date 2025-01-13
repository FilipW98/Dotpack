 <?php  
/*

Template Name: Kariera

*/

get_header(); ?>

 <main class="career">
     <?php get_template_part("template-parts/flex-components/intro"); ?>
     <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
     <?php get_template_part('template-parts/career/application') ?>
     <?php get_template_part('template-parts/flex-components/our-mission') ?>
     <?php get_template_part('template-parts/flex-components/additional-services') ?>
     <?php get_template_part('template-parts/career/join-team-new') ?>
 </main>

 <?php get_footer(); ?>