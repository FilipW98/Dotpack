<?php
/*

Template Name: Polityka Prywatności

*/

get_header(); ?>
<main class="privacy-policy__main">
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <section class="privacy-policy">
        
        <div class="privacy-policy__outer">
            <div class="privacy-policy__inner">
                <div class="privacy-policy__title h-40 slide-to-right animate">
                    <?php the_field('privacy_policy_title'); ?>
                </div>
                <div class="privacy-policy__text wysiwyg body-16 fade animate">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('/template-parts/flex-components/read-more') ?>
    <?php get_template_part('/template-parts/flex-components/contact-form') ?>
</main>

<?php get_footer(); ?>