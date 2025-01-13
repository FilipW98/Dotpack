<section class="contact-page-form">
    <!-- <div class="contact-form__circle"></div> -->
    <div class="contact-page-form__outer">
        <!-- <img class="contact-page-form__circle" src="/wp-content/uploads/2024/10/Ellipse-210.svg" alt="circle"> -->
        <!-- <img class="contact-page-form__circle-right" src="/wp-content/uploads/2024/10/form_line_right.svg" alt="circle-right"> -->
          <img class="contact-page-form__circle" src="/wp-content/uploads/2024/10/Ellipse-210.svg" alt="circle">
        <div class="contact-page-form__inner">

            <div class="contact-page-form__info slide-to-right animate">
                <h2 class="contact-page-form__info-heading h-40">
                    <?php the_field('contact_form_page_heading') ?>
                </h2>
                <div class="contact-page-form__info-data">
                    <a href="tel:<?php the_field('contact_page_number') ?>" class="contact-page-form__info-data-phone">
                        <img src="https://dot.hiforyou.pl/wp-content/uploads/2024/10/phone-icon.svg" alt="phone-icon"
                            class="contact-page-form__info-data-phone-icon">
                        <p class="contact-page-form__info-data-phone-text body-18">
                            <?php the_field('contact_page_number') ?></p>
                    </a>
                    <a href="mailto:<?php the_field('contact_page_mail')?>" class="contact-page-form__info-data-mail">
                        <img src="/wp-content/uploads/2024/10/mail-icon.svg" alt="mail-icon"
                            class="contact-page-form__info-data-mail-icon">
                        <p class="contact-page-form__info-data-mail-text body-18">
                            <?php the_field('contact_page_mail') ?></p>
                    </a>
                    <a href="https://maps.app.goo.gl/26WYDATTv6Jeh6a78"
                        target="_blank" class="contact-page-form__info-data-location">
                        <img src="/wp-content/uploads/2024/10/location-icon-2.svg" alt="location-icon"
                            class="contact-page-form__info-data-location-icon">
                        <p class="contact-page-form__info-data-location-text body-16">
                            <?php the_field('contact_page_adress') ?></p>
                    </a>

                    <div class="contact-page-form__info-data-media">
                        <a href="https://m.me/dotpacklogistics" class="contact-page-form__info-data-media-link" target="_blank">
                            <img src="/wp-content/uploads/2024/10/messenger.png" alt="messenger-icon"
                                class="contact-page-form__info-data-media-messenger">
                        </a>
                        <a href="https://wa.me/48533364535" class="contact-page-form__info-data-media-link" target="_blank">
                            <img src="/wp-content/uploads/2024/10/whatsup.png" alt="whatsup-icon"
                                class="contact-page-form__info-data-media-whatsup">
                        </a>
                    </div>

                </div>
            </div>

            <div class="contact-page-form__contact-box fade animate">
                <?php
                        if(get_locale() == 'pl_PL') {
                            echo do_shortcode('[contact-form-7 id="8538e96" title="Formularz strony kontaktu"]');
                        } 
                    ?>
            </div>
        </div>
    </div>
</section>