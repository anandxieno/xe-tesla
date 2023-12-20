<section class="xe-tesla-slider dark">
    <div class="container">
        <div class="video-part xe-tesla-video">
            <?php if( have_rows('xe_tesla_carousel', 'option') ):
                while( have_rows('xe_tesla_carousel', 'option') ) : the_row(); ?> 
                <div class="video-item w-full h-full">
                 <video src="<?php echo get_sub_field('video_file', 'option') ?>" autoplay loop muted class="w-full h-full object-cover"></video>
                </div>
                <?php endwhile; endif; ?>
        </div>
        
        <div class="content-part xe-tesla-content">
            <?php if( have_rows('xe_tesla_carousel', 'option') ):
                while( have_rows('xe_tesla_carousel', 'option') ) : the_row(); ?>     
                <div class="content-item w-full">
                   <h3><?php echo the_sub_field('carousel_heading', 'option') ?></h3>
                   <p><?php echo the_sub_field('carousel_description', 'option') ?></p>
                </div>
            <?php endwhile; endif; ?>  
        </div>
    </div>
</section>






  

