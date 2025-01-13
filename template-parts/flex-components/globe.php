<section class="globe">
    <div class="globe__outer">
        <div class="globe__inner">
            <div class="globe__content slide-to-right animate">
                <h3 class="globe__content-title h-56"><?php the_field('globe_title') ?></h3>
                <div class="globe__content-desc body-16">
                    <?php the_field('globe_desc') ?>
                </div>
                <p class="globe__content-info body-16"><?php the_field('globe_info') ?></p>
                <div class="globe__content-btn">
                    <?php
                        $link = get_field('globe_btn', $my_page_id);
                        if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="globe__content-btn-link btn-purple-to-trans-black  "
                        target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>">
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                    <?php endif; ?>


                </div>
            </div>

            <?php
                $video_url = get_field('globe_video');
                if ($video_url): ?>
            <div class="globe__video-box fade animate">
                <?php   
                        $intro_video_poster = get_field('globe_img');
                        $intro_video_src = get_field('globe_video');
                        ?>
                <video class="globe__video" muted playsinline loop="false" poster="<?php echo $intro_video_poster; ?>">
                    <source src="" data-src="<?php echo $intro_video_src; ?>" type="video/mp4">
                    Twoja przeglądarka nie wspiera odtwarzania plików wideo.
                </video>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>