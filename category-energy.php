<?php get_header() ?>

<!--Energy category home banner-->
  <?php
  if( have_rows('energy_home_banner') ):
    while( have_rows('energy_home_banner') ) : the_row(); ?>
    <section class="banner relative acf-cat category-banner">
            <img src="<?php echo get_sub_field('background_image') ?>" alt="" class="w-full h-screen absolute z-[-1]">
     <div class="container">
     <div class="flex flex-col justify-between h-screen items-center">
     <div class="sec-top-contant">
        <h2><?php echo get_sub_field('energy_name') ?></h2>
     </div>
        <div class="sec-bottom-content pb-6">
            <div class="flex gap-24 mb-10  items-start">
                <div class="detail-wrap gap-24 flex justify-between">
                    <div class="detail-item">
                        <img src="<?php echo get_sub_field('product_image') ?>" alt="">
                        <h5 class="text-[12px] pt-2 text-white text-center">Beautiful <br>Solar</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white"><?php echo get_sub_field('product_warranty') ?> <span class="text-xl font-semibold text-white pl-1">-Year</span></h4>
                        <h5 class="text-[12px] pt-2 text-white text-center">Tile <br>Warranty</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white"><?php echo get_sub_field('product_protection') ?> <span class="text-xl font-semibold text-white pl-1"></span></h4>
                        <h5 class="text-[12px] pt-2 text-white text-center">Outage <br>Protection</h5>
                    </div>
                </div>
                <a href="<?php echo get_sub_field('order_url') ?>" class="btn light">Order Now</a>
            </div>
        </div>
        </div>
        </div>
    </section>
   <?php endwhile;
    endif; ?>

    <!-- Full width image part  -->
    <section class="">
        <?php if( have_rows('full_width_with_media') ):
             while( have_rows('full_width_with_media') ): the_row();  ?>
               <div class="img-part w-full h-[414px]">
                  <img src="<?php echo get_sub_field('media') ?>" alt="" class="w-full h-full object-cover">
                </div>
                <div class="container meadium">
                    <div class="section-details gap-5">
                       <div class="heading col-span-5">
                          <div class="pt-4 pb-2">
                             <span class="h4"><?php echo get_sub_field('title') ?></span>
                             <h3><?php echo get_sub_field('heading') ?></h3>
                          </div>
                    
                          <a href="#" class="btn border">Order Now</a>
                        </div>
                        <div class="right col-span-7">
                          <p class=""><?php echo get_sub_field('description') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </section>

    <!-- Full detailed section -->
    <section class="full-section">
        <?php
        if( have_rows('full_width_content_with_media') ):
        while( have_rows('full_width_content_with_media') ) : the_row(); ?>
         <div class="detail-wrap">
            <div class="detail-content py-8 px-10 flex flex-col justify-between">
                <div class="div">
                <span class="h4"><?php echo get_sub_field('title') ?></span>
                <h3><?php echo get_sub_field('heading') ?></h3>
                <p><?php echo get_sub_field('description') ?></p>
                </div>
                <div class="div">
                    <a href="<?php echo get_sub_field('order_now') ?>" class="btn border">Order Now</a>
                    <a href="#" class="btn gray">Learn More</a>
                </div>
            </div>
            <div class="detailed-media">

               <?php if( get_sub_field('please_select_media_file_type')) : ?>
                <video src="<?php echo get_template_directory_uri() ?>/assets/images/SR-Durability-Desktop.mp4" muted autoplay loop></video>
                <?php else : ?>
                 <img src="<?php echo get_template_directory_uri() ?>/assets/images/digitalassets-tesla-com-tesla-contents-image-1.jpg" alt="">
               <?php endif; ?>     
            </div>
        </div>
        <?php endwhile; endif ?>
        <?php if( have_rows('content-media_section_detail') ):
             while( have_rows('content-media_section_detail') ): the_row();  ?>
                <div class="container meadium">
                    <div class="section-details gap-5 ">
                       <div class="heading col-span-5">
                          <div class="pt-4 pb-2">
                             <span class="h4"><?php echo get_sub_field('title') ?></span>
                             <h3><?php echo get_sub_field('heading') ?></h3>
                          </div>
                    
                          <a href="#" class="btn border">Order Now</a>
                        </div>
                        <div class="right col-span-7">
                          <p class=""><?php echo get_sub_field('description') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </section>

    <!--Energy steps  -->
    <?php if( have_rows('model-compair') ): ?>
        <section class="model-compair">
            <div class="container px-12">
                <div class="steps-media models-for">
                    <?php while( have_rows('model-compair') ) : the_row(); ?>
                        <div class="step-item">
                            <video src="<?php echo get_sub_field('media_file') ?>" muted autoplay loop show controls="true" class="w-full h-full"></video>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="container meadium model-details">   
                <div class="models-wrap models-nav">
                    <?php while( have_rows('model-compair') ) : the_row(); ?>
                            <div class="item border-t-2 border-black opacity-40 transition-all duration-300">
                                <h3><?php echo get_sub_field('heading') ?></h3>
                                <p><?php echo get_sub_field('excerpt') ?></p>
                            </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php  endif; ?>
