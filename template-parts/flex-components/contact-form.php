<section id="contact-form" class="contact-form">
    <!-- <div class="contact-form__circle"></div> -->
    <div class="contact-form__top">
        <p class="contact-form__top-question h-40 slide-to-right animate"><?php the_field('contact_form_question', 'option') ?></p>
        <p class="contact-form__top-desc body-18 slide-to-left animate"><?php the_field('contact_form_desc','option') ?></p>
    </div>
    <div class="contact-form__outer">
        <img class="contact-form__circle" src="/wp-content/uploads/2024/10/Ellipse-210.svg" alt="circle">
       
        <div class="contact-form__inner fade animate">

            <div class="contact-form__heading-box h-40">
                <?php the_field('contact_form_heading', 'option') ?>
            </div>
            <div class="contact-form__text-box body-18">
                <?php the_field('contact_form_text', 'option') ?>
            </div>

            <div class="contact-form__contact-box">
                <?php
                        if(get_locale() == 'pl_PL') {
                            echo do_shortcode('[contact-form-7 id="81d921d" title="Formularz kontaktowy"]');
                        } 
                    ?>
            </div>
        </div>
    </div>
</section>