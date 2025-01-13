<?php get_header(); ?>

<main class="single-post">
    <?php get_template_part('/template-parts/flex-components/breadcrumbs') ?>
    <div class="single-post">
        <div class="single-post__outer">
            <div class="single-post__inner">
                <?php 
                if(have_rows('post_flex_fields')):
                    while(have_rows('post_flex_fields')): the_row('');
                    $component_name = get_row_layout();  
                    echo //$component_name;                
                    get_template_part('/template-parts/blog/post/flex', $component_name);  ?>
                <?php endwhile; endif  ?>
            </div>
            <?php    get_template_part('/template-parts/flex-components/read-more');?> 
        </div>
    </div>
</main>
<?php get_footer(); ?>