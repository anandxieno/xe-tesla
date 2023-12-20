<?php get_header() ?>

<!--Charging category home banner-->
<?php
  if( have_rows('charging_home_banner') ):
    while( have_rows('charging_home_banner') ) : the_row(); ?>
    <section class="banner relative acf-cat category-banner">
            <img src="<?php echo get_sub_field('background_image') ?>" alt="" class="w-full h-screen absolute z-[-1]">
     <div class="container">
     <div class="flex flex-col justify-between h-screen items-center">
     <div class="sec-top-contant">
        <h2><?php echo get_sub_field('title') ?></h2>
     </div>
        <div class="sec-bottom-content pb-6">
            <div class="flex gap-24 mb-10  items-start">
                <div class="detail-wrap gap-24 flex justify-between">
                    <div class="detail-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/real-estate.png" alt="" class="w-7 mx-auto">
                        <h5 class="text-[12px] pt-2 text-white text-center">Designed for Any <br> Property</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white text-center"><?php echo get_sub_field('certified_installers') ?> <span class="text-xl font-semibold text-white pl-1">+</span></h4>
                        <h5 class="text-[12px] pt-2 text-white text-center">Tesla Certified Installers <br> in North America</h5>
                    </div>
                    <div class="detail-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/clock-50.png" alt="" class="w-7 mx-auto">
                        <h5 class="text-[12px] pt-2 text-white text-center">Charge<br>Anytime</h5>
                    </div>
                </div>
                <a href="<?php echo get_sub_field('order_url') ?>" class="btn border light">Shop Now</a>
            </div>
        </div>
        </div>
        </div>
    </section>
   <?php endwhile;
    endif; ?>

<!-- Ways of charge -->
<section>
    <div class="container meadium">
        <div class="section-heading text-center pt-24 pb-10">
        <h2 class="text-[#171a20]">Three Ways to Charge at Home</h2>
        <a href="#" class="btn border inline-block">Compare Products</a>
    </div>
    <div class="ways-wrap pb-16">
        <div class="grid grid-cols-3 gap-4">
            <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/way1.jpg" alt="">
                <div class="content">
                    <h3 class="t-22 pt-8 pb-2">Mobile Connector</h3>
                    <p>Portable and convenient, charge your Tesla vehicle wherever you are. Mobile Connector adds up to 3 miles of range per hour (or 1.3 kW) on standard household outlets or up to 30 miles (or 7.6 kW) on a 240 V outlet.</p>
                    <a href="#" class="underline inline-block mt-4 text-[#393c41]">Order Mobile Connector</a>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/way1.jpg" alt="">
                <div class="content">
                    <h3 class="t-22 pt-8 pb-2">Mobile Connector</h3>
                    <p>Portable and convenient, charge your Tesla vehicle wherever you are. Mobile Connector adds up to 3 miles of range per hour (or 1.3 kW) on standard household outlets or up to 30 miles (or 7.6 kW) on a 240 V outlet.</p>
                    <a href="#" class="underline inline-block mt-4 text-[#393c41]">Order Mobile Connector</a>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/way1.jpg" alt="">
                <div class="content">
                    <h3 class="t-22 pt-8 pb-2">Mobile Connector</h3>
                    <p>Portable and convenient, charge your Tesla vehicle wherever you are. Mobile Connector adds up to 3 miles of range per hour (or 1.3 kW) on standard household outlets or up to 30 miles (or 7.6 kW) on a 240 V outlet.</p>
                    <a href="#" class="underline inline-block mt-4 text-[#393c41]">Order Mobile Connector</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</section>


<!-- Convanse charge -->
<!-- <section class="relative">
       <img src="<?php echo get_template_directory_uri() ?>/assets/images/w-full-cold.jpg" alt="" class="w-full absolute z-[-1]">
       <div class="container absolute left-0 right-0">
       <?php if( have_rows('convenience') ):
             while( have_rows('convenience') ): the_row();  ?>
                <div class="container meadium">
                    <div class="section-details gap-5">
                       <div class="heading col-span-4">
                          <div class="pt-4 pb-2">
                             <span class="h4"><?php echo get_sub_field('title') ?></span>
                             <h3><?php echo get_sub_field('heading') ?></h3>
                          </div>
                    
                          <a href="<?php echo get_sub_field('more_info') ?>" class="btn border">Learn More</a>
                        </div>
                        <div class="right col-span-8">
                          <p class=""><?php echo get_sub_field('description') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
       </div>
</section> -->

<!-- Instalation features -->
<section class="relative">
    <div class="container meadium">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/installing.jpg" alt="" class="w-full">
        <?php if( have_rows('convenience') ):
             while( have_rows('convenience') ): the_row();  ?>
                    <div class="section-details gap-5">
                       <div class="heading col-span-4">
                          <div class="pt-4 pb-2">
                             <span class="h4"><?php echo get_sub_field('title') ?></span>
                             <h3><?php echo get_sub_field('heading') ?></h3>
                          </div>
                    
                          <a href="<?php echo get_sub_field('more_info') ?>" class="btn border">Learn More</a>
                        </div>
                        <div class="right col-span-8">
                          <p class=""><?php echo get_sub_field('description') ?></p>
                        </div>
                    </div>
            <?php endwhile; ?>
            <?php endif; ?>
       </div>
    </div>
</section>


<!-- Full width Image -->
<section class="pt-6 pb-8">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/w-full-charging.jpg" alt="" class="w-full">
       <?php if( have_rows('convenience') ):
             while( have_rows('convenience') ): the_row();  ?>
                <div class="container meadium">
                    <div class="section-details gap-5">
                       <div class="heading col-span-4">
                          <div class="pt-4 pb-2">
                             <span class="h4"><?php echo get_sub_field('title') ?></span>
                             <h3><?php echo get_sub_field('heading') ?></h3>
                          </div>
                    
                          <a href="<?php echo get_sub_field('more_info') ?>" class="btn border">Learn More</a>
                        </div>
                        <div class="right col-span-8">
                          <p class=""><?php echo get_sub_field('description') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
</section>

<!-- bottom section -->
<section class="solar-section dark relative pt-12">
        <div class="container meadium">
            <div class="middle-part py-[180px] max-w-[700px] w-full mx-auto text-center">
                <div class="div mx-auto w-fit text-center pb-[160px]">
                <h2><strong>Order a Home Charging Product</strong></h2>
                <a href="#" class="btn border light">Order Now</a><br>
                <a href="#" class="btn gray">Home Charging Support</a><br>
                </div>
                <p>Certain high data usage vehicle features require at least Standard Connectivity, including maps, navigation and voice commands. Access to features that use cellular data and third-party licenses are subject to change. Learn more about Standard Connectivity and any limitations.</p>

            </div>
        </div>
       
    </section>


<?php get_footer() ?>