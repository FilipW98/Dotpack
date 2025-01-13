<section class="read-more">
    <div class="read-more__outer">
        <div class="read-more__inner">
            <div class="read-more__top slide-up animate">
                <div class="read-more__top-title">
                    <?php
                    
                    $bottom_title = get_field('read_more_title_text');
                    $title_top_class = (!$bottom_title ? 'top-title-margin' : '');
                    ?>
                    <span
                        class="read-more__top-title-question h-40 <?php echo $title_top_class; ?>"><?php the_field('read_more_title_question')?></span>

                    <?php if($bottom_title): ?>

                    <span class="read-more__top-title-bottom h-40"><?php the_field('read_more_title_text')?></span>
                    <?php endif; ?>
                </div>

            </div>

            <div class="read-more__splide splide" aria-label="Custom Arrows Example">
                <div class="splide__track slide-up animate">
                    <ul class="splide__list read-more__bottom">
                        <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 8,
                            'orderby' => 'date',
                            'order' => 'DESC',
                        );
                $latest_posts = new WP_Query($args);
                if ($latest_posts->have_posts()) : 
                while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>

                        <li class="splide__slide read-more__bottom-item">
                            <div class="read-more__bottom-item-img" data-url="<?php the_permalink(); ?>">
                                <a href="<?php the_permalink(); ?>" class="read-more__bottom-item-img-link">

                                    <?php
                                $image_id = get_post_thumbnail_id(); 
                                $size = array(330,290);
                                if ($image_id) {
                                    echo wp_get_attachment_image($image_id, $size);
                                }
                                ?>
                                </a>
                            </div>
                            <div class="read-more__bottom-item-text">
                                <a class="read-more__bottom-item-text-title-link" href="<?php the_permalink(); ?>">
                                    <p class="read-more__bottom-item-text-title body-18">
                                        <?php the_field('post_item_title') ?>
                                    </p>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="read-more__bottom-item-text-desc-link">
                                    <div class="read-more__bottom-item-text-desc body-16">
                                        <?php the_field('post_item_desc') ?>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <?php endwhile;
                    wp_reset_postdata();
                    else : ?>
                        <li class="splide__slide">
                            <p><?php _e('Brak postów do wyświetlenia.'); ?></p>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="read-more__top-btn">
                <?php
                        // $link = get_field('read_more_btn', $my_page_id);
                        // if( $link ): 
                        // $link_url = $link['url'];
                        // $link_title = $link['title'];
                        // $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                <!-- <a class="read-more__top-btn-link btn-white-to-purple body-16"
                        target="<?php // echo esc_attr( $link_target ); ?>" href="<?php // echo esc_url( $link_url ); ?>">
                        <?php // echo esc_html( $link_title ); ?>
                    </a> -->

                <?php
                        $link_target = '_blank'; // Replace this with your logic if the target varies
                        $link_title = 'Zobacz wszystkie artykuły'; // Replace this with your logic if the title varies

                        // Example links (replace with your actual URLs)
                        $link_url_pl = '/blog/';
                        $link_url_en = '/en/blog/';

                        if (function_exists('pll_current_language')) {
                            $current_lang = pll_current_language(); // Fetch the current language
                            $link_url = ($current_lang == 'pl') ? $link_url_pl : $link_url_en; // Set the link based on the language
                        } else {
                            $link_url = $link_url_en; // Default to English if Polylang is not available
                            $link_title = 'Read more';
                        }
                        ?>
                <a class="read-more__top-btn-link btn-white-to-purple body-16"
                    target="<?php echo esc_attr($link_target); ?>" href="<?php echo esc_url($link_url); ?>">
                    <?php echo esc_html($link_title); ?>
                </a>

                <?php // endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const readMoreItems = document.querySelectorAll('.read-more__bottom-item-img');
    readMoreItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const url = item.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        });
    });
});
</script>