<section class="we-believe">
    <div class="we-believe__outer">
        <div class="we-believe__inner">
            <div class="we-believe__inner-container">
                <div class="we-believe__top">
                    <div class="we-believe__error-border">
                        <div class="we-believe__circle-border">
                            <div class="we-believe__circle-wrapper">
                                <div class="circle-1">
                                    <div class="moving-ball"></div>
                                    <div class="we-believe__border">
                                        <div class="we-believe__txt-wrapper fade animate">
                                            <div class="text-container-title h-32"><?php the_field('s5_title-bold') ?>
                                                <i><?php the_field('s5_title-slim') ?></i>
                                            </div>
                                            <div class="text-container-desc body-18">
                                                <span class="text-container-desc__txt">
                                                    <?php the_field('s5_desc') ?>
                                                </span>
                                                <span class="text-container-desc__slim">
                                                    <i
                                                        class="text-container-desc__slim-txt"><?php the_field('s5_desc-slim') ?></i>
                                                </span>
                                            </div>
                                            <div class="we-believe__main-button">
                                                <?php 
                                                    $link = get_field('s5_button-txt');
                                                    if($link): 
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                <a class="we-believe-button btn-purple-to-trans-black"
                                                    href="<?php echo esc_url( $link_url ); ?>"
                                                    target="<?php echo esc_attr( $link_target ); ?>">
                                                    <?php echo esc_html( $link_title ); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="circle-2"></div>
                                <div class="circle-3"></div>
                                <div class="circle-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>