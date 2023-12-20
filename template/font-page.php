
<?php 
 /* 
   Template Name: Front page 
   */
?>


<?php  get_header(); ?>

<div class="main-div">

<!-- <section class="banner relative">
    <video src="https://digitalassets.tesla.com/tesla-contents/video/upload/Homepage-Model-Y-Desktop-NA.mp4" loop muted autoplay  class="main-video absolute w-screen z-[-1] h-screen object-cover"></video>
    <div class="container">
        <div class="flex flex-col justify-between h-screen items-center">
        <div class="sec-top-contant">
             <h2>Model Y</h2>
             <h3>Lease starting at $399/mo*</h3>
        </div>
        <div class="sec-middle-content grow"></div>
        <div class="sec-bottom-content pb-6">
            <div class="flex gap-5 mb-10">
                <a href="#" class="btn">Order Now</a>
                <a href="#" class="btn light">Demo Drive</a>
            </div>
            <p>*Excludes taxes and fees with price subject to change. Available in select states. <a href="#" class="underline">See Details</a></p>
        </div>
        </div>
    </div>
</section> -->

<!-- model 3 -->

<!-- <section class="banner relative">
    <div class="bg-img bg-full image" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/Homepage-Model-3-Desktop-NA.jpg)"></div>
    <div class="container">
        <div class="flex flex-col justify-between h-screen items-center">
        <div class="sec-top-contant">
             <h2>Model Y</h2>
             <h3>Lease starting at $399/mo*</h3>
        </div>
        <div class="sec-middle-content grow"></div>
        <div class="sec-bottom-content pb-6">
            <div class="flex gap-5 mb-10">
                <a href="#" class="btn">Order Now</a>
                <a href="#" class="btn light">Demo Drive</a>
            </div>
            <p>*Excludes taxes and fees with price subject to change. Available in select states. <a href="#" class="underline">See Details</a></p>
        </div>
        </div>
    </div>
</section> -->
   
<?php

if( have_rows('section_add') ):
    while( have_rows('section_add') ) : the_row(); ?>
    <section class="banner" data-theme="<?php echo get_sub_field('select_theme_type') ? ('dark') : ('light') ; ?>">
        <?php if(get_sub_field('if_background_video')) : ?>
            <video src="<?php echo get_sub_field('video_file'); ?>" loop muted autoplay  class="main-video absolute w-screen z-[-1] h-screen object-cover"></video>
        <?php else : ?>
            <div class="bg-img bg-full image" style="background-image:url(<?php echo get_sub_field('background_image') ?>)"></div>
       <?php endif ?>
     <div class="container">
     <div class="flex flex-col justify-between h-screen items-center">
     <div class="sec-top-contant">
        <h2><?php echo get_sub_field('model_name') ?></h2>
        <h3><?php echo get_sub_field('starting_price') ?></h3>
   </div>
   <div class="sec-middle-content grow"></div>
   <div class="sec-bottom-content pb-6">
       <div class="flex gap-5 mb-10">
           <a href="'<?php echo get_sub_field('order_now') ?>'" class="btn">Order Now</a>
           <a href="<?php echo get_sub_field('demo_live') ?>" class="btn light">Demo Live</a>
       </div>
       <p>*Excludes taxes and fees with price subject to change. Available in select states. <a href="<?php echo get_sub_field('see_details') ?>" class="underline">See Details</a></p>
   </div>
   </div>
   </div>
    </section>
   <?php endwhile;
endif;

?>
</div>

<?php get_footer() ?>

