<section class="contents">
    <div class="contents__outer">
        <div class="contents__inner fade animate">
            <h3 class="contents__title h-32"><?php the_sub_field('contents_title') ?></h3>

            <div class="contents__items">
                <?php if(have_rows('contents_items')): 
                    $counter = 1;
                while(have_rows('contents_items')): the_row(''); ?>
                <a href="#<?php the_sub_field('contents_id')?>" class="contents__items-item">
                    <span class="contents__items-item-number"><?php echo $counter ?>. </span>
                    <span class="contents__items-item-text body-16"> <?php the_sub_field('contents_item'); ?></span>
                </a>
                <?php $counter++; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>