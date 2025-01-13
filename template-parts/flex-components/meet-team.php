 <section class="meet-team">
     <div class="meet-team__outer">
         <div class="meet-team__inner">
             <div class="meet-team__header slide-to-right animate">
                 <h3 class="meet-team__header-title h-48"><?php the_field('meet_team_title') ?></h3>
                 <p class="meet-team__header-desc body-16"><?php the_field('meet_team_desc') ?></p>
             </div>

             <div class="meet-team__splide splide" aria-label="Custom Arrows Example">

                 <div class="splide__arrows meet-team__splide-arrows">
                     <button class="splide__arrow splide__arrow--prev meet-team__splide-button"></button>
                     <button class="splide__arrow splide__arrow--next meet-team__splide-button"></button>
                 </div>

                 <div class="splide__track fade animate">
                     <ul class="splide__list meet-team__items">
                         <?php if(have_rows('meet_team_items')): ?>
                         <?php while(have_rows('meet_team_items')): the_row(); ?>
                         <?php   
                            $image = get_sub_field('img'); 
                            $full_size = wp_get_attachment_image_src($image, 'full');
                            $size = array(622, 625) ?>

                         <li class="splide__slide meet-team__items-item" img-number="<?php echo $img_number;?>">
                             <div class="meet-team__items-item-img">
                                 <?php  if($image){
                            echo wp_get_attachment_image( $image, $size );
                            } 
                        ?>
                                 <div class="meet-team__items-item-img-circle">
                                         <img class="meet-team__items-item-img-circle-logo" src="/wp-content/uploads/2024/11/dotpack_logo_white.svg" alt="logo">
                                 </div>
                             </div>

                             <div class="meet-team__items-item-content">
                                 <div class="meet-team__items-item-content-text">
                                     <p class="meet-team__items-item-content-text-name h-40">
                                         <?php the_sub_field('meet_team_item_name') ?></p>
                                     <p class="meet-team__items-item-content-text-position body-24">
                                         <?php the_sub_field('meet_team_item_position') ?>
                                     </p>
                                     <div class="meet-team__items-item-content-text-desc body-16">
                                         <?php the_sub_field('meet_team_item_desc') ?>
                                     </div>
                                 </div>

                                 <div class="meet-team__items-item-content-bottom">
                                    <div class="meet-team__items-item-content-btn " id="btn-<?php echo $btn_count; ?>">
                                         <?php
                                        $link = get_sub_field('meet_team_btn');
                                        if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                         <span class="meet-team__items-item-content-btn-link  body-14 "
                                             target="<?php echo esc_attr( $link_target ); ?>"
                                             href="<?php echo esc_url( $link_url ); ?>">
                                             <?php echo esc_html( $link_title ); ?>
                                             <img src="/wp-content/uploads/2024/10/arrow_white.svg" alt="arrow-right"
                                                 class="meet-team__items-item-content-btn-link-icon">
                                         </span>
                                         <?php endif; ?>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <?php endwhile; ?>
                         <?php endif; ?>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>