<section class="columns-text" id="<?php the_sub_field('columns_text_id')?>">
    <div class="columns-text__outer">
        <div class="columns-text__inner">
            <div class="columns-text__content">
                <?php 
                $second_column = get_sub_field('columns_second');
                $title_question = get_sub_field('title_question');
                $title_purple = get_sub_field('title_color_question');
                $title_purple_class = ($title_purple === "tak") ? 'purple-title' : ''; ?>

                <?php 
                   
                    $single_column = (!$second_column ? 'single-column-width' : '')
                    ?>
                    

                <div class="columns-text__content-first slide-to-right animate <?php echo $single_column ?>">

                    <?php
                    if($title_question === 'tak'):
                               ?>
                    <h3 class="columns-text__content-first-title h-32 <?php echo $title_purple_class ?>">
                        <?php the_sub_field('columns_title') ?></h3>
                    <?php else: ?>
                    <?php endif;?>

                    <div class="columns-text__content-first-desc">
                        <?php the_sub_field('columns_first') ?>
                    </div>
                    <?php
                    $columnButton = get_sub_field('columns_read_btn_first');
                   if($columnButton):
                    ?>
                    <div class="columns-text__content-first-read-btn">
                        <?php
                                        $link = get_sub_field('columns_read_btn_first');
                                        if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                        <span
                            class="columns-text__content-first-read-text"><?php the_sub_field('columns_read_first') ?></span>
                        <a class="columns-text__content-first-read-btn-link body-16"
                            target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php 
                //$title_question = get_sub_field('title_question');
                $second_column_class = ($title_question === 'nie') ? ' no-margin' : ''; 
                               ?>

                <?php if($second_column): ?>
                <div class="columns-text__content-second slide-to-left animate <?php echo $second_column_class; ?>">
                    <div class="columns-text__content-second-desc">
                        <?php the_sub_field('columns_second') ?>
                    </div>

                    <div class="columns-text__content-second-read-btn">
                        <?php
                                        $link = get_sub_field('columns_read_btn_second');
                                        if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                        <span
                            class="columns-text__content-second-read-text"><?php the_sub_field('columns_read_second') ?></span>
                        <a class="columns-text__content-second-read-btn-link body-16"
                            target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                        <?php endif; ?>

                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>