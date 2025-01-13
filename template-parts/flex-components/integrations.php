<section class="integrations">
    <div class="integrations__outer">
        <div class="integrations__inner">
            <div class="integrations__wrapper">
                <div class="carousel-border">
                    <div class="carousel-wrapper slide-to-right animate">
                        <div class="circle-move"></div>
                        <div class="logo-border">
                            <div class="svg-border">
                                <svg class="carousel" width="494" height="494" viewBox="0 0 494 494" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M399.806 53.9412C506.509 138.379 524.558 293.33 440.119 400.033C355.681 506.735 200.731 524.784 94.028 440.346C-12.6747 355.908 -30.7236 200.957 53.7146 94.2546C138.153 -12.4481 293.103 -30.4971 399.806 53.9412Z"
                                        stroke="url(#paint0_linear_799_9136)" stroke-width="0.8" />
                                    <defs>
                                        <linearGradient id="paint0_linear_799_9136" x1="-53.3574" y1="228.915"
                                            x2="587.786" y2="154.233" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7209B7" />
                                            <stop offset="0.328791" stop-color="white" />
                                            <stop offset="0.508765" stop-color="#E4D0F1" />
                                            <stop offset="0.717957" stop-color="white" />
                                            <stop offset="0.861703" stop-color="#7209B7" />
                                            <stop offset="0.952858" stop-color="#A7A2A2" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="box-logo center"></div>
                            <div class="box-logo logo-1">
                                <?php 
                                $image = get_field('integrations_logo_1');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-2">
                                <?php 
                                $image = get_field('integrations_logo_2');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-3">
                                <?php 
                                $image = get_field('integrations_logo_3');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-4">
                                <?php 
                                $image = get_field('integrations_logo_4');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-5">
                                <?php 
                                $image = get_field('integrations_logo_5');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-6">
                                <?php 
                                $image = get_field('integrations_logo_6');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-7">
                                <?php 
                                $image = get_field('integrations_logo_7');
                                $size = 'full';
                                $attr = array('class' => 'logo rotation');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                            <div class="box-logo logo-8">
                                <?php 
                                $image = get_field('integrations_logo_8');
                                $size = 'full';
                                $attr = array('class' => 'logo');
                                if($image){
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="txt fade animate">
                    <div class="main-title-border">
                        <span class="main-title h-40">
                            <?php the_field('integrations_title') ?>
                        </span>
                    </div>
                    <div class="desc-border">
                        <span class="desc body-18">
                            <?php the_field('integrations_desc') ?>
                        </span>
                    </div>
                    <div class="thin-info-border">
                        <span class="thin-info body-18">
                            <i><?php the_field('integrations_question') ?></i>
                        </span>
                    </div>
                    <div class="button-border">
                        <?php 
                        $link = get_field('integrations_link');
                        if($link): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button btn-white-to-purple" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                        <?php endif; ?>
                        <div class="circle__circle first"></div>
                        <div class="circle__circle second"></div>
                        <div class="circle__circle third"></div>
                        <div class="circle__circle four"></div>
                    </div>
                    <div class="circle-wrapper">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>