<?php get_header(); ?>
<main class="blog-page">
    <?php get_template_part('template-parts/flex-components/breadcrumbs') ?>
    <section>
        <div class="blog-page__outer">
            <div class="blog-page__inner">
                <div class="blog-page__top">
                    <h1 class="blog-page__top-title h-40 slide-up animate">
                        <?php
                            $wpisy = apply_filters('orphan_replace', __('Wpisy', 'happy'));
                            $blogowe = apply_filters('orphan_replace', __('blogowe', 'happy'));
                        ?>
                        <b><?php echo $wpisy; ?></b>
                        <i><?php echo $blogowe; ?></i>
                    </h1>
                    <div class="blog-page__top-btn fade animate">
                        <input type="text" id="search" class="blog-page__search-input body-16" placeholder="Szukaj">
                        <img src="/wp-content/uploads/2024/10/search-icon.svg" alt="search-icon"
                            class="blog-page__top-btn-icon">
                        <div id="blog-page__search-results" class="blog-page__search-results">
                            <div class="loader" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div class="blog-page__content">
                    <?php
                    $current_page = isset($_GET['strona']) ? intval($_GET['strona']) : 1;
                    $posts_per_page = 16;
                    $offset = ($current_page - 2) * $posts_per_page + 5;
                    
                    $args = array(
                        'posts_per_page' => $current_page === 1 ? 5 : $posts_per_page,
                        'offset' => $current_page === 1 ? 0 : $offset,
                        'paged' => $current_page,
                        'orderby' => 'date', 
                        'order' => 'ASC',   
                    );
                    
                    $custom_query = new WP_Query($args);
                    if ($custom_query->have_posts()) :
                        $post_counter = 0;

                        if ($current_page === 1 && $custom_query->have_posts()) :
                            $custom_query->the_post();
                    ?>
                    <div class="blog-page__big">
                        <div class="blog-page__big-item">
                            <a href="<?php the_permalink(); ?>" class="blog-page__big-item-img">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                            <div class="blog-page__big-item-text fade animate">
                                <h2 class="blog-page__big-item-text-title">
                                    <a href="<?php the_permalink(); ?>"
                                        class="blog-page__big-item-text-title-link h-48">
                                        <?php the_field('post_item_title') ?>
                                    </a>
                                </h2>
                                <div class="blog-page__big-item-text-desc">
                                    <a href="<?php the_permalink(); ?>"
                                        class="blog-page__big-item-text-desc-link body-16">
                                        <?php the_field('post_item_desc') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endif;

                        if($current_page == 1){
                            echo '<div class="blog-page__posts">';
                        }
                        else{
                            echo '<div class="blog-page__posts blog-page__posts-4-columns">';
                        }
                        while ($custom_query->have_posts()) : $custom_query->the_post();
                    ?>
                    <div class="blog-page__posts-item fade animate">
                        <div class="blog-page__posts-item-img" data-url="<?php the_permalink(); ?>">
                            <a href="<?php the_permalink(); ?>" class="blog-page__posts-item-img-link">
                                <?php
                                $image_id = get_post_thumbnail_id();
                                $size = array(9999, 290);
                                if ($image_id) {
                                    echo wp_get_attachment_image($image_id, $size);
                                }
                                ?>
                            </a>
                        </div>
                        <div class="blog-page__posts-item-text">
                            <p class="blog-page__posts-item-text-title">
                                <a class="blog-page__posts-item-text-title-link body-18"
                                    href="<?php the_permalink(); ?>">
                                    <?php the_field('post_item_title') ?>
                                </a>
                            </p>
                            <div class="blog-page__posts-item-text-desc">
                                <a href="<?php the_permalink(); ?>"
                                    class="blog-page__posts-item-text-desc-link body-16">
                                    <?php the_field('post_item_desc') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        echo '</div>';
                    ?>
                    <div class="blog-page__pagination">
                        <?php
                        $max_pages = $custom_query->max_num_pages;
                        if ($current_page > 1) :
                        ?>
                        <a href="<?php echo esc_url(add_query_arg('strona', $current_page - 1)); ?>"
                            class="blog-page__pagination-arrow-left">
                            <img src="/wp-content/uploads/2024/10/arrow_left.svg" alt="arrow-left">
                        </a>
                        <?php else : ?>
                        <span class="blog-page__pagination-arrow-left disabled">
                            <img src="/wp-content/uploads/2024/10/arrow_left.svg" alt="arrow-left">
                        </span>
                        <?php endif; ?>
                        <div class="blog-page__pagination-buttons">
                            <?php
                        // Pobranie parametru 'strona' z URL i przekonwertowanie na liczbę
                        $page_param = isset($_GET['strona']) && is_numeric($_GET['strona']) ? (int) $_GET['strona'] : 1;

                        // Generowanie przycisków dla stron od 1 do $max_pages
                        for ($i = 1; $i <= $max_pages; $i++) {
                            $page_link = add_query_arg('strona', $i);
                            $active_class = ($i == $page_param) ? 'active-btn' : ''; // Aktywna strona
                            ?>
                            <a href="<?php echo esc_url($page_link); ?>"
                                class="blog-page__pagination-buttons-btn <?php echo $active_class; ?>">
                                <p class="blog-page__pagination-buttons-btn-number body-16"><?php echo $i; ?></p>
                            </a>
                            <?php }

                        // Dodanie przycisku, jeśli parametr jest spoza zakresu
                        if ($page_param > $max_pages) {
                            $page_link = add_query_arg('strona', $page_param);
                            ?>
                            <a href="<?php echo esc_url($page_link); ?>"
                                class="blog-page__pagination-buttons-btn active-btn">
                                <p class="blog-page__pagination-buttons-btn-number body-16"><?php echo $page_param; ?>
                                </p>
                            </a>
                            <?php } ?>
                        </div>

                        <?php if ($current_page < $max_pages) : ?>
                        <a href="<?php echo esc_url(add_query_arg('strona', $current_page + 1)); ?>"
                            class="blog-page__pagination-arrow-right">
                            <img src="/wp-content/uploads/2024/10/arrow_left.svg" alt="arrow-right">
                        </a>
                        <?php else : ?>
                        <span class="blog-page__pagination-arrow-right disabled">
                            <img src="/wp-content/uploads/2024/10/arrow_left.svg" alt="arrow-right">
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>