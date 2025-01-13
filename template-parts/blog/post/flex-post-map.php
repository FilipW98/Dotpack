<section class="post-map">
<div class="post-map__outer">
    <div class="post-map__inner">
            <div class="post-map__img fade animate">
                 <?php   
                            $image = get_sub_field('post_map_img'); 
                            $size = array(902,590);
                            ?>
                <?php  if($image){
                            echo wp_get_attachment_image( $image, $size );
                            } 
                        ?>
            </div>
    </div>
</div>
</section>