<!-- Full Width section -->
<?php if( have_rows('solar_efficiency') ):
    while( have_rows('solar_efficiency') ) : the_row(); ?>
    <section class="full-section">
        <div class="detail-wrap">
            <div class="detail-content py-8 px-10 flex flex-col justify-between">
                <div class="div">
                <span  class="h4"><?php echo get_sub_field('title') ?></span>
                <h3><?php echo get_sub_field('heading') ?></h3>
                <p><?php echo get_sub_field('description') ?></p>
                </div>
                <a href="<?php echo get_sub_field('order_now') ?>" class="btn border">Order Now</a>
                </div>
            <div class="detailed-media">
                <img src="<?php echo get_sub_field('solar_efficiency_image') ?>" alt="">
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<!-- Control moniter -->
<?php if(have_rows('monitor_optimize')) :
    while(have_rows('monitor_optimize')) : the_row(); ?>
    <section class="Monitor-Optimize">
          <div class="img-part w-full h-[414px]">
            <img src="<?php echo get_sub_field('control_monitor_image') ?>" alt="" class="w-full h-full object-cover">
          </div>
          <div class="container meadium">
            <div class="section-details gap-5">
                <div class="heading col-span-5">
                    <div class="pt-4 pb-2">
                     <span><?php echo get_sub_field('title') ?></span>
                      <h3><?php echo get_sub_field('heading') ?></h3></div>
                    
                    <a href="#" class="btn border">Order Now</a>
                </div>
                <div class="right col-span-7">
                <p class=""><?php echo get_sub_field('description') ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>

<!-- bottom section -->
    <section class="solar-section dark relative pt-12">
        <div class="container meadium">
            <div class="grid grid-cols-2">
                <div class="div">

                </div>
                <div class="div">
                    <h2><strong>Solar Roof</strong> Specs</h2>
                    <ul class="roof-space-list grid grid-cols-2 gap-x-6 pt-12">
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Tile and Power Warranty</h3>
                            <h4>25 years</h4>
                        </li>
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Solar Glass Tiles</h3>
                            <h4>72 W</h4>
                        </li>
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Steel Tiles </h3>
                            <h4>Corrosion and weather resistant</h4>
                        </li>
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Wind Rating</h3>
                            <h4>Class F (highest rating)</h4>
                        </li>
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Solar Glass Tiles</h3>
                            <h4>72 W</h4>
                        </li>
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Steel Tiles </h3>
                            <h4>Corrosion and weather resistant</h4>
                        </li>
                        <li>
                            <div class="w-8 h-[1px] bg-[#8e8e8e] mb-3"></div>
                            <h3 class="h5">Wind Rating</h3>
                            <h4>Class F (highest rating)</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="middle-part py-[180px]">
                <div class="div mx-auto w-fit text-center">
                <h2><strong>Transform Your Roof</strong></h2>
                <a href="#" class="btn border light">Order Now</a><br>
                <a href="#" class="btn">Schedule a Virtual Consultation</a><br>
                <a href="#" class="text-gray-light underline mt-5 block">Get Updates</a>
                </div>
            </div>
        </div>
        <div class="left-part w-1/2 absolute left-0 top-0">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/PanelMeasure_desktop.png" alt="" class="w-full">
        </div>
    </section>


<?php get_footer() ?>

     